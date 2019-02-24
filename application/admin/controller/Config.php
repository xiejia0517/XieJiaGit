<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use think\Db;
use app\admin\model\Config as ConfigModel;

class Config extends Controller
{
    public function lst()
    {
        $conf = new ConfigModel();
        $confres = $conf -> select();
        $this->assign('confres',$confres);
        return view();
    }
    public function add()
    {
        return view();
    }
    public function edit()
    {
        return view();
    }
    public function del()
    {

    }
    public function test()
    {
        $artarr = array();
        $memres = Db('member')->where('id',1)->find();
        $str = $memres['store_id'];
        $strbuf = explode("|",$str);
        foreach ($strbuf as $key => $value) {
           $artarr[] = Db('article')->find($value);
        }
        dump($artarr);
    }
}
