<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Loader;
use app\admin\model\Article as ArticleModel;
use app\admin\model\Link as LinkModel;

class Link extends Controller
{
    public function lst()
    {
        $link = new LinkModel();
        $linkres = $link -> select();
        $this->assign('linkres',$linkres);
        return view();
    }
    public function add()
    {
        $link = new LinkModel();
        if(request()->isPost())
        {
            $data_for_validate = input('post.');
            $validate = Loader::validate('Link');
            if(!$validate -> check($data_for_validate))
            {
                $this->error($validate->getError());
            }
           $addres = $link ->save(input('post.'));
           if($addres)
            {
                $this->redirect(url('lst'));
            }
            else
            {
                $this->error('link add failed!');
            }
        }
        return view();
    }
    public function del()
    {
            $link = new LinkModel();
            $desres = $link::destroy(input('id'));
            
            if($desres)
            {
                $this->redirect(url('lst'));
            }
            else
            {
                $this->error('del link failed!');
            }
    }
    public function edit()
    {
        $link = new LinkModel();
        if(request()->isPost())
        {
            $editres = $link ->update(input('post.'));
            
            if($editres)
            {
                $this->redirect(url('lst'));
            }
            else
            {
                $this->error('link edit failed!');
            }
            return;
        }
        $links = $link ->get(input('id'));
        $this->assign('links',$links);
        return view();
    }
}
