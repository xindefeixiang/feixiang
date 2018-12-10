<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <th>分类ID</th>
        <th>分类名</th>
        <th>父级ID</th>
        <th>操作</th>
        <?php foreach($sortList as $val){ ?>
            <tr>
                <td><?= $val['id']?></td>
                <td><?= $val['name']?></td>
                <td><?= $val['pid']?></td>
                <td>
                    <a href="del?id=<?= $val['id'] ?>">删除</a>
                    <a href="updata?id=<?= $val['id'] ?>">修改</a>
                    <a href="add">添加分类</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>