<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:46:"../application/index/tpl/dmdormitory\edit.html";i:1545289474;s:55:"D:\wwwroot\dorm\application\index\tpl\index\header.html";i:1545372212;s:53:"D:\wwwroot\dorm\application\index\tpl\index\menu.html";i:1545785666;s:55:"D:\wwwroot\dorm\application\index\tpl\index\footer.html";i:1543992410;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>home</title>
    <link rel="stylesheet" href="/static/js/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/common.css">
    <link rel="stylesheet" href="/static/css/main.css">
    <link rel="stylesheet" href="/static/css/c_page.css">
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body .c-layer-class .layui-layer-btn .layui-layer-btn0{
            background:#335da7;color:#fff;
        }
    </style>
</head>

<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header c-header">
        <span class='icon-menu'></span>
        <div class="layui-logo c-logo">宿舍管理系统</div>
        <!-- 头部区域 -->
        <span class='head-line-1'></span>
        <span class='logo-ps'>科迅软件</span>
        <ul class="layui-nav layui-layout-right nav-user">
            <li  class="layui-nav-item">
                <a href="javascript:;" class='username'>
                    <!--<img src="<?php echo $avatarImg!=''?$avatarImg : ''; ?>http://t.cn/RCzsdCq" class="layui-nav-img">-->
                    您好 , <?php echo $loginName; ?>
                </a>
                <!--<dl class="layui-nav-child top-nav-child">-->
                    <!--<dd><a href="">基本资料</a></dd>-->
                    <!--<dd><a href="">安全设置</a></dd>-->
                <!--</dl>-->
            </li>
            <span class='c-s-line'></span>
            <li class="layui-nav-item layui-nav-item-close">
                <a class='icon icon-sign-out' href="<?php echo $logoutUrl; ?>"></a>
            </li>
        </ul>
    </div>
<div class="layui-side layui-bg-gray">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class="layui-nav layui-nav-tree main-nav-tree"  lay-filter="test">
            <!--<li class="layui-nav-item">-->
                <!--<span class='icon icon-setting'></span>-->
                <!--<a href="javascript:;">系统设置</a>-->
            <!--</li>-->
            <li  style='' class="layui-nav-item">
                <span class='icon icon-xiaoqu'></span>
                <a  class="c-link" data-url="<?php echo url('campus/index'); ?>" href="<?php echo url('campus/index'); ?>">校区管理</a>
            </li>
            <li style='' class="layui-nav-item">
                <span class='icon icon-loudong'></span>
                <a href="javascript:;">楼栋管理</a>
                <dl class="layui-nav-child">
                    <dd><a class="c-link" data-url="<?php echo url('dmbuild/add'); ?>" href="<?php echo url('dmbuild/add'); ?>">楼栋管理</a></dd>
                    <dd><a class="c-link" data-url="<?php echo url('dmfloor/index'); ?>" href="<?php echo url('dmfloor/index'); ?>">楼层管理</a></dd>
                    <dd><a class="c-link" data-url="<?php echo url('dmdormitory/index'); ?>" href="<?php echo url('dmdormitory/index'); ?>">宿舍管理</a></dd>
                </dl>
            </li>
            <li style='' class="layui-nav-item">
                <span class='icon icon-renyuan'></span>
                <a href="javascript:;">人员管理</a>
                <dl class="layui-nav-child">
                    <dd><a class="c-link" data-url="<?php echo url('dmstay/index'); ?>" href="<?php echo url('dmstay/index'); ?>">学生入住</a></dd>
                    <dd><a class="c-link" data-url="<?php echo url('dmbuildmanage/index'); ?>" href="<?php echo url('dmbuildmanage/index'); ?>">楼栋管理员信息</a></dd>
                    <dd><a class="c-link" data-url="<?php echo url('dmdormitorymanage/index'); ?>" href="<?php echo url('dmdormitorymanage/index'); ?>">宿舍管理员信息</a></dd>
                    <dd><a class="c-link" data-url="<?php echo url('bed_manage/index'); ?>" href="<?php echo url('bed_manage/index'); ?>">学生铺位分配</a></dd>
                    <dd><a class="c-link" data-url="<?php echo url('changedormitory/index'); ?>" href="<?php echo url('changedormitory/index'); ?>">换/退宿舍</a></dd>
                    <dd><a class="c-link" data-url="<?php echo url('staff/index'); ?>" href="<?php echo url('staff/index'); ?>">员工管理</a></dd>
                    <dd><a class="c-link" data-url="<?php echo url('visiter/index'); ?>" href="<?php echo url('visiter/index'); ?>">外来人员管理</a></dd>

                </dl>
            </li>
            <li style='' class="layui-nav-item">
                <span class='icon icon-wupin'></span>
                <a href="javascript:;">物品管理</a>
                <dl class="layui-nav-child">
                    <!--<dd><a class="c-link" data-url='' href="javascript:;">公用物品信息</a></dd>-->
                    <dd><a class="c-link" data-url="<?php echo url('repair/index'); ?>" href="<?php echo url('repair/index'); ?>">物品损坏维修管理</a></dd>
                    <dd><a class="c-link" data-url="<?php echo url('honorable/index'); ?>" href="<?php echo url('honorable/index'); ?>">贵重物品进出登记</a></dd>
                </dl>
            </li>
            <!--<li style='' class="layui-nav-item">-->
                <!--<span class='icon icon-guizhang'></span>-->
                <!--<a class="c-link" href="javascript:;">规章制度</a>-->

            <!--</li>-->
            <li style='' class="layui-nav-item">
                <span class='icon icon-lhkh'></span>
                <a href="javascript:;">量化考核管理</a>
                <dl class="layui-nav-child">
                    <dd><a class="c-link" data-url="<?php echo url('assess/index'); ?>" href="<?php echo url('assess/index'); ?>">学生评定管理</a></dd>
                    <dd><a class="c-link" data-url="<?php echo url('dormitoryHygiene/index'); ?>" href="<?php echo url('dormitoryHygiene/index'); ?>">卫生量化考核</a></dd>
                </dl>
            </li>
        </ul>
    </div>
</div>

<div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">
        <div class='route-box'>
            <span class='icon icon-position'></span>
            <span class='title'>当前位置：</span>
            <span>首页</span>
            <span>></span>
            <span><a href="javascript:void(0)" class="menu-nav">楼栋管理</a></span>
            <span>></span>
            <span><a href="avascript:void(0)">宿舍管理</a></span>
        </div>
        <div class='search-box'>
            <div class="ipt-box">
                <form  action="<?php echo url('dmdormitory/edit'); ?>" method='post'>
                    <input placeholder="请输入宿舍房间号" value="<?php echo $room_num; ?>" name="room_num" class='search-ipt' type="text">
                    <span class='icon-search all-search'></span>
                </form>
            </div>
        </div>
        <div style='margin-top:20px;' class='clearfix'>
            <div style='margin-bottom:20px;' class='nav-tab-box p-l'>
                <span class='tab-item'><a  href="<?php echo url('dmdormitory/index'); ?>">添加宿舍</a></span>
                <span class='tab-item  on'><a   href="<?php echo url('dmdormitory/edit'); ?>">编辑宿舍</a></span>
            </div>
            <div class='p-r'>
                <form id="search_from" action="<?php echo url('dmdormitory/edit'); ?>" method='post'>
                    <select class='ipt-xs' name="campus_id">
                        <option value="">请选择</option>
                        <?php if(is_array($campus) || $campus instanceof \think\Collection || $campus instanceof \think\Paginator): $i = 0; $__LIST__ = $campus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $val['cp_id']; ?>" <?php if($val['cp_id'] == $campus_id): ?>selected<?php endif; ?>><?php echo $val['cp_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <select style='margin:0 10px;' class='ipt-xs' name="build_id">
                        <option value="">请选择</option>
                        <?php if(!empty($build_id) || !empty($campus_id)): if(is_array($build) || $build instanceof \think\Collection || $build instanceof \think\Paginator): $i = 0; $__LIST__ = $build;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($campus_id == $val['campus_id']): ?>
                        <option value="<?php echo $val['id']; ?>" <?php if($val['id'] ==$build_id): ?>selected<?php endif; ?>><?php echo $val['build_name']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                    </select>
                    <select class='ipt-xs' name="floor_id">
                        <option value="">请选择</option>
                        <?php if(!empty($floor_id) || !empty($build_id)): if(is_array($floor) || $floor instanceof \think\Collection || $floor instanceof \think\Paginator): $i = 0; $__LIST__ = $floor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($build_id == $val['build_id']): ?>
                        <option value="<?php echo $val['id']; ?>" <?php if($val['id'] ==$floor_id): ?>selected<?php endif; ?>><?php echo $val['floor_name']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                    </select>
                    <select style='margin:0 10px;' class='ipt-xs' name="id">
                        <option value="">请选择</option>
                        <?php if(!empty($floor_id) || !empty($id)): if(is_array($dormitory) || $dormitory instanceof \think\Collection || $dormitory instanceof \think\Paginator): $i = 0; $__LIST__ = $dormitory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($floor_id == $val['floor_id']): ?>
                        <option value="<?php echo $val['id']; ?>" <?php if($val['id'] ==$id): ?>selected<?php endif; ?>><?php echo $val['room_num']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                    </select>
                    <button class="btn btn-info">搜索</button>
                </form>
            </div>
        </div>
        <form id="form_name" action="" onsubmit="return false">
            <input type="hidden" name="id">
            <div style='' class='ipt-main-box'>

                <div class="ipt-box">
                    <label for="">校区选择：</label>
                    <select  class='ipt-xs' name="campus_id">
                        <option value="">请选择</option>
                        <?php if(is_array($campus) || $campus instanceof \think\Collection || $campus instanceof \think\Paginator): $i = 0; $__LIST__ = $campus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $val['cp_id']; ?>"><?php echo $val['cp_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="ipt-box">
                    <label for="">楼栋选择：</label>
                    <select  class='ipt-xs' name="build_id">
                        <option value="">请选择</option>
                    </select>
                </div>
                <div class="ipt-box">
                    <label for="">楼层：</label>
                    <select  class='ipt-xs' name="floor_id">
                        <option value="">请选择</option>
                    </select>
                </div>
                <div class="ipt-box">
                    <label for="">房间号：</label>
                    <input type="text" class='ipt ipt-xs' name="room_num">
                </div>

                <div class="ipt-box">
                    <label for="">几人间：</label>
                    <input type="text" class='ipt ipt-xs' name="several">
                </div>
                <div class="ipt-box">
                    <label for="">电视：</label>
                    <input type="text" class='ipt ipt-xs' name="television">
                </div>
                <div class="ipt-box">
                    <label for="">洗衣机：</label>
                    <input type="text" class='ipt ipt-xs' name="washer">
                </div>
                <div class="ipt-box">
                    <label for="">凳子：</label>
                    <input type="text" class='ipt ipt-xs' name="stool">
                </div>
                <div class="ipt-box">
                    <label for="">桌子：</label>
                    <input type="text" class='ipt ipt-xs' name="desk">
                </div>
                <div class="ipt-box">
                    <label for="">床铺：</label>
                    <input type="text" class='ipt ipt-xs' name="bed">
                </div>
                <div class="ipt-box">
                    <label for="">衣柜：</label>
                    <input type="text" class='ipt ipt-xs' name="wardrobe">
                </div>
                <button class="btn btn-info save">修改</button>

            </div>
        </form>
        <div class='c-table-box'>
            <table class="layui-table">
                <colgroup>
                    <col width="10%">
                    <col width="10%">
                    <col width="8%">
                    <col width="8%">
                    <col width='7%'>
                    <col width="7%">
                    <col width="6%">
                    <col width="7%">
                    <col width="6%">
                    <col width='6%'>
                    <col width="6%">
                    <col width="6%">
                    <col width="12%">
                </colgroup>
                <thead>
                <tr>
                    <th>序号</th>
                    <th>校区名称</th>
                    <th>楼栋名称</th>
                    <th>楼层名称</th>
                    <th>房间号</th>
                    <th>几人间</th>
                    <th>电视</th>
                    <th>洗衣机</th>
                    <th>凳子</th>
                    <th>桌子</th>
                    <th>床铺</th>
                    <th>衣柜</th>
                    <th>修改</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $val['id']; ?></td>
                    <td><?php echo $val['campus']['cp_name']; ?></td>
                    <td><?php echo $val['build']['build_name']; ?></td>
                    <td><?php echo $val['floor']['floor_name']; ?></td>
                    <td><?php echo $val['room_num']; ?></td>
                    <td><?php echo $val['several']; ?></td>
                    <td><?php echo $val['television']; ?></td>
                    <td><?php echo $val['washer']; ?></td>
                    <td><?php echo $val['stool']; ?></td>
                    <td><?php echo $val['desk']; ?></td>
                    <td><?php echo $val['bed']; ?></td>
                    <td><?php echo $val['wardrobe']; ?></td>
                    <td class='opt-td'>
                        <a href="javascript:void(0)" data-id="<?php echo $val['id']; ?>" class="delete">删除</a>
                        <a href="javascript:void(0)" data-id="<?php echo $val['id']; ?>" class="edit">编辑</a>
                    </td>
                </tr>
                </tbody>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
        <div class='page-box clearfix'>
            <div style='font-size:16px;color:#333' class='p-l'>
                <span>共</span>
                <span style='margin:0 5px'><?php echo $count; ?></span>
                <span>条记录</span>
            </div>
            <div class='p-r'>
                <!-- 分页 -->
                <div id="c_page"><?php echo $page; ?></div>
            </div>
        </div>
    </div>

</div>
</div>
<script src='/static/js/jquery-3.2.1.min.js'></script>
<script src="/static/js/layui/layui.all.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element'], function(){
        var element = layui.element;
    });
    var storage = window.localStorage;
    $(".layui-side .layui-nav li").find("a.c-link").each(function (i, item) {
        $(item).on("click", function () {
            var this_menu = $(this).attr("data-url");
            storage["this_menu"] = this_menu;
        })
        //获取当前data-url
        var this_url = storage['this_menu'];
        if ($(item).attr("data-url") == this_url) {
            $(item).parents("li").addClass("layui-nav-itemed");
            $(item).parent().addClass("layui-this");
            $(item).siblings(".c-link").removeClass("layui-this").parents("li").siblings("li").find("dd").removeClass("layui-nav-itemed")
        }
    })
    //搜索
    $(document).on('click','.all-search',function(){
        $(this).parent('form').submit();
    });
</script>
<script src='/static/js/main.js'></script>

<script>

    $(document).on('change','#search_from select[name="campus_id"]',function(){
        var campus_id = $(this).val();
        if(campus_id){
            $.post("<?php echo url('tools/getbuild'); ?>",{campus_id:campus_id},function(res){
                if(res.status == 1){
                    var html = '<option value="">请选择</option>';
                    $.each(res.data, function(k, v) {
                        html+= '<option value="'+ v.id+'">'+ v.build_name+'</option>';
                    });
                    $('#search_from select[name="build_id"]').html(html);
                }
            },'json');
        }else{
            $('#search_from select[name="build_id"]').html('<option value="">请选择</option>');
            $('#search_from select[name="floor_id"]').html('<option value="">请选择</option>');
            $('#search_from select[name="id"]').html('<option value="">请选择</option>');
        }
    });

    $(document).on('change','#search_from select[name="build_id"]',function(){
        var campus_id = $('#search_from select[name="campus_id"]').val();
        var build_id = $(this).val();
        if(campus_id && build_id){
            $.post("<?php echo url('tools/getFloor'); ?>",{campus_id:campus_id,build_id:build_id},function(res){
                if(res.status == 1){
                    var html = '<option value="">请选择</option>';
                    $.each(res.data, function(k, v) {
                        html+= '<option value="'+ v.id+'">'+ v.floor_name+'</option>';
                    });
                    $('#search_from select[name="floor_id"]').html(html);
                }
            },'json');
        }else{
            $('#search_from select[name="floor_id"]').html('<option value="">请选择</option>');
            $('#search_from select[name="id"]').html('<option value="">请选择</option>');
        }
    });

    $(document).on('change','#search_from select[name="floor_id"]',function(){
        var campus_id = $('#search_from select[name="campus_id"]').val();
        var build_id = $('#search_from select[name="build_id"]').val();
        var floor_id = $(this).val();
        if(campus_id && build_id && floor_id){
            $.post("<?php echo url('tools/getRoom'); ?>",{campus_id:campus_id,build_id:build_id,floor_id:floor_id},function(res){
                if(res.status == 1){
                    var html = '<option value="">请选择</option>';
                    $.each(res.data, function(k, v) {
                        html+= '<option value="'+ v.id+'">'+ v.room_num+'</option>';
                    });
                    $('#search_from select[name="id"]').html(html);
                }
            },'json');
        }else{
            $('#search_from select[name="id"]').html('<option value="">请选择</option>');
        }
    });


    $(document).on('change','#form_name select[name="campus_id"]',function(){
        var campus_id = $(this).val();
        if(campus_id){
            $.post("<?php echo url('tools/getbuild'); ?>",{campus_id:campus_id},function(res){
                if(res.status == 1){
                    var html = '<option value="">请选择</option>';
                    $.each(res.data, function(k, v) {
                        html+= '<option value="'+ v.id+'">'+ v.build_name+'</option>';
                    });
                    $('#form_name select[name="build_id"]').html(html);
                }
            },'json');
        }else{
            $('#form_name select[name="build_id"]').html('<option value="">请选择</option>');
            $('#form_name select[name="floor_id"]').html('<option value="">请选择</option>');
        }
    });

    $(document).on('change','#form_name select[name="build_id"]',function(){
        var campus_id = $('#form_name select[name="campus_id"]').val();
        var build_id = $(this).val();
        if(campus_id && build_id){
            $.post("<?php echo url('tools/getFloor'); ?>",{campus_id:campus_id,build_id:build_id},function(res){
                if(res.status == 1){
                    var html = '<option value="">请选择</option>';
                    $.each(res.data, function(k, v) {
                        html+= '<option value="'+ v.id+'">'+ v.floor_name+'</option>';
                    });
                    $('#form_name select[name="floor_id"]').html(html);
                }
            },'json');
        }else{
            $('#form_name select[name="floor_id"]').html('<option value="">请选择</option>');
        }
    });

    $(document).on('click','.save',function(){
        var data = $("#form_name").serializeArray();

        if(data){
            $.post("<?php echo url('dmdormitory/update'); ?>",data,function(res){
                if(res.status == 1){
                    layer.msg(res.msg, {icon: 1});
                    setTimeout(location.reload(),5000);
                }else{
                    layer.msg(res.msg, {icon: 2});
                }
            },'json');
        }
    });

    $(document).on('click','.edit',function(){
        var id = $(this).attr('data-id');

        if(id){
            $.post("<?php echo url('dmdormitory/getInfo'); ?>",{id:id},function(res){
                if(res.status == 1){

                    $('#form_name').find('input[name="id"]').val(res.data.id);
                    $('#form_name').find('select[name="campus_id"]').val(res.data.campus_id);

                    var build_html = '';
                    $.each(res.build,function(k,v){
                        build_html+='<option value="'+v.id+'">'+v.build_name+'</option>';
                    });
                    $('#form_name').find('select[name="build_id"]').html(build_html);
                    $('#form_name').find('select[name="build_id"]').val(res.data.build_id);

                    var floor_html = '';
                    $.each(res.floor,function(k,v){
                        floor_html+='<option value="'+v.id+'">'+v.floor_name+'</option>';
                    });

                    $('#form_name').find('select[name="floor_id"]').html(floor_html);
                    $('#form_name').find('select[name="floor_id"]').val(res.data.floor_id);

                    $('#form_name').find('input[name="room_num"]').val(res.data.room_num);
                    $('#form_name').find('input[name="several"]').val(res.data.several);
                    $('#form_name').find('input[name="television"]').val(res.data.television);
                    $('#form_name').find('input[name="washer"]').val(res.data.washer);
                    $('#form_name').find('input[name="stool"]').val(res.data.stool);
                    $('#form_name').find('input[name="desk"]').val(res.data.desk);
                    $('#form_name').find('input[name="bed"]').val(res.data.bed);
                    $('#form_name').find('input[name="wardrobe"]').val(res.data.wardrobe);
                }
            },'json');
        }
    });

    $(document).on('click','.delete',function(){
        var id = $(this).attr('data-id');

        if(id){

            layer.confirm('是否确认删除', {icon: 3, title:'删除操作'}, function(index){
                layer.close(index);
                $.post("<?php echo url('dmdormitory/delete'); ?>",{id:id},function(res){
                    if(res.status == 1){
                        layer.msg(res.msg, {icon: 1});
                        setTimeout('location.reload()',3000);
                    }else{
                        layer.msg(res.msg, {icon: 2});
                    }
                },'json');
            });
        }
    });
</script>
</body>
</html>