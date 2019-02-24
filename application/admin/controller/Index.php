<?php
namespace app\admin\controller;

use think\Controller;


class Index extends Controller
{
    public function __construct()
    {
        // echo('construct');
    }
    public function index()
    {
        
        return view('test');
    }
    public function test()
    {
        return view('test');
    }
    /**
     * 测试用接口
     */
    public function testAPI()
    {
        // $a = input('a');
        // $b = input('b');
        echo 2;
    }
}
