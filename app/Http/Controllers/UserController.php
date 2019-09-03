<?php

namespace App\Http\Controllers;
use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
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
    public function redisTest(){
        $key='abcww';
        $v=Redis::get($key);
        var_dump($v);
    }
}
