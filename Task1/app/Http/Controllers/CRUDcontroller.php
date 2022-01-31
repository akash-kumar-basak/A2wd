<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;

class CRUDcontroller extends Controller
{
    public function insertProducts(Request $request)
    {
        $category = $request->input('Catagory');
        $brand = $request->input('Brand');
        $prduct_name = $request->input('Productname');


        productModel::insertOrIgnore(
            [
                ['Category'=>$category, 'brand'=>$brand, 'product_name'=>$prduct_name,],
            ]
            );
    }

    function readProducts(){
        $results = productModel::get();
        $string_result = json_encode($results);
        return $string_result;
    }

}
