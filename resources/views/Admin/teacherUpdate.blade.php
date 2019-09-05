<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>教师添加</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<form action="do_teacherUpdate" method="post" enctype="multipart/form-data">
    <input type="hidden" value="{{$info['t_id']}}" name="t_id">
    <div id="pageAll">
        <div class="pageTop">
            <div class="page">
                <img src="img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
                            href="#">教师管理</a>&nbsp;-</span>&nbsp;教师修改
            </div>
        </div>
        <div class="page ">
            <div class="banneradd bor">
                <div class="baTopNo">
                    <span>教师修改</span>
                </div>
                <div class="baBody">
                    <div class="bbD">
                        教师名称：<input type="text" value="{{$info['t_name']}}" name="t_name" id="t_name" class="input3" />
                    </div>
                    <div class="bbD">
                        &nbsp;教师等级：<select name="t_level" id="t_level" class="input3">
                            <option value="1" @if($info['t_level']==1) selected @endif>一级教师</option>
                            <option value="2" @if($info['t_level']==2) selected @endif>二级教师</option>
                            <option value="3" @if($info['t_level']==3) selected @endif>三级教师</option>
                        </select>
                    </div>
                    <div class="bbD">
                        教师介绍：<div class="btext2">
                            <textarea name="t_desc" id="t_desc" class="text2">{{$info['t_desc']}}</textarea>
                        </div>
                    </div>
                    <div class="bbD">
                        教师图片：<img width="100px" height="100px" src="{{asset($info['t_img'])}}" alt="">
                        <input type="file" name="t_img" id="exampleInputFile">
                    </div>
                    <div class="bbD">
                        <p class="bbDP">
                            <input type="submit" value="提交" class="btn_ok btn_yes">
                            <a class="btn_ok btn_no" href="#">取消</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>