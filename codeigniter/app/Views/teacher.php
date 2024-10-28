<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>教师基本信息</title>
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/bootstrap-table/1.23.1/bootstrap-table.min.css">
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
</style>
</head>
<body>
<div>
<table id="dataTable" class="table table-striped table-bordered">
    <thead>
        <tr>
        <th>姓名</th>
        <th>性别</th>
        <th>民族</th>
        <th>学科</th>
        <th>身份证号</th>
        <th>参加工作</th>
        <th>出生年月</th>
        <th>联系电话</th>
        <th>毕业院校</th>
        <th>专业</th>
        <th>最高学历</th>
        <th>学位</th>
        <th>部门</th>        
        <th>备注</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/popper.js/2.11.8/umd/popper.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/bootstrap-table/1.23.1/bootstrap-table.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/bootstrap-table/1.23.1/locale/bootstrap-table-zh-CN.min.js"></script>
<script>
$(document).ready(function(){
    $("#dataTable").bootstrapTable({
        url: './teacher/get_json',
        method: 'get',
        search: true,
        pagination: true,
        pageSize: 14,
        pageList: [30, 50, 100],
        showColumns: true,
        minimumCountColumns: 2,
        columns: [{
            field: 'xm',
            title: '姓名'
        }, {
            field: 'xb',
            title: '性别',
            align: 'center',
            sortable: true
        }, {
            field: 'mz',
            title: '民族',
            sortable: true
        }, {
            field: 'xk',
            title: '学科',
            sortable: true
        }, {
            field: 'sfzh',
            title: '身份证号'
        }, {
            field: 'cjgz',
            title: '参加工作'
        }, {
            field: 'csny',
            title: '出生年月'
        }, {
            field: 'lxdh',
            title: '联系电话'
        }, {
            field: 'byyx',
            title: '毕业院校'
        }, {
            field: 'zy',
            title: '专业'
        }, {
            field: 'xl',
            title: '最高学历',
            sortable: true
        }, {
            field: 'xw',
            title: '学位',
            sortable: true
        }, {
            field: 'bm',
            title: '部门',
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
