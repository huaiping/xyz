<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>教师基本信息</title>
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
    <div id="toolbar"></div>
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
<script src="https://unpkg.com/tableexport.jquery.plugin@1.30.0/tableExport.min.js"></script>
<script>
$(document).ready(function(){
    $("#dataTable").bootstrapTable({
        url: './teacher/get_json',
        method: 'get',
        search: true,
        pagination: true,
        pageNumber: 1,
        pageSize: 12,
        pageList: [12, 17, 25],
        striped: true,
        showRefresh: true,
        showColumns: true,
        minimumCountColumns: 2,
        toolbar: '#toolbar',
        showExport: true,
        exportDataType: 'basic',
        exportTypes: ['excel', 'csv', 'xlsx'],
        exportOptions: {
            fileName: '教师基本信息' + Date.now(),
            worksheetName: 'teacher'
        },
        columns: [{
            checkbox: true
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
            field: 'jg',
            title: '籍贯',
            align: 'center'
        }, {
            field: 'zzmm',
            title: '政治面貌',
            align: 'center',
            sortable: true
        }, {
            field: 'rjxk',
            title: '任教学科',
            align: 'center',
            sortable: true
        }, {
            field: 'sfzh',
            title: '身份证号',
            align: 'center',
            visible: false
        }, {
            field: 'cjgzsj',
            title: '参加工作时间',
            align: 'center'
        }, {
            field: 'csny',
            title: '出生年月',
            align: 'center'
        }, {
            field: 'lxdh',
            title: '联系电话',
            align: 'center',
            visible: false
        }, {
            field: 'byyx',
            title: '毕业院校',
            align: 'center'
        }, {
            field: 'zy',
            title: '专业',
            align: 'center'
        }, {
            field: 'zqxl',
            title: '职前学历',
            align: 'center',
            visible: false
        }, {
            field: 'zqxw',
            title: '职前学位',
            align: 'center',
            visible: false
        }, {
            field: 'xl',
            title: '最高学历',
            align: 'center'
        }, {
            field: 'xw',
            title: '学位',
            align: 'center'
        }, {
            field: 'pth',
            title: '普通话',
            align: 'center',
            visible: false
        }, {
            field: 'zyjszw',
            title: '专业技术职务',
            align: 'center'
        }, {
            field: 'jszg',
            title: '教师资格',
            align: 'center'
        }, {
            field: 'gwdj',
            title: '岗位等级',
            align: 'center',
            sortable: true
        }, {
            field: 'bm',
            title: '部门',
            align: 'center',
            sortable: true
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
