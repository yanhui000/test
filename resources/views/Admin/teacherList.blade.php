<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>教师展示</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/page.js" ></script> -->
</head>

<body>
<div id="pageAll">
    <div class="pageTop">
        <div class="page">
            <img src="img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;-</span>&nbsp;教师展示
        </div>
    </div>

    <div class="page">
            <div class="conShow">
                <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="66px" class="tdColor tdC">序号</td>
                        <td width="435px" class="tdColor">教师名称</td>
                        <td width="630px" class="tdColor">教师介绍</td>
                        <td width="400px" class="tdColor">教师图片</td>
                        <td width="400px" class="tdColor">教师等级</td>
                        <td width="400px" class="tdColor">添加时间</td>
                        <td width="130px" class="tdColor">操作</td>
                    </tr>
                    @foreach($info as $v)
                    <tr height="40px">
                        <td>{{$v->t_id}}</td>
                        <td>{{$v->t_name}}</td>
                        <td>{{$v->t_desc}}</td>
                        <td><img width="100px" height="100px" src="{{asset($v->t_img)}}" alt=""></td>
                        <td>
                            @if($v->t_level==1)
                                一级教师
                            @elseif($v->t_level==2)
                                二级教师
                            @else
                                三级教师
                            @endif
                        </td>
                        <td>{{date('Y-m-d H:i:s',$v->t_time)}}</td>
                        <td>
                            <a href="../teacherDel?t_id={{$v->t_id}}">删除</a>
                            <a href="../teacherUpdate?t_id={{$v->t_id}}">修改</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="paging">{{ $info->links()}}</div>
            </div>
            <!-- user 表格 显示 end-->
        </div>
        <!-- user页面样式end -->
    </div>

</div>
</body>
</html>