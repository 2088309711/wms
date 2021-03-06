<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


use think\Route;


Route::get([
    '/' => 'index/index/index',
    'nav' => 'index/index/nav',
    'download' => 'index/index/download',
    'loader_help' => 'index/index/loaderHelp',
    'video_play/:id' => 'index/index/videoPlay',
    'download_loader' => 'index/index/downloadLoader',
    'add' => 'red_pack/index/add',
    'query' => 'red_pack/index/index',

    'delete/:id' => 'red_pack/index/delete',
    'update/:id' => 'red_pack/index/update',

//    仓库
    'storeroom' => 'user/Storeroom/index',


    'in_out_storage/:func/:step/:id/:field/:value' => 'user/Storeroom/inOutStorage',
    'in_out_storage/:func/:step/:code' => 'user/Storeroom/inOutStorage',
    'in_out_storage/:func/:step' => 'user/Storeroom/inOutStorage',


//    'in_storage/:step/:id/:field/:value' => 'user/Storeroom/inStorage',
//    'in_storage/:step/:code' => 'user/Storeroom/inStorage',
//    'in_storage/:step' => 'user/Storeroom/inStorage',

//    'out_storage/:step/:id/:field/:value' => 'user/Storeroom/outStorage',
//    'out_storage/:step/:code' => 'user/Storeroom/outStorage',
//    'out_storage/:step' => 'user/Storeroom/outStorage',


    'storage_record' => 'user/Storeroom/storageRecord',
    'storage_query' => 'user/Storeroom/storageQuery',

//    货品
    'Quality' => 'user/Quality/index',
    'sort_management' => 'user/Quality/sortManagement',

    'quality_management' => 'user/Quality/qualityManagement',
    'add_quality' => 'user/Quality/addQuality',
    'unit_management' => 'user/Quality/unitManagement',
    '/del_type/:node' => 'user/Quality/delType',
    '/update_type/:node/:name' => 'user/Quality/updateType',
    'add_measureunit' => 'user/Quality/addMeasureunit',

//    库存
    'repertory' => 'user/Repertory/index',
    'inventory_allocation/:step/:id/:field/:value' => 'user/Repertory/inventoryAllocation',
    'inventory_allocation/:step/:code' => 'user/Repertory/inventoryAllocation',
    'inventory_allocation/:step' => 'user/Repertory/inventoryAllocation',
    'inventory_allocation_details' => 'user/Repertory/inventoryAllocationDetails',
    'inventory_details' => 'user/Repertory/inventoryDetails',
    'inventory_query' => 'user/Repertory/inventoryQuery',
    'inventory_verification/:step/:id/:field/:value' => 'user/Repertory/inventoryVerification',
    'inventory_verification/:step/:code' => 'user/Repertory/inventoryVerification',
    'inventory_verification/:step' => 'user/Repertory/inventoryVerification',


//    基础
    'basics' => 'user/basics/index',
    'exchange_unit_management' => 'user/basics/exchangeUnitManagement',
    'add_company' => 'user/basics/addCompany',
    'sector_management' => 'user/basics/sectorManagement',
    'add_depart' => 'user/basics/addDepart',
    'staff_management' => 'user/basics/staffManagement',
    'add_staff' => 'user/basics/addStaff',
    'warehouse' => 'user/basics/warehouse',
    'add_warehouse' => 'user/basics/addWarehouse',
    'come_enter_lib_set' => 'user/basics/comeEnterLibSet',
    'add_categories' => 'user/basics/addCategories',


//    用户登录
    'login' => 'user/login/index',


    'admin_login' => 'user/Login/index',

    'user' => 'user/Index/index',
    'menu' => 'user/Index/menu',


//    系统
    'system' => 'user/System/index',
    'operational_user_management' => 'user/System/operationalUserManagement',
    'update_password' => 'user/System/updatePassword',
    'data_backup' => 'user/System/dataBackup',
    'reduction_of_data' => 'user/System/reductionOfData',
    'operating_log' => 'user/System/operatingLog',


]);

Route::post([
    'query' => 'red_pack/index/index',
    'add' => 'red_pack/index/add',
    'login' => 'user/login/index',
    'delete' => 'red_pack/index/delete',
    'update' => 'red_pack/index/update',
    'admin_login' => 'user/login/index',


//    基础
    'reg' => 'user/login/register',
    'add_warehouse' => 'user/Basics/addWarehouse',
    'add_staff' => 'user/basics/addStaff',
    'add_company' => 'user/basics/addCompany',
    'add_categories' => 'user/basics/addCategories',
    'add_depart' => 'user/basics/addDepart',

//    仓库
    'in_out_storage/:func/:step' => 'user/Storeroom/inOutStorage',


//    'in_storage/:step' => 'user/Storeroom/inStorage',
//    'out_storage/:step' => 'user/Storeroom/outStorage',

//    货品
    'add_measureunit' => 'user/Quality/addMeasureunit',
    'add_quality' => 'user/Quality/addQuality',
    'add_type' => 'user/Quality/addType',


//    库存
    'inventory_allocation/:step' => 'user/Repertory/inventoryAllocation',
    'inventory_verification/:step' => 'user/Repertory/inventoryVerification',
]);


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];


