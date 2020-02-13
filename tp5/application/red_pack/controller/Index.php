<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/26 0026
 * Time: 11:50
 */

namespace app\red_pack\controller;

use app\red_pack\model\Enewsclass;
use think\Controller;
use think\Request;
use think\Session;

class Index extends Controller
{

    private $password = '541641316';


    function __construct(Request $request = null)
    {
        parent::__construct($request);

        if (!Session::has('login', 'login')) {//没有登录标志

            $intercept = true;//是否拦截

            //特殊放行
            $request = Request::instance();
            $page = $request->method() . $request->module() . $request->controller() . $request->action();

//            halt($page);

            $release = [//放行页面数组
                'GETred_packIndexlogin',
                'POSTred_packIndexlogin',
                'GETred_packIndexindex',
                'POSTred_packIndexindex',
            ];

            foreach ($release as $value) {
                if ($page == $value) {
                    $intercept = false;//取消拦截
                    break;
                }
            }


            if ($intercept) {//拦截，前往登录
                $this->redirect('/index.php/login');
            }
        }

    }

    public function index()
    {


        if (request()->isPost()) {

            if (!input('?post.phone')) {
                $this->error('参数错误');
            }

            $data = input();

            $result = $this->validate($data, 'RedPack.ck_phone');
            if (true !== $result) {
                // 验证失败
                $this->error($result);
            }

            //查询
            $rpl = Enewsclass::all(['phone' => $data['phone']]);


            if (count($rpl) == 0) {
                $this->error('没有查询到相关数据~');
            }

            $rpl2 = json_decode(json_encode($rpl));
            $all_num1 = 0;
            foreach ($rpl as $key => $redPack) {
                $redPack->s_date = time_to_str($redPack->s_date);
                $redPack->e_date = time_to_str($redPack->e_date);
                $all_num1 += $redPack->num;
            }

            $this->assign('rpl', $rpl);
            $this->assign('all_num1', $all_num1);

            //总览结束

            /*
             * 每日明细
             * 将一个红包拆分365份的数组 ['字符串日期','拆分后的金额']
             * 将每个数组以'字符串日期'合并
             * 排序
             */

            //将一个红包拆分365份的数组 ['字符串日期','拆分后的金额']，一天时间戳 86400
            $arp = [];//存放所有红包的数组
            foreach ($rpl2 as $key => $redPack) {
                $arr = [];
                $num = $redPack->num / 365;
                for ($i = 0; $i < 365; $i++) {
                    $arr[] = ['date' => time_to_str($redPack->s_date), 'num' => $num];
                    $redPack->s_date += 86400;
                }

                $arp[] = $arr;
            }


//        将每个数组以'字符串日期'合并


            $arp_len = count($arp);
            if ($arp_len > 1) {


                for ($i = 1; $i < $arp_len; $i++) {

                    foreach ($arp[$i] as $key => $item) {


                        $flag = false;//标记是否在第一个下标中发现
                        foreach ($arp[0] as $key2 => $item2) {
                            if ($item['date'] == $item2['date']) {
                                $flag = true;
                                $arp[0][$key2]['num'] += $item['num'];
                            }

                        }
                        if (!$flag) {//第一个数组中不存在
                            //加入第一个数组
                            $arp[0][] = $item;
                        }

                    }

                }

            }


//        strtotime()

            $arp = $arp[0];

            foreach ($arp as $key => $item) {
                $arp[$key]['date'] = strtotime($item['date']);
            }

            //冒泡排序
            $arp_len = count($arp);
            // 第一层可以理解为从数组中键为0开始循环到最后一个
            for ($i = 0; $i < $arp_len - 1; $i++) {
                // 第二层为从$i+1的地方循环到数组最后
                for ($j = $i + 1; $j < $arp_len; $j++) {
                    // 比较数组中两个相邻值的大小
                    if ($arp[$i]['date'] > $arp[$j]['date']) {
                        $temp = $arp[$i];
                        $arp[$i] = $arp[$j];
                        $arp[$j] = $temp;
                    }
                }
            }

            $date = date("Y-m-d");
            $all_num2 = 0;
            foreach ($arp as $key => $item) {
                $arp[$key]['id'] = $key + 1;
                $arp[$key]['date'] = time_to_str($item['date']);
                $arp[$key]['is_today'] = $arp[$key]['date'] == $date;
                $arp[$key]['num'] = intval2($arp[$key]['num']);
                $all_num2 += $arp[$key]['num'];
            }

            $arp[$arp_len - 1]['num'] += intval2($all_num1 - $all_num2);

            $this->assign('arp', $arp);


            return $this->fetch('show');

        } else {

            return $this->fetch();
        }
    }


    public function login()
    {

        if (request()->isPost()) {
            $data = input('post.');

            //验证口令
            if ($data['password'] == $this->password) {
                Session::set('login', '1', 'login');
                $this->redirect('/index.php/add');
            } else {
                $this->error('口令错误');
            }

        } else {
            return $this->fetch();
        }
    }


    public function add()
    {


        if (request()->isPost()) {
            $data = input('post.');

            //保存数据
            $rp = new Enewsclass();
            if ($rp->add($data)) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        } else {
            return $this->fetch();
        }
    }


    public function update()
    {
        if (request()->isPost()) {
            $data = input('post.');

            //验证数据
            $result = $this->validate($data, 'RedPack.update');
            if (true !== $result) {
                $this->error($result);
            }


            //修改
            $rp = new Enewsclass();
            if ($rp->_update($data)) {
                $this->success('更新成功');
            } else {
                $this->error('更新失败');
            }

        } else {

            $data = input();

            //验证数据
            $result = $this->validate($data, 'RedPack.ck_id');
            if (true !== $result) {
                $this->error($result);
            }

            $rp = Enewsclass::get($data['id']);

            $this->assign('rp', $rp);

            return $this->fetch();
        }
    }


    public function delete()
    {
        if (request()->isPost()) {
            $data = input('post.');

            //验证数据
            $result = $this->validate($data, 'RedPack.ck_id');
            if (true !== $result) {
                $this->error($result);
            }


            //软删除
            if (Enewsclass::destroy($data['id'])) {
                $this->success('删除成功', '/index.php/query');
            } else {
                $this->error('删除失败');
            }

        } else {

            $data = input();

            //验证数据
            $result = $this->validate($data, 'RedPack.ck_id');
            if (true !== $result) {
                $this->error($result);
            }

            $rp = Enewsclass::get($data['id']);

            $this->assign('rp', $rp);

            return $this->fetch();
        }
    }

}