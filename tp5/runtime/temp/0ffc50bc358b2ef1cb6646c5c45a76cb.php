<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\php-workspace\wms/tp5/application/user\view\index\menu.html";i:1581743400;s:56:"D:\php-workspace\wms\tp5\application\user\view\base.html";i:1581760047;}*/ ?>
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
            left: 200px;
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
        <a href="/user" title="系统主页">
            <div class="layui-logo" style="color: #fff; font-weight: bold;">柠吉仓库管理系统</div>
        </a>
        <div id="nav-switch">
            <i class="layui-icon layui-icon-shrink-right"></i>
        </div>


        <ul class="layui-nav layui-layout-left" style="left:260px;">
            <li class="layui-nav-item"><a href="/menu">
                <i class="layui-icon layui-icon-app"></i> 功能</a></li>
            <li class="layui-nav-item"><a href="/system">
                <i class="layui-icon layui-icon-console"></i> 系统</a></li>
            <li class="layui-nav-item"><a href="/Storeroom">
                <i class="layui-icon layui-icon-form"></i> 仓库</a></li>
            <li class="layui-nav-item"><a href="/quality">
                <i class="layui-icon layui-icon-tabs"></i> 货品</a></li>
            <li class="layui-nav-item"><a href="/repertory">
                <i class="layui-icon layui-icon-template"></i> 库存</a></li>
            <li class="layui-nav-item"><a href="/basics">
                <i class="layui-icon layui-icon-user"></i> 基础</a></li>
            <li class="layui-nav-item"><a href="/plug_in">
                <i class="layui-icon layui-icon-component"></i> 插件</a></li>
            <li class="layui-nav-item"><a href="/shopping_mall">
                <i class="layui-icon layui-icon-cart"></i> 商城</a></li>
            <li class="layui-nav-item"><a href="/other">
                <i class="layui-icon layui-icon-util"></i> 其他</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon layui-icon-username"></i>
                    <?php echo \think\Session::get('user_name'); ?>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="/update_password">修改密码</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退出</a></li>
        </ul>
    </div>

    <div id="main-nav" data-switch="1" class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                
            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray">
        


<div style="padding: 15px;">


    <div class="layui-card">
        <div class="layui-card-header"><strong>最近使用</strong></div>
        <div class="layui-card-body">

            <div class="layui-btn-container">
                <a href="" class="layui-btn layui-btn-primary">链接</a>
                <a href="" class="layui-btn layui-btn-primary">链接</a>
                <a href="" class="layui-btn layui-btn-primary">链接</a>
                <a href="" class="layui-btn layui-btn-primary">链接</a>
                <a href="" class="layui-btn layui-btn-primary">链接</a>
            </div>

        </div>
    </div>


    <div class="layui-card">
        <div class="layui-card-header"><strong>常用功能</strong></div>
        <div class="layui-card-body">

            <div class="layui-btn-container">

                <a href="/" class="layui-btn layui-btn-primary"> 增加信息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理信息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 审核信息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 签发信息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理评论 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 更新碎片 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 更新专题 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 数据更新 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 数据统计 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 排行统计 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 后台首页 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 网站首页 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 后台地图 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 版本更新 </a>

            </div>

        </div>
    </div>


    <div class="layui-card">
        <div class="layui-card-header"><strong>系统设置</strong></div>
        <div class="layui-card-body">

            <fieldset class="layui-elem-field layui-field-title">
                <legend>系统设置</legend>
            </fieldset>

            <div class="layui-btn-container">

                <a href="/" class="layui-btn layui-btn-primary"> 系统参数设置 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 伪静态参数设置 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 动态页缓存设置 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 页面同步设置 </a>
                <a href="/" class="layui-btn layui-btn-primary"> DIGG顶设置 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 扩展变量 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 安全参数配置 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 网站防火墙 </a>

            </div>

            <fieldset class="layui-elem-field layui-field-title">
                <legend>数据更新</legend>
            </fieldset>

            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 数据更新中心 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 更新信息页地址 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 更新动态页缓存 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 数据整理 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 远程发布 </a>
            </div>

            <fieldset class="layui-elem-field layui-field-title">
                <legend> 数据表与模型</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 新建数据表 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理数据表 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 计划任务</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理刷新任务 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理计划任务 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 工作流</legend>
            </fieldset>


            <div class="layui-btn-container">

                <a href="/" class="layui-btn layui-btn-primary"> 增加工作流 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理工作流 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 优化方案</legend>
            </fieldset>

            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理优化方案 </a>
            </div>
            <fieldset class="layui-elem-field layui-field-title">
                <legend> 网站多访问端</legend>
            </fieldset>

            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理网站访问端 </a>
            </div>
            <fieldset class="layui-elem-field layui-field-title">
                <legend> 扩展菜单</legend>
            </fieldset>

            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理菜单 </a>
            </div>
            <fieldset class="layui-elem-field layui-field-title">
                <legend> 备份/恢复数据</legend>
            </fieldset>

            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 备份数据 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 恢复数据 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理备份目录 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 执行SQL语句 </a>

            </div>

        </div>
    </div>


    <div class="layui-card">
        <div class="layui-card-header"><strong>信息管理</strong></div>
        <div class="layui-card-body">


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 增加信息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理信息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 审核信息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 签发信息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 更新碎片 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 更新专题 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理评论 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 数据统计 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 排行统计 </a>

            </div>


        </div>
    </div>


    <div class="layui-card">
        <div class="layui-card-header"><strong>栏目管理</strong></div>
        <div class="layui-card-body">

            <fieldset class="layui-elem-field layui-field-title">
                <legend> 栏目管理</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理栏目 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理栏目(分页) </a>
                <a href="/" class="layui-btn layui-btn-primary"> 栏目访问排行 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 设置访问统计参数 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 栏目自定义字段 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量设置栏目属性 </a>

            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 专题管理</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理专题分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理专题 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 专题自定义字段 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 标题分类管理</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理标题分类 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 碎片管理</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理碎片分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理碎片 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> TAGS管理</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 设置TAGS参数 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理TAGS分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理TAGS </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 头条/推荐级别</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理头条级别 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理推荐级别 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 附件管理</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理附件 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 全站全文搜索</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 全站搜索设置 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理搜索数据源 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 清理搜索数据 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 自定义页面</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理预设投票
                </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理自定义页面 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 自定义列表
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理自定义列表分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理自定义列表 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 自定义JS
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理自定义JS分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理自定义JS </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 采集管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 增加采集节点 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理采集节点 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理采集节点(分页) </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> WAP管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> WAP设置 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理WAP模板 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 其他管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 统计信息数据 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 用户发布统计 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理搜索关键字 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量替换字段值 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量转移信息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 信息批量归档 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量删除信息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理预设投票 </a>
            </div>


        </div>
    </div>


    <div class="layui-card">
        <div class="layui-card-header"><strong>模板管理</strong></div>
        <div class="layui-card-body">


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 查看标签语法 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 自动生成标签 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 动态页面模板管理 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 栏目封面模板</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理封面模板分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理封面模板 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 列表模板</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理列表模板分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理列表模板 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 内容模板</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理内容模板分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理内容模板 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 标签模板</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理标签模板分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理标签模板 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 公共模板变量</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理模板变量分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理模板变量 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> JS模板</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理JS模板分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理JS模板 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 评论列表模板</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 增加评论模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理评论模板 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 公共模板</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 修改首页模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改控制面板模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改全站搜索模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改高级搜索表单模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改横向搜索JS模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改纵向搜索JS模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改相关信息模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改留言板模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改评论JS调用模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改最终下载页模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改下载地址模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改在线播放地址模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改列表分页模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改登陆状态模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改JS调用登陆模板 </a>

            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 打印模板</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 增加打印模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理打印模板 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 搜索模板</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理搜索模板分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理搜索模板 </a>
            </div>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 模板组管理 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 修改模板ID </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 自定义页面模板
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 增加自定义页面模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理自定义页面模板 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 投票模板
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 增加投票模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理投票模板 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 标签管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理标签分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理标签 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 其他管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 批量导入栏目模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量更换列表模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量替换模板字符 </a>
            </div>


        </div>
    </div>


    <div class="layui-card">
        <div class="layui-card-header"><strong>用户面板</strong></div>
        <div class="layui-card-body">

            <fieldset class="layui-elem-field layui-field-title">
                <legend> 用户管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 修改个人资料 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理用户组 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理部门 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理用户 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理登陆日志 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理操作日志 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理后台风格 </a>

            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 会员管理</legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理会员 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理会员(详细) </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量清理会员 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 会员组 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 会员内部组 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 会员访问组 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 会员管理组 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理会员字段 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理会员表单 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 会员空间管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理空间模板 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理空间留言 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理空间反馈 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 外部接口
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 外部登录接口 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 其他管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理充值类型 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理点卡 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量赠送点数 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量发送邮件 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量发送短消息 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量删除短消息 </a>

            </div>


        </div>
    </div>


    <div class="layui-card">
        <div class="layui-card-header"><strong>插件管理</strong></div>
        <div class="layui-card-body">

            <fieldset class="layui-elem-field layui-field-title">
                <legend> 广告系统
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理广告分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理广告 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 投票系统
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 增加投票 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理投票 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 友情链接管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理友情链接分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理友情链接 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 留言板管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理留言分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理留言 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量删除留言 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 信息反馈管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理反馈分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理反馈字段 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理信息反馈 </a>
            </div>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理防采集随机字符 </a>
            </div>


        </div>
    </div>


    <div class="layui-card">
        <div class="layui-card-header"><strong>其他管理</strong></div>
        <div class="layui-card-body">

            <fieldset class="layui-elem-field layui-field-title">
                <legend> 新闻模型相关
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理信息来源 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理作者 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理内容关键字 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理过滤字符 </a>

            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 下载模型相关
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理地址前缀 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 删除下载记录 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理错误报告 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 批量替换地址权限 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 播放器管理 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 商城模型相关
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理商城 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 在线支付
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 支付参数配置 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理支付接口 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理支付记录 </a>
            </div>


            <fieldset class="layui-elem-field layui-field-title">
                <legend> 图片信息管理
                </legend>
            </fieldset>


            <div class="layui-btn-container">
                <a href="/" class="layui-btn layui-btn-primary"> 管理图片信息分类 </a>
                <a href="/" class="layui-btn layui-btn-primary"> 管理图片信息 </a>
            </div>


        </div>
    </div>


</div>



    </div>


    <div id="bottom-copyright" class="layui-footer">
        <div style="float: left;">© 8kqq.com - 柠吉仓库管理系统</div>
        <div style="float: right;">
            <span>2020-2-14 10:36:39</span> |
            <span>操作用户：<?php echo \think\Session::get('user_name'); ?></span> |
            <span>版本：v1.0(20200214)</span>
        </div>
    </div>


</div>

<script src="/statics/layui/layui.js"></script>
<script>
    $ = null;

    function fold_nav(operation) {
        // alert(operation)
        var icon = $('#nav-switch').children('i'), nav = $('#main-nav'),
            content = $('#main-content'), bottomCopyright = $('#bottom-copyright');
        switch (operation) {
            case 'open':
                nav.data('switch', 1);
                content.animate({'left': 200});
                bottomCopyright.animate({'left': 200});
                nav.animate({'left': 0, opacity: 1});
                icon.removeClass('layui-icon-spread-left').addClass('layui-icon-shrink-right');
                break;
            case 'close':
                nav.data('switch', 0);
                content.animate({'left': 0});
                bottomCopyright.animate({'left': 0});
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

<script>
    function execute_event() {
        fold_nav('close');
    }
</script>


</body>
</html>