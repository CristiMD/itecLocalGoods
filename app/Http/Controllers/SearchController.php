<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class SearchController extends Controller
{

    public function search(Request $request, Product $user)
    {
        
        $q = $request->get('p');

            $user = Product::where ( 'name', 'LIKE', '%' . $q . '%' )->get ();
            return Response::json([
                'data' => $user
            ]);



            
    }

    public function songs(Request $request, $name) {

        $data = $request->get('p');
        $member_info = Product::where('name', 'like', "%{$data}%")
                 ->get();
    
        return Response()->json([
            'status' => 'success',
            'data' => $member_info
        ], 200);
      }
}