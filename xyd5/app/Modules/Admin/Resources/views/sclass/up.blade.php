<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 课程修改页面</title>
    <meta name="Copyright" content="Douco Design." />
    <link href="../../admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
    <script type="text/javascript" src="../../admin/js/jquery.autotextarea.js"></script>
</head>
<body>
<!-- 当前位置 -->
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="sclassshow" class="actionBtn">课程列表</a>修改课程</h3>
    <form action="sclassupdate" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td align="right">请选择分类</td>
                <td>
                    <select id="s" name="type_id">
                        <option value="{{$data['type_id']}}">{{$data['type_name']}}</option>
                        <option>请选择</option>
                        <?php
                        foreach ($type as $k=>$v){
                        ?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">请选择机构</td>
                <td>
                    <select id="s" name="argan_id">
                        <option value="{{$data['argan_id']}}">{{$data['argan_name']}}</option>
                        <option>请选择</option>
                        <?php
                        foreach ($argan as $k=>$v){
                        ?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">请选择老师</td>
                <td>
                    <select id="s" name="teacher_id">
                        <option value="{{$data['teacher_id']}}">{{$data['teacher_name']}}</option>
                        <option>请选择</option>
                        <?php
                        foreach ($teacher as $k=>$v){
                        ?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="90" align="right">课程名称</td>
                <td>
                    <input type="text" name="name" value="{{$data['name']}}" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td width="90" align="right">简介</td>
                <td>
                    <input type="text" name="intro" value="{{$data['intro']}}" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">大图</td>
                <td>
                    <input type="file" name="img" size="38" class="inpFlie" />
                    <img src="../../{{$data['img']}}" width="100px;" height="100px;"></td>
            </tr>
            <tr>
                <td width="90" align="right">章节数</td>
                <td>
                    <input type="text" name="num" value="{{$data['num']}}" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td width="90" align="right">时长</td>
                <td>
                    <input type="text" name="time" value="{{$data['time']}}" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td width="90" align="right">类型标识</td>
                <td>
                    <input type="radio" name="sign" value="1"/>公开
                    <input type="radio" name="sign" value="2"/>私有
                </td>
            </tr>
            <tr>
                <td width="90" align="right">详情</td>
                <td>
                    <textarea name="details" cols="25" rows="10">{{$data['details']}}</textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <input class="btn" type="submit" value="提交" />
                    <input class="btn" type="reset" value="重置" />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
<script type="text/javascript" src="{{asset('admin/js/jQuery1.7.js') }}"></script>
</html>