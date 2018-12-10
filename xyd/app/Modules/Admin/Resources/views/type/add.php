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
            <form action="SortAdd" method="post" enctype="multipart/form-data"> 
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <tr>
                    <td>
                        <label for="cat_name">分类名：</label>
                        <input type="text" name="cat_name" id="cat_name"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">父级ID：</label>
                        <select>
                            <?php foreach($sortList as $value){ ?>
                                <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                            <?php } ?>
                        </select><br>
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