<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\php-workspace\MyCms/tp5/application/admin\view\system\system_param_set.html";i:1577377998;s:59:"D:\php-workspace\MyCms\tp5\application\admin\view\base.html";i:1577428634;s:65:"D:\php-workspace\MyCms\tp5\application\admin\view\nav_system.html";i:1577263659;}*/ ?>
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

    
<style>
    .layui-form-label {
        width: 200px !important;
    }

    .layui-input-block {
        margin-left: 230px !important;
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
                <li class="layui-nav-item">
    <a class="" href="javascript:;">系统设置</a>
    <dl class="layui-nav-child">

        <dd><a href="/index.php/system_param_set">系统参数设置</a></dd>
        <dd><a href="/index.php/pseudo_static_param_set">伪静态参数设置</a></dd>
        <dd><a href="/index.php/dynamic_page_cache_set">动态页缓存设置</a></dd>
        <dd><a href="/index.php/digg_top_set">DIGG顶设置</a></dd>
        <dd><a href="/index.php/extended_variables">扩展变量</a></dd>
        <dd><a href="/index.php/security_param_config">安全参数配置</a></dd>
        <dd><a href="/index.php/website_firewall">网站防火墙</a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">数据更新</a>
    <dl class="layui-nav-child">


        <dd><a href="/index.php/data_update_center">数据更新中心</a></dd>
        <dd><a href="/index.php/update_info_page_address">更新信息页地址</a></dd>
        <dd><a href="/index.php/update_dynamic_page_cache">更新动态页缓存</a></dd>
        <dd><a href="/index.php/data_collation">数据整理</a></dd>
        <dd><a href="/index.php/remote_publish">远程发布</a>
        </dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">数据表与系统模型</a>
    <dl class="layui-nav-child">

        <dd><a href="/index.php/new_data_table">新建数据表</a></dd>
        <dd><a href="/index.php/management_data_sheet">管理数据表</a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">计划任务</a>
    <dl class="layui-nav-child">


        <dd><a href="/index.php/manage_refresh_tasks">管理刷新任务</a></dd>


        <dd><a href="/index.php/manage_scheduled_tasks">管理计划任务</a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">工作流</a>
    <dl class="layui-nav-child">

        <dd><a href="/index.php/add_workflow">增加工作流</a></dd>
        <dd><a href="/index.php/manage_workflow">管理工作流</a></dd>


    </dl>
</li>


<li class="layui-nav-item"><a href="/index.php/management_optimization_plan">管理优化方案</a></li>


<li class="layui-nav-item"><a href="/index.php/manage_site_visitors">管理网站访问端</a></li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">扩展菜单</a>
    <dl class="layui-nav-child">

        <dd><a href="/index.php/management_menu">管理菜单</a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">备份与恢复数据</a>
    <dl class="layui-nav-child">


        <dd><a href="/index.php/backup_data">备份数据</a></dd>
        <dd><a href="/index.php/restore_data">恢复数据</a></dd>
        <dd><a href="/index.php/manage_backup_directories">管理备份目录</a></dd>


        <dd><a href="/index.php/execute_sql_statement">执行SQL语句</a></dd>


    </dl>
</li>


            </ul>
        </div>
    </div>

    
<div id="main-content" class="layui-body" style="bottom:0;">


    <div class="layui-fluid">

        <div class="layui-row" style="margin-top: 15px;">

            <strong style="">位置：<a href="/index.php/system_param_set">系统参数设置</a></strong>

        </div>


        <div class="layui-tab layui-tab-brief" style="margin: 0 0 5px;" lay-filter="system">
            <ul class="layui-tab-title">
                <li class="layui-this" lay-id="1">基本属性</li>
                <li lay-id="2">用户设置</li>
                <li lay-id="3">文件设置</li>
                <li lay-id="4">JS设置</li>
                <li lay-id="5">分组生成</li>
                <li lay-id="6">搜索设置</li>
                <li lay-id="7">信息设置</li>
                <li lay-id="8">FTP/Email</li>
                <li lay-id="9">模型设置</li>
                <li lay-id="10">图片设置</li>
            </ul>


            <div class="layui-tab-content" style="padding: 20px 0;">


                <div class="layui-tab-item layui-show">


                    <form class="layui-form" action="">


                        <fieldset class="layui-elem-field">
                            <legend>基本信息设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">网站地址</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入网站地址"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">附件地址</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入附件地址"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">管理员邮箱</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入邮箱"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">网站关键字</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入关键字"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页文件扩展名</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入扩展名"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页链接加文件名</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="add" value="0" title="增加">
                                        <input type="radio" name="add" value="1" title="不增加" checked>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">前台PHP超时时间设置</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入超时时间"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">后台PHP超时时间设置</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入超时时间"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台所有动态页面</label>
                                    <div class="layui-input-inline">
                                        <input type="radio" name="dynamic" value="0" title="是">
                                        <input type="radio" name="dynamic" value="1" title="否" checked>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">如果开启，前台所有动态文件都无法使用，但性能和安全性最高</div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">关闭动态页面提示内容</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入提示内容" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">


                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                        <input type="checkbox" name="like[dai]" title="商城">
                                        <input type="checkbox" name="like[dai]" title="在线支付">
                                        <input type="checkbox" name="like[dai]" title="RSS">
                                        <input type="checkbox" name="like[dai]" title="搜索">
                                        <input type="checkbox" name="like[dai]" title="全站搜索">
                                        <input type="checkbox" name="like[dai]" title="错误报告">
                                        <input type="checkbox" name="like[dai]" title="会员">
                                        <input type="checkbox" name="like[dai]" title="评论">
                                        <input type="checkbox" name="like[dai]" title="打印">
                                        <input type="checkbox" name="like[dai]" title="外部登录">
                                        <input type="checkbox" name="like[dai]" title="结合项">
                                        <input type="checkbox" name="like[dai]" title="留言板">
                                        <input type="checkbox" name="like[dai]" title="反馈">
                                        <input type="checkbox" name="like[dai]" title="会员列表">

                                    </div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">不开启操作的时间点</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[0]" title="0点">
                                        <input type="checkbox" name="like[1]" title="1点">
                                        <input type="checkbox" name="like[2]" title="2点">
                                        <input type="checkbox" name="like[3]" title="3点">
                                        <input type="checkbox" name="like[4]" title="4点">
                                        <input type="checkbox" name="like[5]" title="5点">
                                        <input type="checkbox" name="like[6]" title="6点">
                                        <input type="checkbox" name="like[7]" title="7点">
                                        <input type="checkbox" name="like[8]" title="8点">
                                        <input type="checkbox" name="like[9]" title="9点">
                                        <input type="checkbox" name="like[10]" title="10点">
                                        <input type="checkbox" name="like[11]" title="11点">
                                        <input type="checkbox" name="like[12]" title="12点">
                                        <input type="checkbox" name="like[13]" title="13点">
                                        <input type="checkbox" name="like[14]" title="14点">
                                        <input type="checkbox" name="like[15]" title="15点">
                                        <input type="checkbox" name="like[16]" title="16点">
                                        <input type="checkbox" name="like[17]" title="17点">
                                        <input type="checkbox" name="like[18]" title="18点">
                                        <input type="checkbox" name="like[19]" title="19点">
                                        <input type="checkbox" name="like[20]" title="20点">
                                        <input type="checkbox" name="like[21]" title="21点">
                                        <input type="checkbox" name="like[22]" title="22点">
                                        <input type="checkbox" name="like[23]" title="23点">

                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">限定操作时间的操作</label>
                                    <div class="layui-input-block">


                                        <input type="checkbox" name="like[write]" title="注册会员">
                                        <input type="checkbox" name="like[read]" title="投稿" checked>
                                        <input type="checkbox" name="like[dai]" title="评论">
                                        <input type="checkbox" name="like[dai]" title="留言板">
                                    </div>
                                </div>

                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">远程保存忽略地址</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入远程保存忽略地址"
                                                  class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">前台允许提交的来源地址</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入前台允许提交的来源地址"
                                                  class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">验证码字符组成</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">

                                            <option value="0">数字</option>
                                            <option value="1">字母</option>
                                            <option value="1">汉字</option>
                                            <option value="2">数字+字母</option>
                                            <option value="2">数字+汉字</option>
                                            <option value="2">字母+汉字</option>
                                            <option value="2">数字+字母+汉字</option>

                                        </select>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">后台验证码过期时间</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入过期时间"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">后台验证码加密字符串</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入加密字符串"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">前台验证码过期时间</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入过期时间"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">前台验证码加密字符串</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入加密字符串"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">验证码背景色</label>
                                    <div class="layui-input-inline">
                                        <input type="text" value="" placeholder="点击右边方框选择颜色" class="layui-input"
                                               id="test-form-input">
                                    </div>
                                    <div class="layui-inline" style="left: -11px;">
                                        <div id="test-form"></div>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                    </form>


                </div>
                <div class="layui-tab-item">


                    <form class="layui-form" action="">


                        <fieldset class="layui-elem-field">
                            <legend>后台设置</legend>
                            <div class="layui-field-box">

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>
                            </div>
                        </fieldset>


                        <fieldset class="layui-elem-field">
                            <legend>前台设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">


                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>


                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态">
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                            </div>
                        </fieldset>


                        <fieldset class="layui-elem-field">
                            <legend>实名设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">


                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>


                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                            </div>
                        </fieldset>


                        <fieldset class="layui-elem-field">
                            <legend>访问控制设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                        <fieldset class="layui-elem-field">
                            <legend>提交控制设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">


                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>


                                    </div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                    </form>


                </div>
                <div class="layui-tab-item">


                    <form class="layui-form" action="">


                        <fieldset class="layui-elem-field">
                            <legend>文件设置</legend>
                            <div class="layui-field-box">

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                    </div>
                                </div>

                            </div>
                        </fieldset>


                        <fieldset class="layui-elem-field">
                            <legend>备份设置</legend>
                            <div class="layui-field-box">

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                    </form>


                </div>
                <div class="layui-tab-item">


                    <form class="layui-form" action="">


                        <fieldset class="layui-elem-field">
                            <legend>信息排行设置(JS)</legend>
                            <div class="layui-field-box">

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                    </form>


                </div>
                <div class="layui-tab-item">


                    <form class="layui-form" action="">


                        <fieldset class="layui-elem-field">
                            <legend>分组生成设置（依服务器配置设置大小）</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                    </form>


                </div>
                <div class="layui-tab-item">


                    <form class="layui-form" action="">


                        <fieldset class="layui-elem-field">
                            <legend>搜索设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                    </form>


                </div>
                <div class="layui-tab-item">


                    <form class="layui-form" action="">


                        <fieldset class="layui-elem-field">
                            <legend>信息设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                    </div>
                                </div>

                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                    </div>
                                </div>

                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                    </form>


                </div>
                <div class="layui-tab-item">


                    <form class="layui-form" action="">


                        <fieldset class="layui-elem-field">
                            <legend>发送邮件设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                            </div>
                        </fieldset>


                        <fieldset class="layui-elem-field">
                            <legend>FTP设置(远程发布 / PHP运行于安全模式等情况下需设置以下选项)</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">传输协议</label>
                                    <div class="layui-input-inline">
                                        <select name="city" lay-verify="required">
                                            <option value="0">系统自动选择</option>
                                            <option value="1">全站http://</option>
                                            <option value="1">全站https://</option>
                                            <option value="1">后台https，前台http</option>
                                            <option value="1">后台http，前台https</option>
                                        </select>
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">一般默认即可，使用https需要服务器支持</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                    </form>


                </div>
                <div class="layui-tab-item">


                    <form class="layui-form" action="">


                        <fieldset class="layui-elem-field">
                            <legend>信息投稿屏蔽设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                        <fieldset class="layui-elem-field">
                            <legend>新闻/下载/电影/商城等模型设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">关闭前台模块相关功能</label>
                                    <div class="layui-input-block">
                                        <input type="checkbox" name="like[write]" title="下载">
                                        <input type="checkbox" name="like[read]" title="电影" checked>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                        <fieldset class="layui-elem-field">
                            <legend>信息半角/全角转换设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">网站简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="desc" placeholder="请输入简介" class="layui-textarea"></textarea>
                                    </div>
                                </div>


                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>


                            </div>
                        </fieldset>

                    </form>


                </div>
                <div class="layui-tab-item">


                    <form class="layui-form" action="">


                        <fieldset class="layui-elem-field">
                            <legend>图片缩略图设置</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>

                            </div>
                        </fieldset>


                        <fieldset class="layui-elem-field">
                            <legend>图片水印设置(不想用图片水印，请留空)</legend>
                            <div class="layui-field-box">


                                <div class="layui-form-item">
                                    <label class="layui-form-label">首页模式</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="mode" value="0" title="静态" checked>
                                        <input type="radio" name="mode" value="1" title="动态"></div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <label class="layui-form-label">站点名称</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="title" required lay-verify="required"
                                               placeholder="请输入站点名称" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">辅助文字</div>
                                </div>


                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>


                            </div>
                        </fieldset>


                    </form>


                </div>


            </div>
        </div>

    </div>


</div>


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

<script>
    //Demo
    layui.use(['form', 'colorpicker', 'element'], function () {
        var form = layui.form, $ = layui.$
            , colorpicker = layui.colorpicker, element = layui.element;

        //监听提交
        form.on('submit(formDemo)', function (data) {
            layer.msg(JSON.stringify(data.field));
            return false;
        });

        //表单赋值
        colorpicker.render({
            elem: '#test-form'
            , color: '#1c97f5'
            , done: function (color) {
                $('#test-form-input').val(color);
            }
        });

        element.tabChange('system', location.hash.replace(/^#system=/, ''));
        element.on('tab(system)', function () {
            location.hash = 'system=' + $(this).attr('lay-id');
        });
    });
</script>

</body>
</html>