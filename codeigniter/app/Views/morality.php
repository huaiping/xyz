<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>德育积分信息</title>
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/bootstrap-table.min.css" />
    <link rel="stylesheet" href="https://mcyz.rf.gd/bootstrap5-editable/css/bootstrap-editable.css" />
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
<script src="https://mcyz.rf.gd/bootstrap5-editable/js/bootstrap-editable.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/extensions/editable/bootstrap-table-editable.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/bootstrap-table/1.23.2/extensions/export/bootstrap-table-export.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="https://mirrors.sustech.edu.cn/cdnjs/ajax/libs/xlsx/0.18.5/xlsx.core.min.js"></script>
<script src="https://unpkg.com/tableexport.jquery.plugin@1.33.0/tableExport.min.js"></script>
<script>
$(document).ready(function(){
    $("#dataTable").bootstrapTable({
        url: './morality/get_json',
        method: 'get',
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
            field: 'zzsxsz',
            title: '政治思想素质',
            align: 'center',
            editable: {
                mode: 'popup',
                type: 'number',
                title: '政治思想素质',
                validate: function(value) {
                    if (!$.trim(value) || value < 0 || value > 20) {
                        return '得分不在有效范围';
                    }
                }
            }
        }, {
            field: 'jthd',
            title: '集体活动',
            align: 'center',
            editable: {
                mode: 'popup',
                type: 'number',
                title: '集体活动',
                validate: function(value) {
                    if (!$.trim(value) || value < 0 || value > 20) {
                        return '得分不在有效范围';
                    }
                }
            }
        }, {
            field: 'yjxxx',
            title: '研究性学习',
            align: 'center',
            editable: {
                mode: 'popup',
                type: 'number',
                title: '研究性学习和社会实践活动',
                validate: function(value) {
                    if (!$.trim(value) || value < 0 || value > 30) {
                        return '得分不在有效范围';
                    }
                }
            }
        }, {
            field: 'xystwh',
            title: '校园社团文化',
            align: 'center',
            editable: {
                mode: 'popup',
                type: 'number',
                title: '校园文化建设活动和社团文化活动',
                validate: function(value) {
                    if (!$.trim(value) || value < 0 || value > 20) {
                        return '得分不在有效范围';
                    }
                }
            }
        }, {
            field: 'gyld',
            title: '公益劳动',
            align: 'center',
            editable: {
                mode: 'popup',
                type: 'number',
                title: '公益劳动和青年志愿者活动',
                validate: function(value) {
                    if (!$.trim(value) || value < 0 || value > 20) {
                        return '得分不在有效范围';
                    }
                }
            }
        }, {
            field: 'rcxw',
            title: '日常行为',
            align: 'center',
            editable: {
                mode: 'popup',
                type: 'number',
                title: '日常行为',
                validate: function(value) {
                    if (!$.trim(value) || value < 0 || value > 20) {
                        return '得分不在有效范围';
                    }
                }
            }
        }, {
            field: 'ssbx',
            title: '宿舍表现',
            align: 'center',
            editable: {
                mode: 'popup',
                type: 'number',
                title: '宿舍行为表现',
                validate: function(value) {
                    if (!$.trim(value) || value < 0 || value > 20) {
                        return '得分不在有效范围';
                    }
                }
            }
        }, {
            field: 'jlf',
            title: '奖励分',
            align: 'center',
            editable: {
                mode: 'popup',
                type: 'number',
                title: '奖励分',
                validate: function(value) {
                    if (!$.trim(value) || value < 0 || value > 30) {
                        return '得分不在有效范围';
                    }
                }
            }
        }, {
            field: 'kf',
            title: '扣分',
            align: 'center',
            editable: {
                mode: 'popup',
                type: 'number',
                title: '扣分',
                validate: function(value) {
                    if (!$.trim(value) || value > 0) {
                        return '得分不在有效范围';
                    }
                }
            }
        }, {
            field: 'jkfjl1',
            title: '奖扣分记录1',
            //visible: false,
            editable: {
                mode: 'popup',
                type: 'text',
                emptytext: '点击输入',
                title: '奖扣分记录1',
            }
        }, {
            field: 'jkfjl2',
            title: '奖扣分记录2',
            visible: false,
            editable: {
                mode: 'popup',
                type: 'text',
                emptytext: '点击输入',
                title: '奖扣分记录2',
            }
        }, {
            field: 'jkfjl3',
            title: '奖扣分记录3',
            visible: false,
            editable: {
                mode: 'popup',
                type: 'text',
                emptytext: '点击输入',
                title: '奖扣分记录3',
            }
        }, {
            field: 'jkfjl4',
            title: '奖扣分记录4',
            visible: false,
            editable: {
                mode: 'popup',
                type: 'text',
                emptytext: '点击输入',
                title: '奖扣分记录4',
            }
        }, {
            field: 'jkfjl5',
            title: '奖扣分记录5',
            visible: false,
            editable: {
                mode: 'popup',
                type: 'text',
                emptytext: '点击输入',
                title: '奖扣分记录5',
            }
        }, {
            field: 'jkfjl6',
            title: '奖扣分记录6',
            visible: false,
            editable: {
                mode: 'popup',
                type: 'text',
                emptytext: '点击输入',
                title: '奖扣分记录6',
            }
        }, {
            field: 'jkfjl7',
            title: '奖扣分记录7',
            visible: false,
            editable: {
                mode: 'popup',
                type: 'text',
                emptytext: '点击输入',
                title: '奖扣分记录7',
            }
        }, {
            field: 'jkfjl8',
            title: '奖扣分记录8',
            visible: false,
            editable: {
                mode: 'popup',
                type: 'text',
                emptytext: '点击输入',
                title: '奖扣分记录8',
            }
        }, {
            field: 'jkfjl9',
            title: '奖扣分记录9',
            visible: false,
            editable: {
                mode: 'popup',
                type: 'text',
                emptytext: '点击输入',
                title: '奖扣分记录9',
            }
        }, {
            field: 'jkfjl10',
            title: '奖扣分记录10',
            visible: false,
            editable: {
                mode: 'popup',
                type: 'text',
                emptytext: '点击输入',
                title: '奖扣分记录10',
            }
        }, {
            field: 'bz',
            title: '备注',
            align: 'center'
        }],
        onEditableSave: function(field, row, oldValue, $el){
            $.ajax({
                type: 'post',
                url: '<?php echo base_url('codeigniter/morality/update_json'); ?>',
                data: row,
                dataType: 'json',
                success: function(data, status){
                    if (status == "success"){
                        alert('数据更新成功');
                        $("#dataTable").bootstrapTable('refresh');
                    }
                },
                error: function(){
                    alert('数据更新失败');
                },
                complete: function(){
                }
            })
        }
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
