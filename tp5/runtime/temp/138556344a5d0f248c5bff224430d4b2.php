<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\php-workspace\MyCms/tp5/application/admin\view\nj_class\update_fragments.html";i:1577274543;s:59:"D:\php-workspace\MyCms\tp5\application\admin\view\base.html";i:1577260328;s:67:"D:\php-workspace\MyCms\tp5\application\admin\view\nav_nj_class.html";i:1577270052;}*/ ?>
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
        <div class="layui-logo" style="width:140px;">柠吉CMS</div>
        <div id="nav-switch">
            <i class="layui-icon layui-icon-shrink-right"></i>
        </div>


        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="/index.php/system">
                <i class="layui-icon layui-icon-engine"></i> 系统</a></li>
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
                <i class="layui-icon layui-icon-app"></i> 其他</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon layui-icon-username"></i>
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退出</a></li>
        </ul>
    </div>

    <div id="main-nav" data-switch="1" class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item">
    <a class="" href="javascript:;">信息相关管理</a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_info">管理信息</a></dd>
        <dd><a href="/index.php/audit_info">审核信息</a></dd>
        <dd><a href="/index.php/issue_info">签发信息</a></dd>
        <dd><a href="/index.php/manage_review">管理评论</a></dd>
        <dd><a href="/index.php/update_fragments">更新碎片</a></dd>
        <dd><a href="/index.php/update_topic">更新专题</a></dd>
        <dd><a href="/index.php/data_count">数据统计</a></dd>
        <dd><a href="/index.php/rank_count">排行统计</a></dd>
    </dl>
</li>
<li class="layui-nav-item">
    <a href="javascript:;">栏目管理</a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_class">管理栏目</a></dd>
        <dd><a href="/index.php/manage_class_pageing">管理栏目(分页)</a></dd>
        <dd><a href="/index.php/class_custom_field">栏目自定义字段</a></dd>
        <dd><a href="/index.php/batch_set_class_pro">批量设置栏目属性</a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;">专题管理</a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_topic_class">管理专题分类</a></dd>
        <dd><a href="/index.php/manage_topics">管理专题</a></dd>
        <dd><a href="/index.php/theme_custom_fields">专题自定义字段</a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;">标题分类管理</a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/add_title_category">增加标题分类</a></dd>
        <dd><a href="/index.php/manage_title_type">管理标题分类</a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;">碎片管理</a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_type">管理碎片分类</a></dd>
        <dd><a href="/index.php/management_debris">管理碎片</a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;">自定义页面</a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_custom_page_type">管理自定义页面分类</a></dd>
        <dd><a href="/index.php/add_custom_page">增加自定义页面</a></dd>
        <dd><a href="/index.php/manage_custom_page">管理自定义页面</a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;">自定义列表</a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_custom_list_class">管理自定义列表分类</a></dd>
        <dd><a href="/index.php/add_custom_list">增加自定义列表</a></dd>
        <dd><a href="/index.php/manage_custom_lists">管理自定义列表</a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;">自定义JS</a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_custom_js_type">管理自定义JS分类</a></dd>
        <dd><a href="/index.php/add_custom_js">增加自定义JS</a></dd>
        <dd><a href="/index.php/manage_custom_js">管理自定义JS</a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> TAGS管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/set_tags_param"> 设置TAGS参数 </a></dd>
        <dd><a href="/index.php/manage_tags_type"> 管理TAGS分类 </a></dd>
        <dd><a href="/index.php/manage_tags"> 管理TAGS </a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 头条/推荐级别 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_headline_levels"> 管理头条级别 </a></dd>
        <dd><a href="/index.php/manage_recommendation_levels"> 管理推荐级别 </a></dd>

    </dl>
</li>


<li class="layui-nav-item"><a href="/index.php/manage_annex">管理附件</a></li>


<li class="layui-nav-item">
    <a href="javascript:;"> 采集管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/add_acquisition_node"> 增加采集节点 </a></dd>
        <dd><a href="/index.php/manage_collection_nodes"> 管理采集节点 </a></dd>
        <dd><a href="/index.php/manage_collection_node_paging"> 管理采集节点(分页) </a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 全站全文搜索 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/site_wide_search_settings"> 全站搜索设置 </a></dd>
        <dd><a href="/index.php/manage_search_data_sources"> 管理搜索数据源 </a></dd>
        <dd><a href="/index.php/clean_up_search_data"> 清理搜索数据 </a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> WAP管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/wap_set"> WAP设置 </a></dd>
        <dd><a href="/index.php/manage_wap_templates"> 管理WAP模板 </a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 其他相关 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/count_info_data"> 统计信息数据 </a></dd>
        <dd><a href="/index.php/user_publish_count"> 用户发布统计 </a></dd>
        <dd><a href="/index.php/manage_search_keyword"> 管理搜索关键字 </a></dd>
        <dd><a href="/index.php/batch_replace_field_value"> 批量替换字段值 </a></dd>
        <dd><a href="/index.php/batch_transfer_info"> 批量转移信息 </a></dd>
        <dd><a href="/index.php/mass_archiving_info"> 信息批量归档 </a></dd>
        <dd><a href="/index.php/bulk_del_info"> 批量删除信息 </a></dd>
        <dd><a href="/index.php/manage_default_voting"> 管理预设投票 </a></dd>

    </dl>
</li>







            </ul>
        </div>
    </div>

    
<div id="main-content" class="layui-body" style="bottom:0;">class</div>


</div>

<script src="/statics/layui/layui.js"></script>
<script>
    layui.use(['element', 'jquery'], function () {
        var element = layui.element;
        var $ = layui.jquery;
        $(function () {
            $('#nav-switch').click(function () {
                var icon = $(this).children('i'), nav = $('#main-nav'), content = $('#main-content');
                if (nav.data('switch') == 1) {
                    nav.data('switch', 0);
                    content.animate({'left': 0});
                    nav.animate({'left': -200, opacity: 0});
                    icon.removeClass('layui-icon-shrink-right').addClass('layui-icon-spread-left');
                } else {
                    nav.data('switch', 1);
                    content.animate({'left': 200});
                    nav.animate({'left': 0, opacity: 1});
                    icon.removeClass('layui-icon-spread-left').addClass('layui-icon-shrink-right');
                }
            });
        })
    });
</script>

</body>
</html>