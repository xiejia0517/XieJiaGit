<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use app\admin\model\Article as ArticleModel;
use app\admin\model\Cate as CateModel;
use phpDocumentor\Reflection\Location;

class Article extends Controller
{
    // protected $beforeActionList = [
    //     // 'first',
    //     // 'second' => ['except' => 'hello'],
    //     'delSonData' => ['only' => 'del'],
    // ];
    public function lst()
    {
        $article = new ArticleModel();
        $articleres = Db('article')->field('a.*,b.catename') ->alias('a')->join('cate b','a.cateid = b.id')->select();
        $this->assign('articleres',$articleres);
        return view();
    }
    public function add()
    {
        $article = new ArticleModel();
        $cate = new CateModel();
        if(request()->isPost())
        {
            $data = input('post.');
            $addres = $article -> save($data);
            if($addres)
            {
                $this->redirect(url('lst'));
            }
            else
            {
                $this->error('article add failed!');
            }
            return;
        }
        $cateres = $cate -> catetree();
        $this->assign('cateres',$cateres);
        return view();
    }
    public function edit()
    {
        $res = input("post.");
       //d100ump($res["news"]);die;
        $article = new ArticleModel();
        $cate = new CateModel();
        if(request()->isPost())
        {
            $save = $article -> update(input('post.'));
            if($save !== false)
            {
                $this->redirect(url('lst'));
            }
            else
            {
                $this->error('article edit failed!');
            }
            return;
        }
        $articleid = input('id');
        $cateres = $cate -> catetree();
        // $articles = $article::get($articleid);
        $articles = Db('article')->field('a.*,b.catename') ->alias('a')->join('cate b','a.cateid = b.id')->find($articleid);
        $this->assign([
            'cateres' => $cateres,
            'articles' => $articles,
        ]);
        return view();
    }
    public function del()
    {
        $article = new ArticleModel();
        $delres = $article::destroy(input('id'));
        if($delres)
        {
            $this->redirect(url('lst'));
        }
        else
        {
            $this->error('article del failed!');
        }
    }
    public function delSonData()
    {
        
    }
}
