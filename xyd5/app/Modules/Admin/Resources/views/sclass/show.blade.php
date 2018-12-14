<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 网站管理员 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="../../admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
</head>
<body>
<!-- 当前位置 -->
<div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="sclassadd" class="actionBtn">课程添加</a>课程列表</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
            <th width="30" align="center">课程名称</th>
            <th align="center">选择的分类</th>
            <th align="center">选择的机构</th>
            <th align="center">选择的教师</th>
            <th align="center">简介</th>
            <th align="center">大图</th>
            <th align="center">章节数</th>
            <th align="center">时长</th>
            <th align="center">详情</th>
            <th align="center">类型标识</th>
            <th align="center">操作</th>
        </tr>
        <?php foreach($data['data'] as $key=>$value){ ?>
        <tr>
            <td align="center"><?= $value['name'] ?></td>
            <td align="center"><?= $value['type_name'] ?></td>
            <td align="center"><?= $value['argan_name'] ?></td>
            <td align="center"><?= $value['teacher_name'] ?></td>
            <td align="center"><?= $value['intro'] ?></td>
            <td align="center"><img src="../../<?= $value['img'] ?>" width="100px" height="100px"></td>
            <td align="center"><?= $value['num'] ?></td>
            <td align="center"><?= $value['time'] ?></td>
            <td align="center"><?= $value['details'] ?></td>
            <td align="center"><?php
                if($value['sign']==1){
                    echo "公开";
                } else{
                    echo "私有";
                }?>
            </td>
            <td align="center">
                <a href="classup?id=<?= $value['id'] ?>">编辑</a> |
                <a href="classdel?id=<?= $value['id'] ?>">删除</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <div align="center">
    <a href="{{$data['first_page_url']}}">第一页</a>
    <a href="{{$data['prev_page_url']}}">上一页</a>
    <a href="{{$data['next_page_url']}}">下一页</a>
    <a href="{{$data['last_page_url']}}">最后一页</a>
    </div>
</div>
</body>
</html>