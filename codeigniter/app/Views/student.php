<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>学生基本信息</title>
<link rel="stylesheet" href="https://cdn.bootcss.com/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
<link href="https://cdn.bootcdn.net/ajax/libs/bootstrap-table/1.23.1/bootstrap-table.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/6.5.2/css/all.min.css">

<style>
</style>
</head>
<body>
<div>
<?= print_r($students); ?>
<table id="dataTable">
    <thead>
        <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>身份证号</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
<script src="https://cdn.bootcss.com/jquery/3.7.1/jquery.slim.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/bootstrap-table/1.23.1/bootstrap-table.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/bootstrap-table/1.23.1/locale/bootstrap-table-zh-CN.min.js"></script>
<script>
$(document).ready(function(){
    initTable("dataTable");
});
</script>
</body>
</html>