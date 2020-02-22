<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:52
 */

namespace app\user\controller;


use app\user\model\Itemclassify;
use app\user\model\Measureunit;
use app\user\model\Product;
use think\Controller;

class Quality extends Filter
{

    public function index()
    {
        return $this->fetch();
    }


    private function translateDataToTree($data, $parentNode = 'root')
    {
        $tree = [];
        $temp = null;

        foreach ($data as $item) {
            if ($item['parentNode'] == $parentNode) {
                $obj = $item;
                $temp = $this->translateDataToTree($data, $item['id']);
                if (count($temp) > 0) {
                    $obj['children'] = $temp;
                }
                $tree[] = $obj;
            }
        }
        return $tree;
    }


    public function sortManagement()
    {
        if (request()->isAjax()) {


            $itemclassify = Itemclassify::all(['user' => $this->getUserName()]);


            $nodeArr = [];
            foreach ($itemclassify as $item) {
                $nodeArr[] = [
                    'title' => $item->name,
                    'id' => $item->node,
                    'parentNode' => $item->parentNode,
                ];
            }


            $tree = $this->translateDataToTree($nodeArr);

            return [['title' => '顶级类别', 'id' => 'root', 'children' => $tree]];
        } else {
            return $this->fetch();
        }
    }

    public function addType()
    {

        $data = input();
        $itemclassify = new Itemclassify();
        $itemclassify->name = $data['name'];
        $itemclassify->parentNode = $data['parentNode'];
        $itemclassify->node = $data['node'];
        $itemclassify->user = $this->getUserName();


        if ($itemclassify->save()) {
            $this->success('添加成功');
        } else {
            $this->error('添加失败');
        }


    }

    public function updateType()
    {
        $data = input();


        if ($data['node'] == 'root') {
            $this->error('顶级类别不可修改');
        }

        $itemclassify = new Itemclassify();

        if ($itemclassify->save(['name' => $data['name']], ['node' => $data['node']])) {
            $this->success('修改成功');
        } else {
            $this->error('修改失败');
        }
    }

    public function delType()
    {
        $data = input();


        if ($data['node'] == 'root') {
            $this->error('顶级类别不可删除');
        }


        if (Itemclassify::destroy(['node' => $data['node']])) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }


    public function qualityManagement()
    {
        if (request()->isAjax()) {


            $employee = Product::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Product::count(),
                "data" => $employee
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }


    public function addQuality()
    {
        if (request()->isPost()) {

            $data = input();


            $w = new Product;
            $w->name = $data['name'];


            $w->type = $data['type'];
            $w->encode = $data['encode'];
            $w->barcode = $data['barcode'];
            $w->size = $data['size'];
            $w->unit = $data['unit'];
            $w->upperlimit = $data['upperlimit'];
            $w->lowerlimit = $data['lowerlimit'];
            $w->inprice = $data['inprice'];
            $w->outprice = $data['outprice'];
            $w->tupian = $data['tupian'];
            $w->abstract = $data['abstract'];
            $w->remark = $data['remark'];


            $w->user = $this->getUserName();
            if ($w->save()) {
                $this->redirect('/quality_management');
            } else {
                $this->error('添加失败');
            }

        } else {

            return $this->fetch();
        }

    }

    public function unitManagement()
    {
        if (request()->isAjax()) {


            $employee = Measureunit::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Measureunit::count(),
                "data" => $employee
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }


    public function addMeasureunit()
    {

        if (request()->isPost()) {

            $data = input();

            $w = new Measureunit;
            $w->name = $data['name'];
            $w->remark = $data['remark'];

            $w->user = $this->getUserName();
            if ($w->save()) {
                $this->redirect('/unit_management');
            } else {
                $this->error('添加失败');
            }

        } else {

            return $this->fetch();
        }


    }


}