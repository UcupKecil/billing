<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function index()
    {
        $BeritaKategori = DB::table('kategori_beritas')->get();

        $data = [
            'BeritaKategori' => $BeritaKategori,
            'script'            => 'components.scripts.berita'
        ];

        return view('pages.berita', $data);
    }

    public function show($id) {
        if(is_numeric($id)) {
            $data = DB::table('beritas')->where('id', $id)->first();



            return Response::json($data);
        }

        $data = DB::table('beritas')
            ->join('kategori_beritas', 'beritas.post_cat_id', '=', 'kategori_beritas.id')
            ->select([
                'beritas.*', 'kategori_beritas.title as kategori'
            ])
            ->orderBy('beritas.id', 'desc');

        return DataTables::of($data)
            ->editColumn(
                'status',
                function($row) {
                    return $row->status;
                }
            )
            ->editColumn(
                'photo',
                function($row) {
                    $data = [
                        'photo' => $row->photo
                    ];

                    return view('components.img.berita', $data);
                }
            )
            ->addColumn(
                'action',
                function($row) {
                    $data = [
                        'id' => $row->id
                    ];

                    return view('components.buttons.berita', $data);
                }
            )
            ->addIndexColumn()
            ->make(true);
    }

    public function store(Request $request)
    {
      $extension = $request->file('cover')->getClientOriginalExtension();

      $cover = date('YmdHis').'.'.$extension;

      $path = base_path('public/photo_berita');

      $request->file('cover')->move($path, $cover);
      //dd($extension);
        if($request->title == NULL) {
            $json = [
                'msg'       => 'Mohon masukan judul berita',
                'status'    => false
            ];
        } elseif(!$request->has('berita_kategori_id')) {
            $json = [
                'msg'       => 'Mohon pilih kategori berita',
                'status'    => false
            ];
        } elseif($request->quote == NULL) {
            $json = [
                'msg'       => 'Mohon masukan ringkasan berita',
                'status'    => false
            ];
        } elseif($request->summary == NULL) {
            $json = [
                'msg'       => 'Mohon masukan ringkasan berita',
                'status'    => false
            ];
        } elseif($request->description == NULL) {
            $json = [
                'msg'       => 'Mohon masukan deskripsi berita',
                'status'    => false
            ];
        }else {
            try{
                DB::transaction(function() use($request,$cover) {
                    DB::table('beritas')->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'title' => $request->title,
                        'slug' => Str::slug($request->title),
                        'post_cat_id' => $request->berita_kategori_id,
                        'summary' => $request->summary,
                        'quote' => $request->quote,
                        'description' => $request->description,
                        'added_by' =>  Auth::user()->id ,
                        'photo' => $cover,
                        'status' => 'active',
                    ]);
                });

                $json = [
                    'msg' => 'Produk berhasil ditambahkan',
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
      $extension = $request->file('coverEdit')->getClientOriginalExtension();

      $coverEdit = date('YmdHis').'.'.$extension;

      $path = base_path('public/photo_berita');

      $request->file('coverEdit')->move($path, $coverEdit);

        if($request->title == NULL) {
            $json = [
                'msg'       => 'Mohon masukan judul berita',
                'status'    => false
            ];
        } elseif(!$request->has('berita_kategori_id')) {
            $json = [
                'msg'       => 'Mohon pilih kategori berita',
                'status'    => false
            ];
        } elseif($request->quoteEdit == NULL) {
            $json = [
                'msg'       => 'Mohon masukan kutipan',
                'status'    => false
            ];
        }elseif($request->summaryEdit == NULL) {
            $json = [
                'msg'       => 'Mohon masukan ringkasan',
                'status'    => false
            ];
        }elseif($request->descriptionEdit == NULL) {
            $json = [
                'msg'       => 'Mohon masukan Deskripsi',
                'status'    => false
            ];
        } else {
            try{
              DB::transaction(function() use($request, $id, $coverEdit) {
                  DB::table('beritas')->where('id', $id)->update([
                      'updated_at' => date('Y-m-d H:i:s'),
                      'title' => $request->title,
                      'slug' => Str::slug($request->title),
                      'post_cat_id' => $request->berita_kategori_id,
                      'summary' => $request->summaryEdit,
                      'quote' => $request->quoteEdit,
                      'description' => $request->descriptionEdit,
                      'added_by' =>  Auth::user()->id ,
                      'photo' => $coverEdit,
                      'status' => 'active',

                  ]);
              });

                $json = [
                    'msg' => 'Berita berhasil dirubah',
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
                  DB::table('beritas')->where('id', $id)->delete();
              });

                $json = [
                    'msg' => 'Berita berhasil dihapus',
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
