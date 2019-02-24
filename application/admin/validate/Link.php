<?php
namespace app\admin\validate;
use think\Controller;
use think\View;
use think\Validate;

class Link extends Validate
{
    protected $rule = [
        'title' => 'unique:link',
        'title' => 'require',
        'url' => 'unique:link',
        // 'url' => '',
    ];
    protected $message = [
        'title.unique' => '标题已经存在',
        'title.require' => '名称必须填写',
        'url.unique' => '链接已经存在',
    ];
    protected $scence = [

    ];
}
