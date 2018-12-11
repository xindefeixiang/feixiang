<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 添加机构 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="../../admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
    <script type="text/javascript" src="../../admin/js/jquery.autotextarea.js"></script>
</head>
<body>
    <!-- 当前位置 -->
    <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="arganshow" class="actionBtn">机构列表</a>添加机构</h3>
            <form action="arganin" method="post" enctype="multipart/form-data">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="90" align="right">机构名称</td>
                        <td>
                            <input type="text" name="name" value="" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">省市县</td>
                        <td>
                            <select id="s" name="city_id[]">
                                <option>请选择</option>
                                <?php
                                foreach ($city as $k=>$v){
                                ?>
                                <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">机构地址</td>
                        <td>
                            <input type="text" name="address" value="" size="50" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">机构域名</td>
                        <td>
                            <input type="text" name="url" value="" size="50" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">机构logo</td>
                        <td>
                            <input type="file" name="file" size="38" class="inpFlie" />
                            <img src="images/icon_no.png"></td>
                    </tr>
                    <tr>
                        <td align="right" valign="top">机构描述</td>
                        <td>
                            <textarea id="content" name="desc" style="width:780px;height:400px;" class="textArea"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input class="btn" type="submit" value="提交" />
                            <input class="btn" type="reset" value="重置" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</body>
<script type="text/javascript" src="{{asset('admin/js/jQuery1.7.js') }}"></script>
<script>
    $(document).on('change',"#s",function(){
        var id = $(this).val();
        var obj = $(this);
        $.ajax({ url: "arganmove",type:'get',data:{
                id:id
            } ,
            dataType:'json',
            success: function(arr){

                // arr=jQuery.parseJSON(arr);
                // alert(arr);return false;
                if(arr==''){
                    return false;
                }
                var sel = "<select id='s' name='city_id[]'>";
                sel+="<option>请选择</option>";
                $(arr).each(function(key,obj){
                    sel+="<option value='"+obj.id+"'>"+obj.name+"</option>";
                })
                sel+="</select>";
                obj.nextAll().remove();
                obj.after(sel);
            }});


    })
</script>
</html>