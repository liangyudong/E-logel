<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/12/15
 * Time: 15:00
 */

namespace Admin\Controller;

//开启输出缓冲区
ob_start();
//开启会话
session_start();

use Think\Verify;
use Think\Controller;
/*
 * 功能：后台登陆
 * 编写者：骆静静
 * 状态：已完成
 */
class LoginController extends Controller
{


    /*
     * 功能：后台登陆页面
     * 编写者：骆静静
     * 状态：已完成
     */
    public function login()
    {

        layout(false);
        $this->display();
    }

    /*
     * 功能：后台登陆
     * 编写者：骆静静
     * 状态：已完成
     */

    public function captcha(){
        $captcha = new Verify();//创建验证码对象
        $captcha -> length = 1 ;//验证码长度设置
        $captcha->fontSize = 30;//验证码字体设置
        $captcha->codeSet = '111111111111111111111111111111111111111111';//验证码
        $captcha -> entry('login');//entry：保存验证码到session
    }

    public function dologin(){
        //校验验证码
        $captcha = new Verify();
        if($captcha->check(I('post.captcha'),'login')){
            //成功
            $condition = array();
            $condition['root_name']=I('post.root_name');
            $condition['root_password']=I('post.root_password','','md5');
//            $condition['root_password']=I('post.root_password');


            $user=M('roots')->where($condition)->find();

            if($user){
                //用户名密码正确
                //把用户名密码写入session
                session('root_name',I('post.root_name'));
                session('root_id',$user['root_id']);

                //跳转页面

                $this->redirect('/admin/assess/boutique');
            }else{
                //用户名密码错误
                echo "<script> alert('用户名或密码错误，请重新输入');history.go(-1);</script>";
            }
        }else{
            //失败
           echo "<script> alert('验证码错误，请重新输入');history.go(-1);</script>";
        }
    }
    /*
    * 功能：退出后台
    * 编写者：骆静静
    * 状态：已完成
    */
    public function logout(){
        //注销session
        session('root_name',null);
        session('root_id',null);
        $this->redirect('/admin/login/login');
    }


}