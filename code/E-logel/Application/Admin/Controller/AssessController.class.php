<?php
namespace admin\Controller;
//开启输出缓冲区
ob_start();
//开启会话
session_start();
use Think\Controller;
use Think\Model;


class AssessController extends Controller
{

    //显示主页
    public function index(){
        $this->display(boutique);
    }
    //黑名单管理
    public function appeal(){
        $this->display();
    }
    //用户被投诉管理
    public function blcakList(){

        $this->display();
    }
    //精品贴管理
    public function boutique(){
        $this->display();

    }
    //删除帖子
    public function delete(){
        $this->display();
    }
    //添加吧务
    public function examination(){
        $this->display();
    }
//    //积分管理（静态页）
//    public function integral(){
//
//    }
    //团队人员管理
    public function personnelManager(){
        $this->display();
    }

}