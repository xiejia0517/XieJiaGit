<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use app\admin\model\Cate as CateModel;

class Cate extends Controller
{
    protected $beforeActionList = [
        // 'first',
        // 'second' => ['except' => 'hello'],
        'delSonData' => ['only' => 'del'],
    ];
    public function lst()
    {
        $cate = new CateModel();
        if(request()->isPost())
        {   
            $sorts = input('post.');
            foreach ($sorts as $key => $value) {
                $cate->update(['id'=>$key,'sort'=>$value]);
            }
            $this->redirect(url('lst'));
            return;
        }
        $cateres = $cate -> catetree();
        $this->assign('cateres',$cateres);
        return view();
    }
    public function add()
    {
        $cate = new CateModel();
        if(request()->isPost())
        {
            
            $add = $cate->save(input('post.'));
            if($add)
            {
                $this->success('success!',url('lst'));
            }
            else
            {
                $this->error('error!');
            }
        }
        else
        {
            //非post请求
        }
        $cateres = $cate -> catetree();
        $this->assign('cateres',$cateres);
        return view();
    }
    public function edit()
    {
        $cate = new CateModel();
        if(request()->isPost())
        {
             $save = $cate->save(input('post.'),['id'=>input('id')]);
             if($save !=false)
             {
                $this->success('edit success!',url('lst'));
             }
             else
             {
                $this->error('edit error!');
             }
            return;
        }
        $cates = $cate->find(input('id'));
        $cateres = $cate -> catetree();
        $this->assign(array(
            'cateres' => $cateres,
            'cates' => $cates,
        ));
        return view();
    }
    public function del()
    {
        // $data = input('id');
        // echo($data);
        $delres = Db('cate')->where('id',input('id'))->delete();
        if($delres)
        {
            $this->redirect(url('lst'));
        }
        else
        {
            $this->error('del failed!');
        }
    }
    public function delSonData()
    {
        $cateid = input('id');
        $cate = new CateModel();
        $cateidlist = $cate -> getChildren($cateid);
        Db('cate')->delete($cateidlist);
    }
    public function changestatus()
    {
        echo 111;
    }
}
