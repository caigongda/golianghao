<?php
namespace app\index\controller;
use think\Controller;
class Community extends Controller{
    public function index(){//社区
    	$this->assign('iscurent','Community');
        return $this->fetch('community');
    }
}
