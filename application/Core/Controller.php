<?php
/**
 * Created by PhpStorm.
 * User: fara
 * Date: 3/18/2017
 * Time: 6:48 PM
 */

namespace App\Core;


abstract class Controller
{
    /** @var Container */
    public $container;
    /** @var  string $tpl */
    protected $tpl;
    /** @var  array $parameters */
    protected $parameters = array();
    /** @var  array $css */
    protected $css = array();
    /** @var  array js */
    protected $js = array();

    public function __construct()
    {
        $this->container = Container::getInstance();

    }

    public function view()
    {
        $this->media();
        $this->parameters = array_merge($this->parameters,array(
            'css' => $this->css,
            'js' => $this->js,
        ));
        return $this->container->blade->view()->make($this->tpl, $this->parameters)->render();
    }


    protected function media()
    {
        $this->css =array_merge($this->css,array(
            'css/bootstrap.min.css',
            'css/font-awesome.min.css',
            'css/bootstrap-theme.min.css',
            'css/fileinput.min.css',
            'css/style.css',
        ));

        $this->js =array_merge($this->js,array(
            'js/jquery-3.1.1.min.js',
            'js/bootstrap.min.js',
            'js/plugins/handlebars/handlebars.min.js',
        ));
    }
}