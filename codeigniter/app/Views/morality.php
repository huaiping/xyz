<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>德育积分信息</title>
<link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/bootstrap-table.min.css">
<link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="navbar-brand"><i class="bi bi-database"></i> 综合信息服务管理平台</div>
        <div class="navbar-nav">
            <a class="nav-link text-white" href="#">首页</a>
            <a class="nav-link text-white" href="https://mcyz.rf.gd/codeigniter/student">学生基本信息</a>
            <a class="nav-link text-white" href="https://mcyz.rf.gd/codeigniter/teacher">教师基本信息</a>
            <a class="nav-link text-white" href="https://mcyz.rf.gd/codeigniter/morality">德育积分信息</a>
            <a class="nav-link text-white" href="#">登录</a>
        </div>
    </div>
</nav>
<div>
    <div id="toolbar"></div>
    <table id="dataTable" class="table table-striped table-bordered">
    </table>
</div>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/popper.js/2.11.8/umd/popper.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/bootstrap-table.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/extensions/export/bootstrap-table-export.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/xlsx/0.18.5/xlsx.core.min.js"></script>
<script src="https://unpkg.com/tableexport.jquery.plugin@1.30.0/tableExport.min.js"></script>
<script>
$(document).ready(function(){
    $("#dataTable").bootstrapTable({
        url: './morality/get_json',
        method: 'get',
        search: true,
        pagination: true,
        pageSize: 12,
        pageList: [12, 18, 70],
        showRefresh: true,
        showColumns: true,
        minimumCountColumns: 2,
        columns: [{
            field: 'xh',
            title: '学号',
            align: 'center',
            sortable: true
        }, {
            field: 'xm',
            title: '姓名',
            align: 'center'
        }, {
            field: 'sfzh',
            title: '身份证号',
            align: 'center',
            visible: false
        }, {
            field: 'dyjf',
            title: '德育积分',
            align: 'center',
            sortable: true
        }, {
            field: 'dyxf',
            title: '学分',
            align: 'center'
        }, {
            field: 'sxzzsz',
            title: '政治思想素质',
            align: 'center'
        }, {
            field: 'bjthd',
            title: '班集体活动',
            align: 'center'
        }, {
            field: 'yjxxx',
            title: '研究性学习',
            align: 'center'
        }, {
            field: 'xystwh',
            title: '校园社团文化',
            align: 'center'
        }, {
            field: 'gyld',
            title: '公益劳动',
            align: 'center'
        }, {
            field: 'rcxw',
            title: '日常行为',
            align: 'center'
        }, {
            field: 'ssbx',
            title: '宿舍表现',
            align: 'center'
        }, {
            field: 'jlf',
            title: '奖励分',
            align: 'center'
        }, {
            field: 'kf',
            title: '扣分',
            align: 'center'
        }, {
            field: 'bz',
            title: '备注',
            align: 'center'
        }],
        striped: true
    })
});
$(document).bind("contextmenu",function(){
    return false;
});
$(document).bind("selectstart",function(){
    return false;
});
</script>
</body>
</html>
