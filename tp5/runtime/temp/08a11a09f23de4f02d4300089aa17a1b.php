<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\php-workspace\MyCms/tp5/application/admin\view\template\index.html";i:1577257374;s:59:"D:\php-workspace\MyCms\tp5\application\admin\view\base.html";i:1577428634;s:67:"D:\php-workspace\MyCms\tp5\application\admin\view\nav_template.html";i:1577276766;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>柠吉CMS</title>
    <link rel="stylesheet" href="/statics/layui/css/layui.css">
    <style>
        #nav-switch {
            width: 45px;
            height: 45px;
            position: absolute;
            top: 0;
            left: 140px;
            padding: 15px 0 0 15px;
        }

        #nav-switch i {
            font-size: 30px;
            color: #bdbec0;
        }
    </style>

    

</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <a href="/index.php/admin" title="后台主页">
            <div class="layui-logo" style="width:140px; color: #fff; font-weight: bold;">柠吉CMS</div>
        </a>
        <div id="nav-switch">
            <i class="layui-icon layui-icon-shrink-right"></i>
        </div>


        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="/index.php/menu">
                <i class="layui-icon layui-icon-app"></i> 功能</a></li>
            <li class="layui-nav-item"><a href="/index.php/system">
                <i class="layui-icon layui-icon-console"></i> 系统</a></li>
            <li class="layui-nav-item"><a href="/index.php/info">
                <i class="layui-icon layui-icon-form"></i> 信息</a></li>
            <li class="layui-nav-item"><a href="/index.php/class">
                <i class="layui-icon layui-icon-tabs"></i> 栏目</a></li>
            <li class="layui-nav-item"><a href="/index.php/template">
                <i class="layui-icon layui-icon-template"></i> 模板</a></li>
            <li class="layui-nav-item"><a href="/index.php/user_manage">
                <i class="layui-icon layui-icon-user"></i> 用户</a></li>
            <li class="layui-nav-item"><a href="/index.php/plug_in">
                <i class="layui-icon layui-icon-component"></i> 插件</a></li>
            <li class="layui-nav-item"><a href="/index.php/shopping_mall">
                <i class="layui-icon layui-icon-cart"></i> 商城</a></li>
            <li class="layui-nav-item"><a href="/index.php/other">
                <i class="layui-icon layui-icon-util"></i> 其他</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon layui-icon-username"></i>
                    用户名
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="/index.php/update_user_data">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退出</a></li>
        </ul>
    </div>

    <div id="main-nav" data-switch="1" class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item"><a href="/index.php/view_tag_syntax"> 查看标签语法 </a></li>
<li class="layui-nav-item"><a href="/index.php/automatically_generate_label"> 自动生成标签 </a></li>
<li class="layui-nav-item"><a href="/index.php/dynamic_page_template_manage"> 动态页面模板管理 </a></li>


<li class="layui-nav-item">
    <a href="javascript:;"> 首页模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/home_template"> 首页模板 </a></dd>
        <dd><a href="/index.php/manage_index_scheme"> 管理首页方案 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 封面模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_cover_template_type"> 管理封面模板分类 </a></dd>
        <dd><a href="/index.php/manage_cover_page_template"> 管理封面模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 列表模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_list_template_type"> 管理列表模板分类 </a></dd>
        <dd><a href="/index.php/manage_list_template"> 管理列表模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 内容模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_content_template_categories"> 管理内容模板分类 </a></dd>
        <dd><a href="/index.php/manage_content_template"> 管理内容模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 搜索模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_search_template_type"> 管理搜索模板分类 </a></dd>
        <dd><a href="/index.php/manage_search_template"> 管理搜索模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 标签模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_label_template_type"> 管理标签模板分类 </a></dd>
        <dd><a href="/index.php/manage_label_template"> 管理标签模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 公共模板变量 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_template_var_type"> 管理模板变量分类 </a></dd>
        <dd><a href="/index.php/manage_template_var"> 管理模板变量 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 公共模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/control_panel_template"> 控制面板模板 </a></dd>
        <dd><a href="/index.php/site_wide_search_template"> 全站搜索模板 </a></dd>
        <dd><a href="/index.php/advanced_search_form_template"> 高级搜索表单模板 </a></dd>
        <dd><a href="/index.php/search_js_templates_horizontally"> 横向搜索JS模板 </a></dd>
        <dd><a href="/index.php/vertical_search_js_template"> 纵向搜索JS模板 </a></dd>
        <dd><a href="/index.php/related_info_template"> 相关信息模板 </a></dd>
        <dd><a href="/index.php/message_board_template"> 留言板模板 </a></dd>
        <dd><a href="/index.php/comment_js_call_template"> 评论JS调用模板 </a></dd>
        <dd><a href="/index.php/final_download_page_template"> 最终下载页模板 </a></dd>
        <dd><a href="/index.php/download_address_template"> 下载地址模板 </a></dd>
        <dd><a href="/index.php/online_play_address_template"> 在线播放地址模板 </a></dd>
        <dd><a href="/index.php/list_page_template"> 列表分页模板 </a></dd>
        <dd><a href="/index.php/login_status_template"> 登陆状态模板 </a></dd>
        <dd><a href="/index.php/js_call_login_template"> JS调用登陆模板 </a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> JS模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_js_template_type"> 管理JS模板分类 </a></dd>
        <dd><a href="/index.php/manage_js_template"> 管理JS模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 评论列表模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/add_comment_template"> 增加评论模板 </a></dd>
        <dd><a href="/index.php/manage_comment_template"> 管理评论模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 打印模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/add_print_template"> 增加打印模板 </a></dd>
        <dd><a href="/index.php/manage_print_template"> 管理打印模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 自定义页面模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/add_custom_page_template"> 增加自定义页面模板 </a></dd>
        <dd><a href="/index.php/manage_custom_page_template"> 管理自定义页面模板 </a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 投票模板 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/add_voting_template"> 增加投票模板 </a></dd>
        <dd><a href="/index.php/manage_voting_template"> 管理投票模板 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 标签 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_label_type"> 管理标签分类 </a></dd>
        <dd><a href="/index.php/manage_label"> 管理标签 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 模板组管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/modify_template_id"> 修改模板ID </a></dd>
        <dd><a href="/index.php/export_template_group"> 导入/导出模板组 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 其他相关 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/batch_import_class_template"> 批量导入栏目模板 </a></dd>
        <dd><a href="/index.php/batch_change_list_template"> 批量更换列表模板 </a></dd>
        <dd><a href="/index.php/batch_replace_template_char"> 批量替换模板字符 </a></dd>


    </dl>
</li>








            </ul>
        </div>
    </div>

    
<div id="main-content" class="layui-body" style="bottom:0;">temp</div>


</div>

<script src="/statics/layui/layui.js"></script>
<script>
    $ = null;

    function fold_nav(operation) {
        // alert(operation)
        var icon = $('#nav-switch').children('i'), nav = $('#main-nav'), content = $('#main-content');
        switch (operation) {
            case 'open':
                nav.data('switch', 1);
                content.animate({'left': 200});
                nav.animate({'left': 0, opacity: 1});
                icon.removeClass('layui-icon-spread-left').addClass('layui-icon-shrink-right');
                break;
            case 'close':
                nav.data('switch', 0);
                content.animate({'left': 0});
                nav.animate({'left': -200, opacity: 0});
                icon.removeClass('layui-icon-shrink-right').addClass('layui-icon-spread-left');
                break;
        }
    }


    layui.use(['element', 'jquery'], function () {
        var element = layui.element;
        $ = layui.jquery;
        $(function () {
            $('#nav-switch').click(function () {
                $('#main-nav').data('switch') == 1 ? fold_nav('close') : fold_nav('open');
            });
            execute_event();
        })
    });
</script>

</body>
</html>