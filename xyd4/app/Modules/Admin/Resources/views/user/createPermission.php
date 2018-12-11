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
    <center>
        <table>
            <h1>权限添加</h1>
            <form action="createPermissionExec" method="post">
                <input type="hidden" name="_token" value='{{csrf_token()}}'/>
                <tr>
                    <td>
                        <label for="name">权限名称：</label>
                        <input type="text" name="name" id="name" placeholder="请输入权限名称">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="slug">方法名称：</label>
                        <input type="text" name="slug" id="slug" placeholder="请输入方法名">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description">权限描述：</label>
                        <textarea name="description" id="description" cols="30" rows="8" placeholder="请输入权限描述"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="提交">
                    </td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>