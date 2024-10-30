<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>教师基本信息</title>
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.1/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
    </style>
</head>
<body>
<div>
    <div id="toolbar"></div>
    <table id="dataTable" class="table table-striped table-bordered">
    </table>
</div>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/popper.js/2.11.8/umd/popper.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.1/bootstrap-table.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.1/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.1/extensions/export/bootstrap-table-export.min.js"></script>
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
        pageSize: 14,
        pageList: [30, 50, 100],
        showRefresh: true,
        showColumns: true,
        minimumCountColumns: 2,
        toolbar: '#toolbar',
        showExport: true,
        exportDataType: 'basic',
        exportTypes: ['excel', 'csv', 'xlsx'],
        buttonsAlign: "right",
        Icons: 'glyphicon-export',
        exportOptions: {
            fileName: '教师基本信息' + Date.now(),
            worksheetName: 'teacher'
        },
        columns: [{
            field: 'xm',
            title: '姓名',
            align: 'center'
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
            field: '籍贯',
            title: '籍贯',
            align: 'center'
        }, {
            field: '政治面貌',
            title: '政治面貌',
            align: 'center',
            sortable: true
        }, {
            field: 'xk',
            title: '任教学科',
            align: 'center',
            sortable: true
        }, {
            field: 'sfzh',
            title: '身份证号',
            visible: false
        }, {
            field: 'cjgz',
            title: '参加工作时间',
            align: 'center'
        }, {
            field: 'csny',
            title: '出生年月',
            align: 'center'
        }, {
            field: 'lxdh',
            title: '联系电话',
            visible: false
        }, {
            field: 'byyx',
            title: '毕业院校'
        }, {
            field: 'zy',
            title: '专业'
        }, {
            field: 'xl',
            title: '最高学历',
            align: 'center',
            sortable: true
        }, {
            field: 'xw',
            title: '学位',
            align: 'center',
            sortable: true
        }, {
            field: 'bm',
            title: '部门',
            align: 'center',
            sortable: true
        }, {
            field: 'bz',
            title: '备注'
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
