<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        $data = [
            'users' => $users,
            'script'   => 'components.scripts.pengguna'
        ];

        return view('pages.pengguna', $data);
    }

    public function show($id) {
        if(is_numeric($id)) {
            $data = DB::table('users')->where('id', $id)->first();

            //$data->status = number_format($data->status);

            return Response::json($data);
        }

        $data = DB::table('users')
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->select([
                'users.*', 'roles.name as role'
            ])
            ->orderBy('users.id', 'desc');

        return DataTables::of($data)

            ->addColumn(
                'action',
                function($row) {
                    $data = [
                        'id' => $row->id
                    ];

                    return view('components.buttons.pengguna', $data);
                }
            )
            ->addIndexColumn()
            ->make(true);
    }

    public function store(Request $request)
    {
        if($request->title == NULL) {
            $json = [
                'msg'       => 'Mohon masukan data pengguna',
                'status'    => false
            ];

        } else {


            try{
                DB::transaction(function() use($request) {
                    DB::table('users')->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'name' => $request->title,
                        'email' => $request->title,
                        'role' => $request->title,
                        'password' => Hash::make($request->password),
                    ]);
                });

                $json = [
                    'msg' => 'Pengguna berhasil ditambahkan',
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
                'msg'       => 'Mohon masukan data pengguna',
                'status'    => false
            ];
        }  else {
            try{
              DB::transaction(function() use($request, $id) {
                  DB::table('users')->where('id', $id)->update([
                      'updated_at' => date('Y-m-d H:i:s'),
                      'role' => $request->title,
                  ]);
              });

                $json = [
                    'msg' => 'Pengguna berhasil dirubah',
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
                  DB::table('users')->where('id', $id)->delete();
              });

                $json = [
                    'msg' => 'Pengguna berhasil dihapus',
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
