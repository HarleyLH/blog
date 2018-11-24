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

class IndexController extends Controller
{
    public function test(){
        Request::capture();
    }
}