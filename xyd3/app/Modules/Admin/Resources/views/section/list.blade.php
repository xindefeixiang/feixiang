<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 网站管理员 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="{{asset('admin/css/public.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/global.js')}}"></script>
    <script src="{{asset('admin/layer/layer.js')}}"></script>
</head>
<body>
    <!-- 当前位置 -->
    <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3>章节列表</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <th width="30" align="center">编号</th>
                <th align="center">课程章节编号</th>
                <th align="center">课程章节名称</th>
                <th align="center">课程创建时间</th>
                <th align="center">课程视频观看</th>
                <th align="center">操作</th>
            </tr>
            @foreach ($data as $v)
                <tr align="center">
                    <td>{{$v->id}}</td>
                    <td>{{$v->number}}</td>
                    <td>{{$v->name}}</td>
                    <td>{{$v->created_at}}</td>
                    <td><a style="color: #00CCFF" href="javascript:void" class="open-video" data-title="{{$v->number}}.{{$v->name}}" data-documents_url="{{$v->documents_url}}">在线查看视频</a></td>
                    <td>删除</td>
                </tr>
            @endforeach
        </table>
     </div>
    <script>
        $(".open-video").on("click",function () {
            var _self = $(this)
            layer.open({
                type: 2,
                title: _self.attr("data-title"),
                area: ['630px', '360px'],
                shade: 0.8,
                closeBtn: 0,
                shadeClose: true,
                content: _self.attr("data-documents_url")
            });
        })

    </script>
</body>
</html>