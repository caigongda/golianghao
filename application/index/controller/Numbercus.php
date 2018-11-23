<?php
namespace app\index\controller;
use think\Controller;
class Numbercus extends Controller{
    public function index(){//社区
    	$this->assign('iscurent','Numbercus');
        return $this->fetch('numbercus');
    }
}
