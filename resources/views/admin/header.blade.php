<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
    <title>电子商务后台管理</title>
    <meta name="author" content="ice.deng">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/main.css')}}"/>
</head>
<body>
<div class="container-fluid">
    <div class="row" id="header">
        <div class="col-xs-12 ">
            <h1 class="pull-left">电子商务后台管理
                <small> lshop</small>
            </h1>
            <ul class="nav nav-pills pull-right" role="tablist">
                <li role="presentation"><a><i class="fa fa-user"></i> 你好, {{ Session::get('email') ? Session::get('email') : 'Default' }}</a></li>
                <li role="presentation"><a href="/admin/login/delete"><i class="fa fa-sign-out"></i> 退出</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
