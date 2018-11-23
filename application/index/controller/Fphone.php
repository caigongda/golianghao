<?php
namespace app\index\controller;
use think\Controller;
class Fphone extends Controller{
    public function index(){//社区
    	$this->assign('iscurent','Fphone');
        return $this->fetch('fphone');
    }
}
