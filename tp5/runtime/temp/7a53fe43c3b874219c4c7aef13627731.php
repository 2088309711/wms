<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\php-workspace\hz.njzh/tp5/application/index\view\index\index.html";i:1575031381;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>王者荣耀合租信息采集</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/statics/css/pintuer.css">
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/pintuer.js"></script>
    <style>
        .nj-checkbox label {
            margin: 0 5px 4px 0;
            border-radius: 0;
        }

        .nj-padding-none {
            padding-bottom: 0;
        }
    </style>

</head>

<body>
<div class="layout">
    <h1 class="text-center bg-sub text-white padding-small">
        王者荣耀合租信息采集
    </h1>

    <div class="padding-left padding-right">


        <blockquote
                class="padding-small-top border-sub padding-small-bottom padding-left padding-right margin-bottom margin-top">
            <p>本工具由
                <a href="http://njzh.vip" class="text-dot" style="font-weight: bold;">柠吉租号网</a>
                提供<br>使用中遇到问题请联系客服<br>客服QQ：34<span class="text-dot" style="font-weight: bold;">(5个8)</span>922、2088309711
            </p>
        </blockquote>


        <form onsubmit="return false">
            <div class="form-group margin-top">
                <div class="label">
                    <strong>区服系统选项</strong>
                </div>
                <div class="field">
                    <div class="button-group border-sub radio">
                        <label class="button active">
                            <input name="system" value="安卓QQ" checked="checked" type="radio">安卓QQ
                        </label>

                        <label class="button">
                            <input name="system" value="苹果QQ" type="radio">苹果QQ
                        </label>

                    </div>
                </div>
            </div>


            <blockquote
                    class="padding-small-top padding-small-bottom padding-left padding-right margin-bottom">
                <p>微信大区不支持合租</p>
            </blockquote>


            <div class="form-group">
                <div class="label">
                    <strong>贵族等级</strong>
                </div>
                <div class="field">
                    <div class="button-group border-sub radio">
                        <label class="button active">
                            <input name="guizu" value="1" checked="checked" type="radio">1
                        </label>

                        <label class="button">
                            <input name="guizu" value="2" type="radio">2
                        </label>


                        <label class="button">
                            <input name="guizu" value="3" type="radio">3
                        </label>

                        <label class="button">
                            <input name="guizu" value="4" type="radio">4
                        </label>

                        <label class="button">
                            <input name="guizu" value="5" type="radio">5
                        </label>

                        <label class="button">
                            <input name="guizu" value="6" type="radio">6
                        </label>

                        <label class="button">
                            <input name="guizu" value="7" type="radio">7
                        </label>

                        <label class="button">
                            <input name="guizu" value="8" type="radio">8
                        </label>

                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="label">
                    <label for="username">
                        英雄数量</label>
                </div>
                <div class="field">
                    <input id="num1" type="number" class="input" id="username" name="username" size="30"
                           placeholder="请填写数字"/>
                </div>
            </div>


            <div class="form-group">
                <div class="label">
                    <label for="username">
                        皮肤数量</label>
                </div>
                <div class="field">
                    <input id="num2" type="number" class="input" id="username" name="username" size="30"
                           placeholder="请填写数字"/>
                </div>
            </div>


            <div class="nj-padding-none form-group">
                <div class="label">
                    <strong>限定英雄</strong>
                </div>


                <div class="nj-checkbox button-group border-sub checkbox">
                    <label class="button">
                        <input name="skin5" value="韩信" type="checkbox">韩信
                    </label>
                    <label class="button">
                        <input name="skin5" value="娜可露露" type="checkbox">娜可露露
                    </label>
                    <label class="button">
                        <input name="skin5" value="橘右京" type="checkbox">橘右京
                    </label>
                    <label class="button">
                        <input name="skin5" value="不知火舞" type="checkbox">不知火舞
                    </label>

                </div>

            </div>


            <div class="nj-padding-none form-group">
                <div class="label">
                    <strong>星传说皮肤</strong>
                </div>


                <div class="nj-checkbox button-group border-sub checkbox">
                    <label class="button">
                        <input name="skin4" value="幻海之心" type="checkbox">幻海之心
                    </label>
                    <label class="button">
                        <input name="skin4" value="金色仲夏夜" type="checkbox">金色仲夏夜
                    </label>
                    <label class="button">
                        <input name="skin4" value="幽冥火" type="checkbox">幽冥火
                    </label>
                    <label class="button">
                        <input name="skin4" value="幽冥之眼" type="checkbox">幽冥之眼
                    </label>

                </div>


            </div>


            <div class="nj-padding-none form-group">
                <div class="label">
                    <strong>荣耀水晶已兑换</strong>
                </div>


                <div class="nj-checkbox button-group border-sub checkbox">
                    <label class="button">
                        <input name="skin3" value="武则天" type="checkbox">武则天
                    </label>
                    <label class="button">
                        <input name="skin3" value="全息碎影" type="checkbox">全息碎影
                    </label>
                    <label class="button">
                        <input name="skin3" value="星空梦想" type="checkbox">星空梦想
                    </label>
                    <label class="button">
                        <input name="skin3" value="杀手不太冷" type="checkbox">杀手不太冷
                    </label>
                    <label class="button">
                        <input name="skin3" value="天鹅之梦" type="checkbox">天鹅之梦
                    </label>
                    <label class="button">
                        <input name="skin3" value="无限飓风号" type="checkbox">无限飓风号
                    </label>
                    <label class="button">
                        <input name="skin3" value="大秦宣太后" type="checkbox">大秦宣太后
                    </label>
                </div>


            </div>


            <div class="nj-padding-none form-group">
                <div class="label">
                    <strong>高端皮肤</strong>
                </div>


                <div class="nj-checkbox button-group border-sub checkbox">

                    <label class="button">
                        <input name="skin2" value="超时空战士" type="checkbox"> 超时空战士

                    </label>
                    <label class="button">
                        <input name="skin2" value="海洋之心" type="checkbox">海洋之心

                    </label>
                    <label class="button">
                        <input name="skin2" value="天魔缭乱" type="checkbox">天魔缭乱

                    </label>
                    <label class="button">
                        <input name="skin2" value="地狱火" type="checkbox">地狱火

                    </label>
                    <label class="button">
                        <input name="skin2" value="地狱之眼" type="checkbox">地狱之眼

                    </label>
                    <label class="button">
                        <input name="skin2" value="冠军飞将" type="checkbox">冠军飞将

                    </label>
                    <label class="button">
                        <input name="skin2" value="末日机甲-孙尚香" type="checkbox">末日机甲-孙尚香

                    </label>
                    <label class="button">
                        <input name="skin2" value="凤求凰" type="checkbox">凤求凰

                    </label>
                    <label class="button">
                        <input name="skin2" value="仲夏夜之梦" type="checkbox">仲夏夜之梦

                    </label>
                    <label class="button">
                        <input name="skin2" value="武陵仙君" type="checkbox">武陵仙君

                    </label>
                    <label class="button">
                        <input name="skin2" value="永曜之星" type="checkbox">永曜之星

                    </label>
                    <label class="button">
                        <input name="skin2" value="黄金射手座" type="checkbox">黄金射手座

                    </label>

                    <label class="button">
                        <input name="skin2" value="黄金狮子座" type="checkbox">黄金狮子座

                    </label>

                    <label class="button">
                        <input name="skin2" value="黄金白羊座" type="checkbox">黄金白羊座

                    </label>


                    <label class="button">
                        <input name="skin2" value="胖达荣荣" type="checkbox"> 胖达荣荣

                    </label>
                    <label class="button">
                        <input name="skin2" value="白虎志" type="checkbox"> 白虎志

                    </label>

                    <label class="button">
                        <input name="skin2" value="云霓雀翎" type="checkbox">云霓雀翎

                    </label>
                    <label class="button">
                        <input name="skin2" value="久胜战神" type="checkbox"> 久胜战神

                    </label>
                    <label class="button">
                        <input name="skin2" value="冰锋战神" type="checkbox">冰锋战神

                    </label>
                    <label class="button">
                        <input name="skin2" value="青龙志" type="checkbox">青龙志

                    </label>
                    <label class="button">
                        <input name="skin2" value="朱雀志" type="checkbox">朱雀志

                    </label>
                    <label class="button">
                        <input name="skin2" value="玄武志" type="checkbox">玄武志

                    </label>
                    <label class="button">
                        <input name="skin2" value="瑞麟志" type="checkbox"> 瑞麟志

                    </label>


                </div>

            </div>


            <div class="form-group">
                <div class="label">
                    <strong>中端皮肤</strong>
                </div>


                <div class="nj-checkbox button-group border-sub checkbox">
                    <label class="button">
                        <input name="skin" value="紫霞仙子" type="checkbox">紫霞仙子

                    </label>
                    <label class="button">
                        <input name="skin" value="鬼剑武藏" type="checkbox">鬼剑武藏

                    </label>
                    <label class="button">
                        <input name="skin" value="电玩小子" type="checkbox">电玩小子

                    </label>
                    <label class="button">
                        <input name="skin" value="苍穹之光" type="checkbox"> 苍穹之光

                    </label>
                    <label class="button">
                        <input name="skin" value="暗夜猫娘" type="checkbox">暗夜猫娘

                    </label>
                    <label class="button">
                        <input name="skin" value="绅士熊喵" type="checkbox">绅士熊喵

                    </label>
                    <label class="button">
                        <input name="skin" value="暗夜贵公子" type="checkbox">暗夜贵公子

                    </label>
                    <label class="button">
                        <input name="skin" value="摇滚巨星" type="checkbox">摇滚巨星

                    </label>
                    <label class="button">
                        <input name="skin" value="龙骑士" type="checkbox">龙骑士

                    </label>
                    <label class="button">
                        <input name="skin" value="皇家上将" type="checkbox">皇家上将

                    </label>
                    <label class="button">
                        <input name="skin" value="偶像歌手" type="checkbox">偶像歌手

                    </label>
                    <label class="button">
                        <input name="skin" value="王者之锤" type="checkbox">王者之锤

                    </label>
                    <label class="button">
                        <input name="skin" value="圣诞恋歌" type="checkbox">圣诞恋歌

                    </label>
                    <label class="button">
                        <input name="skin" value="圣诞狂欢" type="checkbox">圣诞狂欢

                    </label>
                    <label class="button">
                        <input name="skin" value="蔷薇恋人" type="checkbox">蔷薇恋人

                    </label>
                    <label class="button">
                        <input name="skin" value="优雅恋人" type="checkbox">优雅恋人

                    </label>
                    <label class="button">
                        <input name="skin" value="魔术师" type="checkbox">魔术师

                    </label>
                    <label class="button">
                        <input name="skin" value="魅力维加斯" type="checkbox">魅力维加斯

                    </label>
                    <label class="button">
                        <input name="skin" value="圣诞老人" type="checkbox">圣诞老人

                    </label>
                    <label class="button">
                        <input name="skin" value="纯白花嫁" type="checkbox">纯白花嫁

                    </label>
                    <label class="button">
                        <input name="skin" value="真爱至上" type="checkbox">真爱至上

                    </label>
                    <label class="button">
                        <input name="skin" value="幽灵船长" type="checkbox">幽灵船长

                    </label>
                    <label class="button">
                        <input name="skin" value="末日机甲-吕布" type="checkbox">末日机甲-吕布

                    </label>
                    <label class="button">
                        <input name="skin" value="千年之狐" type="checkbox">千年之狐

                    </label>
                    <label class="button">
                        <input name="skin" value="魔法小厨娘" type="checkbox">魔法小厨娘

                    </label>
                    <label class="button">
                        <input name="skin" value="热情桑巴" type="checkbox">热情桑巴

                    </label>
                    <label class="button">
                        <input name="skin" value="乱世虎臣" type="checkbox">乱世虎臣

                    </label>
                    <label class="button">
                        <input name="skin" value="白龙吟" type="checkbox"> 白龙吟

                    </label>
                    <label class="button">
                        <input name="skin" value="霸王别姬-项羽" type="checkbox">霸王别姬-项羽

                    </label>
                    <label class="button">
                        <input name="skin" value="霸王别姬-虞姬" type="checkbox">霸王别姬-虞姬

                    </label>
                    <label class="button">
                        <input name="skin" value="逐梦之音" type="checkbox">逐梦之音

                    </label>
                    <label class="button">
                        <input name="skin" value="凤凰于飞" type="checkbox">凤凰于飞

                    </label>
                    <label class="button">
                        <input name="skin" value="至尊宝" type="checkbox">至尊宝

                    </label>
                    <label class="button">
                        <input name="skin" value="引擎之心" type="checkbox">引擎之心

                    </label>
                    <label class="button">
                        <input name="skin" value="水晶猎龙者" type="checkbox">水晶猎龙者

                    </label>
                    <label class="button">
                        <input name="skin" value="德古拉伯爵" type="checkbox">德古拉伯爵

                    </label>
                    <label class="button">
                        <input name="skin" value="逐梦之影" type="checkbox">逐梦之影

                    </label>
                    <label class="button">
                        <input name="skin" value="乘风破浪" type="checkbox">乘风破浪

                    </label>
                    <label class="button">
                        <input name="skin" value="缤纷独角兽" type="checkbox">缤纷独角兽

                    </label>
                    <label class="button">
                        <input name="skin" value="暗隐猎兽者" type="checkbox">暗影猎兽者

                    </label>
                    <label class="button">
                        <input name="skin" value="黄金分割率" type="checkbox">黄金分割率

                    </label>
                    <label class="button">
                        <input name="skin" value="游园惊梦" type="checkbox">游园惊梦

                    </label>
                    <label class="button">
                        <input name="skin" value="逐梦之星" type="checkbox">逐梦之星

                    </label>
                    <label class="button">
                        <input name="skin" value="心灵战警" type="checkbox">心灵战警

                    </label>
                    <label class="button">
                        <input name="skin" value="冰冠公主" type="checkbox">冰冠公主

                    </label>
                    <label class="button">
                        <input name="skin" value="心灵骇客" type="checkbox">心灵骇客

                    </label>
                    <label class="button">
                        <input name="skin" value="辉光之辰" type="checkbox">辉光之辰

                    </label>
                    <label class="button">
                        <input name="skin" value="云端筑梦师" type="checkbox">云端筑梦师

                    </label>
                    <label class="button">
                        <input name="skin" value="神奇女侠" type="checkbox">神奇女侠

                    </label>
                    <label class="button">
                        <input name="skin" value="青春决赛季" type="checkbox">青春决赛季

                    </label>
                    <label class="button">
                        <input name="skin" value="特工魅影" type="checkbox"> 特工魅影

                    </label>
                    <label class="button">
                        <input name="skin" value="曙光守护者" type="checkbox">曙光守护者

                    </label>
                    <label class="button">
                        <input name="skin" value="舞动绿茵" type="checkbox">舞动绿茵

                    </label>
                    <label class="button">
                        <input name="skin" value="梅西" type="checkbox">梅西

                    </label>
                    <label class="button">
                        <input name="skin" value="逐梦之翼" type="checkbox">逐梦之翼

                    </label>
                    <label class="button">
                        <input name="skin" value="天才门将" type="checkbox"> 天才门将

                    </label>
                    <label class="button">
                        <input name="skin" value="蜜橘之夏" type="checkbox">蜜橘之夏

                    </label>
                    <label class="button">
                        <input name="skin" value="逐浪之夏" type="checkbox">逐浪之夏

                    </label>
                    <label class="button">
                        <input name="skin" value="功夫厨神" type="checkbox">功夫厨神

                    </label>
                    <label class="button">
                        <input name="skin" value="星夜王子" type="checkbox">星夜王子

                    </label>
                    <label class="button">
                        <input name="skin" value="节奏热浪" type="checkbox">节奏热浪

                    </label>
                    <label class="button">
                        <input name="skin" value="遇见飞天" type="checkbox">遇见飞天

                    </label>
                    <label class="button">
                        <input name="skin" value="逐梦之光" type="checkbox">逐梦之光

                    </label>
                    <label class="button">
                        <input name="skin" value="奇迹圣诞" type="checkbox">奇迹圣诞

                    </label>
                    <label class="button">
                        <input name="skin" value="白昼王子" type="checkbox">白昼王子

                    </label>
                    <label class="button">
                        <input name="skin" value="猫狗日记-大乔" type="checkbox">猫狗日记-大乔

                    </label>
                    <label class="button">
                        <input name="skin" value="猫狗日记-孙策" type="checkbox">猫狗日记-孙策

                    </label>
                    <label class="button">
                        <input name="skin" value="冰霜恋舞曲" type="checkbox">冰霜恋舞曲
                    </label>
                    <label class="button">
                        <input name="skin" value="一生所爱" type="checkbox">一生所爱
                    </label>
                    <label class="button">
                        <input name="skin" value="大圣娶亲" type="checkbox">大圣娶亲

                    </label>
                    <label class="button">
                        <input name="skin" value="蓝屏警告" type="checkbox">蓝屏警告

                    </label>
                    <label class="button">
                        <input name="skin" value="箭羽风息" type="checkbox">箭羽风息

                    </label>
                    <label class="button">
                        <input name="skin" value="天狼狩猎者" type="checkbox"> 天狼狩猎者

                    </label>
                    <label class="button">
                        <input name="skin" value="狮舞东方" type="checkbox"> 狮舞东方

                    </label>
                    <label class="button">
                        <input name="skin" value="街头霸王" type="checkbox"> 街头霸王

                    </label>
                    <label class="button">
                        <input name="skin" value="死神来了" type="checkbox">死神来了

                    </label>


                    <label class="button">
                        <input name="skin" value="无限星赏官" type="checkbox">无限星赏官

                    </label>


                    <label class="button">
                        <input name="skin" value="鲨炮海盗猫" type="checkbox">鲨炮海盗猫

                    </label>


                    <label class="button">
                        <input name="skin" value="朔望之晖" type="checkbox">朔望之晖

                    </label>


                    <label class="button">
                        <input name="skin" value="猎兽之王" type="checkbox">猎兽之王

                    </label>


                    <label class="button">
                        <input name="skin" value="守护之力" type="checkbox">守护之力

                    </label>


                    <label class="button">
                        <input name="skin" value="坚韧之力" type="checkbox">坚韧之力

                    </label>


                    <label class="button">
                        <input name="skin" value="华丽摇滚" type="checkbox">华丽摇滚

                    </label>


                    <label class="button">
                        <input name="skin" value="掌控之力" type="checkbox">掌控之力

                    </label>


                    <label class="button">
                        <input name="skin" value="敏锐之力" type="checkbox">敏锐之力

                    </label>


                    <label class="button">
                        <input name="skin" value="沉稳之力" type="checkbox">沉稳之力

                    </label>


                    <label class="button">
                        <input name="skin" value="霸王丸" type="checkbox">霸王丸

                    </label>


                    <label class="button">
                        <input name="skin" value="龙腾万里" type="checkbox">龙腾万里

                    </label>


                    <label class="button">
                        <input name="skin" value="死亡摇滚" type="checkbox">死亡摇滚

                    </label>


                    <label class="button">
                        <input name="skin" value="阴阳师" type="checkbox">阴阳师

                    </label>


                    <label class="button">
                        <input name="skin" value="万象初新" type="checkbox">万象初新

                    </label>


                    <label class="button">
                        <input name="skin" value="万事如意" type="checkbox">万事如意

                    </label>


                    <label class="button">
                        <input name="skin" value="花好人间" type="checkbox">花好人间

                    </label>

                    <label class="button">
                        <input name="skin" value="五福同心" type="checkbox">五福同心

                    </label>


                    <label class="button">
                        <input name="skin" value="兔女郎" type="checkbox">兔女郎

                    </label>


                    <label class="button">
                        <input name="skin" value="美猴王" type="checkbox">美猴王

                    </label>


                    <label class="button">
                        <input name="skin" value="海滩派对" type="checkbox">海滩派对

                    </label>


                    <label class="button">
                        <input name="skin" value="东方不败" type="checkbox">东方不败

                    </label>


                </div>

            </div>

            <div class="form-button">
                <button id="submit" class="button button-big bg-sub button-block margin-bottom" type="button">
                    生成结果
                </button>
            </div>


            <div class="form-group">
                <div class="label">
                    <label for="username">
                        请复制以下内容发送给客服</label>
                </div>

                <blockquote
                        class="border-dot padding-small-top padding-small-bottom padding-left padding-right margin-bottom">
                    <p>请勿截图发送，否则无效</p>
                </blockquote>

                <div class="field">
                    <textarea id="out" rows="20" class="input" placeholder="点击上方生成结果按钮出现结果"></textarea>
                </div>
            </div>

        </form>

    </div>

</div>


<script>

    $(function () {
        //表单提交

        $("#submit").click(function () {

            var text = "";

            var gui_zu = $('input[name="guizu"]:checked').val();

            text += $('input[name="system"]:checked').val() + "，贵族" + gui_zu + "(v" + gui_zu + ")，";

            //英雄
            var ying_xiong = $("#num1").val();
            text += ying_xiong != '' ? ying_xiong + "个英雄，" : '';

            //皮肤
            var pi_fu = $("#num2").val();
            text += pi_fu != '' ? pi_fu + "个皮肤" : '';


            //分割线
            var fen_ge = '\n----------------------------------------------';


            //获取荣耀水晶已兑换
            var rong_yao_shui_jing = $('input[name="skin3"]:checked');
            if (rong_yao_shui_jing.length > 0) {
                text += fen_ge + "\n【荣耀水晶已兑换】：";
                rong_yao_shui_jing.each(function () {
                    text += $(this).val() + "、";
                });
            }


            //获取星传说皮肤
            var xin_chuan_shuo = $('input[name="skin4"]:checked');
            if (xin_chuan_shuo.length > 0) {
                text += fen_ge + "\n【星传说皮肤】：";
                xin_chuan_shuo.each(function () {
                    text += $(this).val() + "、";
                });
            }


            //获取高端皮肤
            var gao_duan = $('input[name="skin2"]:checked');
            if (gao_duan.length > 0) {
                text += fen_ge + "\n【高端皮肤】：";
                gao_duan.each(function () {
                    text += $(this).val() + "、";
                });
            }


            //获取中端皮肤
            var zhong_duan = $('input[name="skin"]:checked');
            if (zhong_duan.length > 0) {
                text += fen_ge + "\n【中端皮肤】：";
                zhong_duan.each(function () {
                    text += $(this).val() + "、";
                });
            }


            //获取限定英雄
            var xian_ding = $('input[name="skin5"]:checked');
            if (xian_ding.length > 0) {
                text += fen_ge + "\n【限定英雄】：";
                xian_ding.each(function () {
                    text += $(this).val() + "、";
                });
            }


            text += fen_ge + "\n【责任编辑】：小颖";
            text += "\n【更新时间】：" + getDate();

            //最后输出
            $("#out").val(text);

        });


    });


    function getDate() {

        var myDate = new Date();

        //获取当前年
        var year = myDate.getFullYear();

        //获取当前月
        var month = myDate.getMonth() + 1;

        //获取当前日
        var date = myDate.getDate();
        var h = myDate.getHours(); //获取当前小时数(0-23)
        var m = myDate.getMinutes(); //获取当前分钟数(0-59)
        var s = myDate.getSeconds();

        //获取当前时间

        return year + '-' + conver(month) + "-" + conver(date) + " " + conver(h) + ':' + conver(m) + ":" + conver(s);

    }

    //日期时间处理
    function conver(s) {
        return s < 10 ? '0' + s : s;
    }

</script>

</body>

</html> 
