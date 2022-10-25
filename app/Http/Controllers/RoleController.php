<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class RoleController extends Controller
{

    public function index()
    {
        $role = DB::table('roles')->get();

        $data = [
            'nama' => $role,
            'script'   => 'components.scripts.role'
        ];

        return view('pages.role', $data);
    }

    public function show($id) {
        if(is_numeric($id)) {
            $data = DB::table('roles')->where('id', $id)->first();

            //$data->status = number_format($data->status);

            return Response::json($data);
        }

        

        $data = DB::table('roles')

            ->select([
                'roles.*'
            ])
            ->orderBy('name', 'desc');

        return DataTables::of($data)
            ->addColumn(
                'action',
                function($row) {
                    $data = [
                        'id' => $row->id
                    ];

                    return view('components.buttons.role', $data);
                }
            )
            ->addIndexColumn()
            ->make(true);
    }

    public function store(Request $request)
    {
        if($request->title == NULL) {
            $json = [
                'msg'       => 'Mohon masukan role',
                'status'    => false
            ];

        } else {


            try{
                DB::transaction(function() use($request) {
                    DB::table('roles')->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'name' => $request->title,
                        'guard_name' => 'web',
                    ]);
                });

                $json = [
                    'msg' => 'Role berhasil ditambahkan',
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
                'msg'       => 'Mohon masukan role',
                'status'    => false
            ];
        }  else {
            try{
              DB::transaction(function() use($request, $id) {
                  DB::table('roles')->where('id', $id)->update([
                      'updated_at' => date('Y-m-d H:i:s'),
                      'name' => $request->title,
                  ]);
              });

                $json = [
                    'msg' => 'Role berhasil diubah',
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
                  DB::table('roles')->where('id', $id)->delete();
              });

                $json = [
                    'msg' => 'Role berhasil dihapus',
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


