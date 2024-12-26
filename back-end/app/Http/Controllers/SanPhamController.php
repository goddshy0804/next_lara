<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\san_pham;
use App\Http\Resources\san_pham as SanPhamResource;
class SanPhamController extends Controller
{
    function index(){
        try {
            $sanPhams = san_pham::all();  
            return response()->json(['success' => true, 'data' => SanPhamResource::collection($sanPhams),  'status' => 200, 'message' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }   
    function showDetail($id){
        try {
            $sanPham = san_pham::findOrFail($id);
            return response()->json([ 'data' => new SanPhamResource($sanPham), 'status' => 200, 'message' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
   public function store(Request $request)
   {
       try {
            $sanPham = san_pham::create($request->all());
            return response()->json([ 'data' => new SanPhamResource($sanPham), 'status' => 201, 'message' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
   }
}