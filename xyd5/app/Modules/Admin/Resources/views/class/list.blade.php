<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 网站管理员 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="{{asset('admin/css/public.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/global.js')}}"></script>
    <script src="{{asset('admin\bootstrap\dist\css\bootstrap.min.css')}}"></script>
    <script src="{{asset('admin/layer/layer.js')}}"></script>
    <style type="text/css">
        #pull_right{
            text-align:center;
        }
        .pull-right {
            /*float: left!important;*/
        }
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .pagination > li {
            display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #428bca;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #428bca;
            border-color: #428bca;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <!-- 当前位置 -->
    <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="class-add" class="actionBtn">添加课程</a>课程列表</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <th width="30" align="center">编号</th>
                <th align="center">课程主图</th>
                <th align="center">课程名称</th>
                <th align="center">课程分类</th>
                <th align="center">课程简介</th>
                <th align="center">课程章节数</th>
                <th align="center">课程标识</th>
                <th align="center">操作</th>
            </tr>
            @foreach ($data as $v)
                <tr align="center">
                    <td>{{$v->id}}</td>
                    <td><img src="{{$v->img}}" style="height: 50px;width: 50px;" alt=""></td>
                    <td>{{$v->name}}</td>
                    <td>{{$v->type_name}}</td>
                    <td>{{$v->intro}}</td>
                    <td><a href="javascript:void" class="section-list" data-value="{{$v->id}}">{{$v->num}}<font style="color: #00CCFF">（点击查看）</font></a></td>
                    <td>@if ($v->sign == 1)
                            公开
                        @else
                            私有
                        @endif
                    </td>
                    <td><a href="javascript:void" style="color: green" class="section-add" data-value="{{$v->id}}">添加章节</a></td>
                </tr>
            @endforeach
        </table>
     </div>
    <div id="pull_right">
        <div class="pull-right">
            {{ $data->links() }}
        </div>
    </div>
    <script>
        $(".section-add").click(function () {
            var id = $(this).attr('data-value')
            //iframe层
            layer.open({
                type: 2,
                title: '课程章节添加',
                shadeClose: true,
                shade: 0.8,
                area: ['800px', '90%'],
                content: 'section-add?id='+id //iframe的url
            });
        })
        $(".section-list").click(function () {
            var id = $(this).attr('data-value')
            //iframe层
            layer.open({
                type: 2,
                title: '课程章节列表',
                shadeClose: true,
                shade: 0.8,
                area: ['800px', '90%'],
                content: 'section-list?id='+id //iframe的url
            });
        })
    </script>
</body>
</html>