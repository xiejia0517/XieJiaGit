<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"F:\phpStudy\PHPTutorial\WWW\self\public/../application/admin\view\article\add.htm";i:1545545023;s:73:"F:\phpStudy\PHPTutorial\WWW\self\application\admin\view\common\header.htm";i:1542967627;s:71:"F:\phpStudy\PHPTutorial\WWW\self\application\admin\view\common\left.htm";i:1545732580;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>#</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="../../../../public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="../../../../public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="../../../../public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="../../../../public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="../../../../public/static/admin/style/demo.css" rel="stylesheet">
    <link href="../../../../public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="../../../../public/static/admin/style/animate.css" rel="stylesheet">
    
</head>
<body>
	<!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="../../../../public/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="../../../../public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
       
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lst'); ?>">
                        <span class="menu-text">
                            管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li> 

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-folder-o"></i>
                <span class="menu-text">栏目</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/lst'); ?>">
                        <span class="menu-text">
                            栏目列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文档</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/lst'); ?>">
                        <span class="menu-text">
                            文章列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li> 

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-chain-broken"></i>
                <span class="menu-text">友情链接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('link/lst'); ?>">
                        <span class="menu-text">
                            链接列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li> 

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('config/lst'); ?>">
                        <span class="menu-text">
                            配置项                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('config/lst'); ?>">
                        <span class="menu-text">
                            配置列表                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                
            </ul>                            
        </li>                          
        
    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="#">用户管理</a>
                    </li>
                                        <li class="active">添加用户</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增用户</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="title" required="" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">作者</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="author" required="" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">关键词</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="keywords" required="" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">描述</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="desc" required="" type="text">
                            </div>
                        </div>
                            

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                            <div class="col-sm-6">
                                <select name="cateid" id="">
                                    <option value="0">顶级文章</option>
                                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cateres): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $cateres['id']; ?>"><?php echo str_repeat('-',$cateres['level']*8)?><?php echo $cateres['catename']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">内容</label>
                            <div class="col-sm-6">
                                <textarea id="content" name="content"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">缩略图</label>
                            <div class="col-sm-6">
                                <input id="thumb" placeholder="" name="thumb" required="" type="file">
                            </div>
                        </div>

                         
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="../../../../public/static/admin/style/jquery_002.js"></script>
    <script src="../../../../public/static/admin/style/bootstrap.js"></script>
    <script src="../../../../public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="../../../../public/static/admin/style/beyond.js"></script>
    <script src="../../../../public/static/admin/ueditor/ueditor.config.js"></script>
    <script src="../../../../public/static/admin/ueditor/ueditor.all.min.js"></script>
    <script src="../../../../public/static/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">
        UE.getEditor('content',{initialFrameWidth:795,initialFrameHeight:400,});
    </script>


</body></html>