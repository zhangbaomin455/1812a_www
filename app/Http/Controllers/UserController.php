<?php

namespace App\Http\Controllers;
use App\Model\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function add(){
        $data=[
            'u_name'=>'zhangsan',
            'u_email'=>'zhangsan@qq.com'
        ];
        $u_id=UserModel::insertGetId($data);
        var_dump($u_id);
    }
}
