<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori_beritas')->get();

        $data = [
            'kategori' => $kategori,
            'script'   => 'components.scripts.kategori'
        ];

        return view('pages.kategori', $data);
    }

    public function show($id) {
        if(is_numeric($id)) {
            $data = DB::table('kategori_beritas')->where('id', $id)->first();

            //$data->status = number_format($data->status);

            return Response::json($data);
        }

        $data = DB::table('kategori_beritas')

            ->select([
                'kategori_beritas.*'
            ])
            ->orderBy('kategori_beritas.id', 'desc');

        return DataTables::of($data)
            ->editColumn(
                'status',
                function($row) {
                    return $row->status;
                }
            )
            ->addColumn(
                'action',
                function($row) {
                    $data = [
                        'id' => $row->id
                    ];

                    return view('components.buttons.kategori', $data);
                }
            )
            ->addIndexColumn()
            ->make(true);
    }

    public function store(Request $request)
    {
        if($request->title == NULL) {
            $json = [
                'msg'       => 'Mohon masukan judul berita',
                'status'    => false
            ];

        } else {


            try{
                DB::transaction(function() use($request) {
                    DB::table('kategori_beritas')->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'title' => $request->title,
                        'slug' => Str::slug($request->title),
                        'status' => 'active',
                    ]);
                });

                $json = [
                    'msg' => 'Kategori Berita berhasil ditambahkan',
                    'status' => true
                ];
            } catch(Exception $e) {
                $json = [
                    'msg'       => 'error',
                    'status'    => false,
                    'e'         => $e
                ];
            }
        }

        return Response::json($json);
    }

    public function edit(Request $request, $id)
    {
        if($request->title == NULL) {
            $json = [
                'msg'       => 'Mohon masukan judul kategori berita',
                'status'    => false
            ];
        }  else {
            try{
              DB::transaction(function() use($request, $id) {
                  DB::table('kategori_beritas')->where('id', $id)->update([
                      'updated_at' => date('Y-m-d H:i:s'),
                    
                      'slug' => Str::slug($request->title),
                      'status' => 'active',
                  ]);
              });

                $json = [
                    'msg' => 'Produk berhasil dirubah',
                    'status' => true
                ];
            } catch(Exception $e) {
                $json = [
                    'msg'       => 'error',
                    'status'    => false,
                    'e'         => $e
                ];
            }
        }

        return Response::json($json);
    }

    public function destroy($id)
    {

            try{

              DB::transaction(function() use($id) {
                  DB::table('kategori_beritas')->where('id', $id)->delete();
              });

                $json = [
                    'msg' => 'Kategori Berita berhasil dihapus',
                    'status' => true
                ];
            } catch(Exception $e) {
                $json = [
                    'msg'       => 'error',
                    'status'    => false,
                    'e'         => $e
                ];
            }


        return Response::json($json);
    }
}
