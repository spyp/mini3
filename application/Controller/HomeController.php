<?php
/**
 * Created by PhpStorm.
 * User: fara
 * Date: 3/19/2017
 * Time: 11:06 AM
 */

namespace App\Controller;


use App\Core\Controller;

class HomeController extends Controller
{
    public function getIndex()
    {
        $this->tpl = 'home.index';
        return $this->view();
    }
}