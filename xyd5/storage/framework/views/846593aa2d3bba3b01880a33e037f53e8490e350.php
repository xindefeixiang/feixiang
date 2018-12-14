 <?php

 ?>

   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=emulateIE7" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/WdatePicker.css" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/skin_/table.css" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/jquery.grid.css" />


    <title>表格</title>
</head>

<body>
<div id="container">
    <div id="hd"></div>
    <div id="bd">
        <div id="main">
            <div class="search-box ue-clear">
                <div class="search-area">
                    <div class="kv-item ue-clear">
                        <label>选择时间：</label>
                        <div class="kv-item-content ue-clear">
                            <span class="choose">
                                <span class="checkboxouter">
                                    <input type="radio" name="time" />
                                    <span class="radio"></span>
                                </span>
                                <span class="text">全部</span>
                            </span>
                            <span class="choose">
                                <span class="checkboxouter">
                                    <input type="radio" name="time" />
                                    <span class="radio"></span>
                                </span>
                                <span class="text">近3天</span>
                            </span>
                            <span class="choose">
                                <span class="checkboxouter">
                                    <input type="radio" name="time" />
                                    <span class="radio"></span>
                                </span>
                                <span class="text">近一周</span>
                            </span>
                            <span class="choose">
                                <span class="checkboxouter">
                                    <input type="radio" name="time" />
                                    <span class="radio"></span>
                                </span>
                                <span class="text">近一月</span>
                            </span>
                            <span class="choose">
                                <span class="checkboxouter">
                                    <input type="radio" name="time" data-define="define" />
                                    <span class="radio"></span>
                                </span>
                                <span class="text">自定义</span>
                            </span>
                            <span class="define-input">
                            	<input type="text" placeholder="开始时间" />
                                <span class="division"></span>
                                <input type="text" placeholder="结束时间" />
                            </span>
                        </div>
                    </div>
                    <div class="kv-item ue-clear">
                        <label>选择类型:</label>
                        <div class="kv-item-content">
                            <select>
                                <option>全部</option>
                                <option>全部</option>
                                <option>全部</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="search-button">
                    <input class="button" type="button" value="搜索一下" />
                </div>
            </div>

            <div class="table">
                <div class="opt ue-clear">
                	<span class="sortarea">
                    	<span class="sort">
                        	<label>排序：</label>
                            <span class="name">
                            	<i class="icon"></i>
                                <span class="text">名称</span>
                            </span>
                        </span>

                        <i class="list"></i>
                        <i class="card"></i>
                    </span>
                    <span class="optarea">
                        <a href="javascript:;" class="add">
                            <i class="icon"></i>
                            <span class="text">添加</span>
                        </a>
                        <a href="javascript:;" class="delete">
                            <i class="icon"></i>
                            <span class="text">删除</span>
                        </a>

                        <a href="javascript:;" class="statistics">
                            <i class="icon"></i>
                            <span class="text">统计</span>
                        </a>

                        <a href="javascript:;" class="config">
                            <i class="icon"></i>
                            <span class="text">配置</span>
                        </a>
                    </span>
                </div>

                <div class="grid"></div>

                <div class="pagination"></div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="../../admin/js/jquery.js"></script>
<script type="text/javascript" src="../../admin/js/global.js"></script>
<script type="text/javascript" src="../../admin/js/jquery.select.js"></script>
<script type="text/javascript" src="../../admin/js/core.js"></script>
<script type="text/javascript" src="../../admin/js/jquery.pagination.js"></script>
<script type="text/javascript" src="../../admin/js/jquery.grid.js"></script>
<script type="text/javascript" src="../../admin/js/WdatePicker.js"></script>
<script type="text/javascript">
    window.onload = function(){
        $.get('')
    }
    $('select').select();
    var head = [{
        label: 'ID',
        width: 100,
        sortable: 'default',
        name: 'id'
    },{
        label:'试卷管理',
        width: 150,
        sortable: 'default',
        name:'name'
    },{
        label:'出卷老师',
        width:150
    },{
        label: '添加时间',
        width: 150
    },{
        label: '状态',
        width: 150
    }
    ];

    var oper = [{label:'删除',onclick:function(){
            alert('删除');
        }},{label:'编辑',onclick: function(){
            alert('编辑')
        }}]
    var tbody = [
        <?php foreach ($papers as $v){
            echo "[".$v['paper_id'].",'".$v['paper_name']."','".$v['name']."','".date('Y-m-d H:i',$v['add_time'])."','".$v['status']."'],";
    }?>
        ];


    $('.grid').Grid({
        thead: head,
        tbody: null,
        height:400,
        checkbox: {
            single:true
        },
        operator: {
            type : "normal",
            width : 100
        },
        sortCallBack : function(name,index,type){
            alert(name+","+index+','+type);
        }

    });

    $('.grid').Grid('addLoading');

    /// 模拟异步
    setTimeout(function(){
        $('.grid').Grid('setData',tbody, head);
    },2000)


    $('.pagination').pagination(100,{
        callback: function(page){
            alert(page);
        },
        display_msg: false
    });

    $('.search-box input[type=radio]').click(function(e) {
        if($(this).prop('checked')){
            if($(this).attr('data-define') === 'define'){
                $('.define-input').show();
            }else{
                $('.define-input').hide();
            }
        }
    });
</script>
</html>
