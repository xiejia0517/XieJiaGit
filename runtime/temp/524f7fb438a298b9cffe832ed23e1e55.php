<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"F:\phpStudy\PHPTutorial\WWW\self\public/../application/admin\view\index\test.htm";i:1551001523;}*/ ?>
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
    <script>
        window.onload = function (){
            new Vue({
                el:"#box",
                data() {
                    return {
                        isvisible:true,
                        msg:'Edit Me!',
                    }
                },
                methods: {
                    test:function(){
                        this.isvisible = !this.isvisible;
                    },
                },
            });
        }
    </script>
    <style>
        *{
            margin-left: 15px;
        }
        .div1{
            width: 100px;
            height: 100px;
            background:red;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <hr>
    <div id="box">
        <span @click="test">显示内容:<a href="javascript:">{{msg}}</a></span>
        <hr>
        <input type="text" v-show="isvisible" v-model="msg">
    </div>
    <hr>
    <!-- <form action="testAPI" method="POST">
        <input type="text" name="test">
        <input type="submit" value="测试提交">
    </form> -->
    
	    <!--Basic Scripts-->
    <script src="../../../../public/static/admin/style/jquery_002.js"></script>
    <script src="../../../../public/static/admin/style/bootstrap.js"></script>
    <script src="../../../../public/static/admin/style/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!--Beyond Scripts-->
    <script src="../../../../public/static/admin/style/beyond.js"></script>
    <!-- <script src="../../../../public/static/admin/style/test.js"></script> -->
    


</body></html>