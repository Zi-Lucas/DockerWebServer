<?php
/**
 * Created by PhpStorm.
 * User: hezong
 * Date: 2020-03-18
 * Time: 14:06
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class ShowProfile extends Controller
{
    /**
     * 显示指定用户的简介
     *
     * @param  int $id
     * @return View
     */
    public function __invoke($id)
    {
        return User::findOrFail($id);
    }
}