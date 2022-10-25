<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        $productCategories = DB::table('product_categories')->get();

        $data = [
            'productCategories' => $productCategories,
            'script'            => 'components.scripts.product'
        ];

        return view('pages.product', $data);
    }

    public function show($id) {
        if(is_numeric($id)) {
            $data = DB::table('products')->where('id', $id)->first();

            $data->price = number_format($data->price);

            return Response::json($data);
        }

        $data = DB::table('products')
            ->join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
            ->select([
                'products.*', 'product_categories.name as product_category'
            ])
            ->orderBy('products.id', 'desc');

        return DataTables::of($data)
            ->editColumn(
                'price',
                function($row) {
                    return number_format($row->price);
                }
            )
            ->addColumn(
                'action',
                function($row) {
                    $data = [
                        'id' => $row->id
                    ];

                    return view('components.buttons.product', $data);
                }
            )
            ->addIndexColumn()
            ->make(true);
    }

    public function store(Request $request)
    {
        if($request->name == NULL) {
            $json = [
                'msg'       => 'Mohon masukan nama produk',
                'status'    => false
            ];
        } elseif(!$request->has('product_category_id')) {
            $json = [
                'msg'       => 'Mohon pilih kategori produk',
                'status'    => false
            ];
        } elseif($request->price == NULL) {
            $json = [
                'msg'       => 'Mohon masukan harga produk',
                'status'    => false
            ];
        } else {
            try{
                DB::transaction(function() use($request) {
                    DB::table('products')->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'name' => $request->name,
                        'product_category_id' => $request->product_category_id,
                        'price' => str_replace(',','',$request->price),
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
        if($request->name == NULL) {
            $json = [
                'msg'       => 'Mohon masukan nama produk',
                'status'    => false
            ];
        } elseif(!$request->has('product_category_id')) {
            $json = [
                'msg'       => 'Mohon pilih kategori produk',
                'status'    => false
            ];
        } elseif($request->price == NULL) {
            $json = [
                'msg'       => 'Mohon masukan harga produk',
                'status'    => false
            ];
        } else {
            try{
              DB::transaction(function() use($request, $id) {
                  DB::table('products')->where('id', $id)->update([
                      'updated_at' => date('Y-m-d H:i:s'),
                      'name' => $request->name,
                      'product_category_id' => $request->product_category_id,
                      'price' => str_replace(',','',$request->price),
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
                  DB::table('products')->where('id', $id)->delete();
              });

                $json = [
                    'msg' => 'Produk berhasil dihapus',
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
