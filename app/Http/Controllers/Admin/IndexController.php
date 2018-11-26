<?php
/**
 * Created by PhpStorm.
 * User: Harley Li
 * Date: 2018/11/24
 * Time: 12:01 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;


class IndexController extends Controller
{
    public function __construct()
    {
        View::addExtension('html', 'php');
        parent::index();
    }


    public function test(Request $request){

        return view('Admin/test');

    }
    public function lihao(){
        return view('Admin/lihao');
    }
}