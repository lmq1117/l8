<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
    //
    public function testList(Request $request)
    {
        $data = [
            ["name" => "张三", "age" => 18, "sex" => "男"],
            ["name" => "刘备", "age" => 18, "sex" => "男"],
            ["name" => "关羽", "age" => 18, "sex" => "男"],
            ["name" => "张飞", "age" => 18, "sex" => "男"]
        ];

//        Policy::where("id",">",0)->get();
        $builder = Policy::where("id",">",0);


        return new JsonResponse(["status_code" => 200, "message" => "success", "data" => $builder->paginate($request->input("size",10))]);
    }
}
