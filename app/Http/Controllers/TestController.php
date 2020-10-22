<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
    //
    public function testList()
    {
        $data = [
            ["name" => "张三", "age" => 18, "sex" => "男"],
            ["name" => "刘备", "age" => 18, "sex" => "男"],
            ["name" => "关羽", "age" => 18, "sex" => "男"],
            ["name" => "张飞", "age" => 18, "sex" => "男"]
        ];
        return new JsonResponse(["status_code" => 200, "message" => "success", "data" => $data]);
    }
}
