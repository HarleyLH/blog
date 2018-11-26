<?php
/**
 * Created by PhpStorm.
 * User: Harley Li
 * Date: 2018/11/25
 * Time: 10:58 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

/*
 * 博客管理
 */
class ManageController extends Controller
{

    /*
     * 文章管理api
     */
    public function article(){

    }

    /*
     * 文章详情
     */
    public function articleDetails(){
        return view('admin.articleDetails');
    }
    /*
     * 编辑api
     */
    public function edit(){

    }
}