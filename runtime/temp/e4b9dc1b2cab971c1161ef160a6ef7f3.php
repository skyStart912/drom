<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:42:"../application/index/tpl/campus\index.html";i:1545127147;s:55:"D:\wwwroot\dorm\application\index\tpl\index\header.html";i:1548402601;s:53:"D:\wwwroot\dorm\application\index\tpl\index\menu.html";i:1545785666;s:55:"D:\wwwroot\dorm\application\index\tpl\index\footer.html";i:1543992410;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>home</title>
    <link rel="stylesheet" href="/static/js/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/common.css">
    <link rel="stylesheet" href="/static/css/header.css">
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
        <div style='' class='row clearfix basic-desktop-container'>
                <div class='topbar-box default-style-color col-lg-12'>
                    <div class='menu-btn'>
                        <span class='icon-menu'></span>
                            <ul class='menu-child-list hide'>
                                <?php if(is_array($systemModel) || $systemModel instanceof \think\Collection || $systemModel instanceof \think\Paginator): if( count($systemModel)==0 ) : echo "" ;else: foreach($systemModel as $key=>$vo): ?>
                                <li><a href="<?php echo $vo['sd_url']; ?>"><?php echo $vo['sd_name']; ?></a></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>    
                    </div>
                    <div class='topbar col-lg-12 clearfix'>
                        <div style='' class='pull-left'>
                            <h3 style='margin-left:70px;font-size:24px;color:#f5f5f5'>欢迎来到<?php echo \think\Config::get('sushe_text'); ?></h3>
                        </div>
                        <div class='pull-right '>
                            <div class='user-box'>
                                <a href="<?php echo \think\Config::get('sso_config.base_url'); ?>/home/index/usermodify" style="color:#fff;">
                                    <span class='icon-user'></span>
                                </a>
                                <a href="<?php echo \think\Config::get('sso_config.base_url'); ?>/admin/index/index" style="color:#fff;">
                                    <span class='welcome'>欢迎您，<?php echo $loginName; ?></span>
                                </a>
                            </div>
                            <span class='c-line-1'>|</span>
                            <div class='topbar-btn-list'>
                                <span class='btn-item icon-email'></span>
                                <span class='btn-item icon-question'></span>
                                <span class='btn-item icon-skin'></span>
                                <a href="<?php echo $logoutUrl; ?>"><span id='login_out'  class='btn-item icon-close t'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
               
                
          
                
            </div>
<!-- <div class="layui-layout layui-layout-admin">
    <div class="layui-header c-header">
        <span class='icon-menu'></span>
        <div class="layui-logo c-logo">宿舍管理系统</div> -->
        <!-- 头部区域 -->
        <!-- <span class='head-line-1'></span>
        <span class='logo-ps'>科迅软件</span>
        <ul class="layui-nav layui-layout-right nav-user">
            <li  class="layui-nav-item"> -->
                <!-- <a href="javascript:;" class='username'> -->
                    <!--<img src="<?php echo $avatarImg!=''?$avatarImg : ''; ?>http://t.cn/RCzsdCq" class="layui-nav-img">-->
                    <!-- 您好 , <?php echo $loginName; ?> -->
                <!-- </a> -->
                <!--<dl class="layui-nav-child top-nav-child">-->
                    <!--<dd><a href="">基本资料</a></dd>-->
                    <!--<dd><a href="">安全设置</a></dd>-->
                <!--</dl>-->
            <!-- </li>
            <span class='c-s-line'></span>
            <li class="layui-nav-item layui-nav-item-close">
                <a class='icon icon-sign-out' href="<?php echo $logoutUrl; ?>"></a>
            </li>
        </ul>
    </div> -->
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
            <span><a href="">校区管理</a></span>
        </div>
        <div class='search-box'>
          <div class="ipt-box">
              <form  action="<?php echo url('campus/index'); ?>" method='post'>
                  <input placeholder="请输入校区名称" value="<?php echo $cp_name; ?>" name="cp_name" class='search-ipt' type="text">
                  <span class='icon-search all-search'></span>
              </form>
          </div>

        </div>
        <div style='margin-bottom:20px;' class='nav-tab-box'>
            <span class='tab-item on'><a  href="<?php echo url('campus/index'); ?>">校区查看</a></span>
            <span class='tab-item'><a   href="<?php echo url('campus/edit'); ?>">编辑校区</a></span>
        </div>
        <div class='c-table-box'>
            <table class="layui-table">
                <colgroup>
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr>
                        <th>校区名称</th>
                        <th>校区地址</th>
                        <th>校区联系人</th>
                        <th>电话号码</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><?php echo $val['cp_name']; ?></td>
                        <td><?php echo $val['cp_addr']; ?></td>
                        <td><?php echo $val['cp_resp']; ?></td>
                        <td><?php echo $val['cp_tel']; ?></td>
                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
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

</body>
</html>
