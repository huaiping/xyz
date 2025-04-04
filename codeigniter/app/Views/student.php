<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>学生基本信息</title>
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/bootstrap-table.min.css" />
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>
<body>
<nav class="navbar navbar-expand-sm bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="navbar-brand"><i class="bi bi-database"></i> 综合信息服务管理平台</div>
        <div class="navbar-nav">
            <a class="nav-link text-white" href="https://mcyz.rf.gd/codeigniter/student">学生基本信息</a>
            <a class="nav-link text-white" href="https://mcyz.rf.gd/codeigniter/teacher">教师基本信息</a>
            <a class="nav-link text-white" href="https://mcyz.rf.gd/codeigniter/morality">德育积分信息</a>
            <a class="nav-link text-white" href="https://mcyz.rf.gd/codeigniter/library">校本资源库</a>
            <a class="nav-link text-white" href="https://mcyz.rf.gd/codeigniter/logout">退出</a>
        </div>
    </div>
</nav>
<div class="p-2">
    <div id="toolbar">
        <form class="form-inline float-left">
            <select class="form-control float-left" id="grade"  style="width:auto;">
                <option value="2022">2022级</option>
                <option value="2023">2023级</option>
                <option value="2024" selected>2024级</option>
            </select>
            <button type="button" class="btn btn-success float-left" style="width:auto; margin-left:10px;">查询</button>
        </form>
    </div>
    <table id="dataTable" class="table table-striped table-bordered"></table>
</div>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/popper.js/2.11.8/umd/popper.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/bootstrap-table.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/extensions/export/bootstrap-table-export.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/xlsx/0.18.5/xlsx.core.min.js"></script>
<script src="https://unpkg.com/tableexport.jquery.plugin@1.33.0/tableExport.min.js"></script>
<script>
$(document).ready(function(){
    $("#dataTable").bootstrapTable({
        url: './student/get_json',
        method: 'get',
        toolbar: '#toolbar',
        search: true,
        pagination: true,
        pageSize: 12,
        pageList: [12, 17, 25],
        striped: true,
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
            align: 'center',
            switchable: false
        }, {
            field: 'xb',
            title: '性别',
            align: 'center',
            sortable: true
        }, {
            field: 'mz',
            title: '民族',
            align: 'center',
            sortable: true
        }, {
            field: 'sfzh',
            title: '身份证号',
            align: 'center'
        }, {
            field: 'fqxm',
            title: '父亲',
            align: 'center'
        }, {
            field: 'fqdh',
            title: '电话',
            align: 'center'
        }, {
            field: 'mqxm',
            title: '母亲',
            align: 'center'
        }, {
            field: 'mqdh',
            title: '电话',
            align: 'center'
        }, {
            field: 'xxjtzz',
            title: '详细家庭住址',
            visible: false
        }, {
            field: 'zkf',
            title: '中考分',
            align: 'center'
        }, {
            field: 'czbyxx',
            title: '初中毕业学校'
        }, {
            field: 'gqty',
            title: '团员',
            align: 'center',
            sortable: true
        }, {
            field: 'qsh',
            title: '寝室号',
            align: 'center',
            visible: false
        }, {
            field: 'gkf',
            title: '高考分',
            align: 'center',
            visible: false
        }, {
            field: 'dxlqyx',
            title: '大学录取院校',
            align: 'center',
            visible: false
        }, {
            field: 'lqzy',
            title: '录取专业',
            align: 'center',
            visible: false
        }, {
            field: 'bz',
            title: '备注',
            align: 'center'
        }]
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
