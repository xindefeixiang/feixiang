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
        <h3><a href="arganceshi" class="actionBtn">添加机构</a>机构列表</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <th width="30" align="center">用户名</th>
                <th align="left">机构名称</th>
                <th align="center">机构logo</th>
                <th align="center">机构所在地</th>
                <th align="center">详细地址</th>
                <th align="center">域名</th>
                <th align="center">描述</th>
                <th align="center">操作</th>
            </tr>
            <?php foreach($data['data'] as $key=>$value){ ?>
                <tr>
                    <td align="center"><?= $value['user_name'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td align="center"><img src="../../<?= $value['logo'] ?>" width="100px" height="100px"></td>
                    <td align="center"><?= $value['province'] ?></td>
                    <td align="center"><?= $value['address'] ?></td>
                    <td align="center"><?= $value['url'] ?></td>
                    <td align="center"><?= $value['desc'] ?></td>
                    <td align="center">
                        <a href="arganup?id=<?= $value['id'] ?>">编辑</a> |
                        <a href="argandel?id=<?= $value['id'] ?>">删除</a>
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