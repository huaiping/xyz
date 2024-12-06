<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>综合信息服务管理平台</title>
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
</head>
<body>
<nav class="navbar navbar-expand-sm bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="navbar-brand"><i class="bi bi-database"></i> 综合信息服务管理平台</div>
    </div>
</nav>
<div class="m-5">
    <form action="<?php echo base_url('codeigniter/login'); ?>" method="POST">
        <div class="col-md-3 offset-md-4">
            <label for="account" class="form-label">账号</label>
            <input type="text" class="form-control form-control-lg" id="account" name="account" value="" placeholder="请输入账号">
        </div>
        <div class="col-md-3 offset-md-4">
            <label for="password" class="form-label">密码</label>
            <input type="password" class="form-control form-control-lg" id="password" name="password" value="" placeholder="请输入密码">
        </div>
        <button type="submit" class="btn btn-primary btn-lg col-md-3 offset-md-4" style="margin-top:20px;">登录</button>
    </form>
</div>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>
