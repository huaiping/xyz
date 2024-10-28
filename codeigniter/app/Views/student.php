<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>学生基本信息</title>
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
        <th>学号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>身份证号</th>
        <th>父亲</th>
        <th>电话</th>
        <th>母亲</th>
        <th>电话</th>
        <th>详细家庭住址</th>
        <th>中考分</th>
        <th>初中毕业学校</th>
        <th>团员</th>
        <th>寝室</th>
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
        url: './student/get_json',
        method: 'get',
        search: true,
        pagination: true,
        pageSize: 14,
        pageList: [30, 50, 100],
        showColumns: true,
        minimumCountColumns: 2,
        columns: [{
            field: 'xh',
            title: '学号',
            align: 'center',
            sortable: true
        }, {
            field: 'xm',
            title: '姓名'
        }, {
            field: 'xb',
            title: '性别',
            align: 'center',            
            sortable: true
        }, {
            field: 'sfzh',
            title: '身份证号'
        }, {
            field: 'fqxm',
            title: '父亲'
        }, {
            field: 'fqdh',
            title: '电话'
        }, {
            field: 'mqxm',
            title: '母亲'
        }, {
            field: 'mqdh',
            title: '电话'
        }, {
            field: 'jtzz',
            title: '详细家庭住址',
            visible: false
        }, {
            field: 'zkf',
            title: '中考分'，
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
            title: '寝室'
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
