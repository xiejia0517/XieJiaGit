<?php
namespace app\admin\model;
use think\Model;
class Article extends Model
{
    protected static function init()
    {
        Article::event('before_insert',function($data){
            // dump($_FILES);die;
            if($_FILES['thumb']['tmp_name'])
            {
                $file = request() ->file('thumb');
                $info = $file ->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info)
                {
                    $thumb_path = DS . 'public' . DS . 'uploads' . DS . $info->getSaveName();
                    $data['thumb'] = $thumb_path;
                }
            }
        });

        Article::event('before_update',function($data){
            if($_FILES['thumb']['tmp_name'])
            {
                $articles = Article::find($data->id);
                $thumbpath = $_SERVER['DOCUMENT_ROOT'] . $articles['thumb'];
                if($thumbpath)
                {
                    @unlink($thumbpath);
                }
                $file = request() ->file('thumb');
                $info = $file ->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info)
                {
                    $thumb_path = DS . 'public' . DS . 'uploads' . DS . $info->getSaveName();
                    $data['thumb'] = $thumb_path;
                }
            }
        });

        Article::event('before_delete',function($data){
           
                $articles = Article::find($data->id);
                $thumbpath = $_SERVER['DOCUMENT_ROOT'] . $articles['thumb'];
                if($thumbpath)
                {
                    @unlink($thumbpath);
                }
        });
    }
    public function articletree()
    {
        
    }
}