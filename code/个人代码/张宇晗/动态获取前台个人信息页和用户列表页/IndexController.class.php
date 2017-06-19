<?php
namespace Home\Controller;
//开启输出缓冲区
ob_start();
//开启会话
session_start();
use Think\Controller;


class IndexController extends Controller
{
    /***
     ** 编码人：张宇晗；
     **功能：前台主页动态获取
     ***/
    public function index() {
        //从标签数据库里获取数据，显示热门话题
        $lablesTable=M('lables');
        $labels_num=$lablesTable->field('posts_label_id')->count();
        $this->assign('labels_num',$labels_num);
       // dump($lablesTable);
        $lables=$lablesTable->limit(26)->select();
        $this->assign('lables',$lables);
        //显示用户数量到主页
        $usersTable=M('users');
        $users_num=$usersTable->field('users_id')->count();
        $this->assign('users_num',$users_num);
        //显示热门帖子展示到主页
        $postsTable=M('posts');
        $condition['boss_deal']='1';

        $condition2=$postsTable->where($condition)->select();
        //var_dump($condition2);
        $this->assign('posts',$condition2);
        $posts_num=$postsTable->field('posts_id')->count();
        $this->assign('posts_num',$posts_num);
        session_start();
        //判断是否登录
        $id=$_SESSION['user_id'];
        $this->assign('id',$id);
        $usersTable=M('users');
        $points=$usersTable->order('users_sum DESC')->limit(5)->select();
        //dump($points);
        $this->assign('points',$points);
        $this->display();

    }
    /*功能：验证用户信息
   * 作者：骆静静
   * 状态：完成
   * */
    public function tologin(){
        $tmp['users_address']=I('post.users_mail');
        $tmp['users_password']=I('post.users_password','','md5');
        $result= M('users')->where($tmp)->count();
        if($result==1){
            $user=M('users')->where($tmp)->find();

            if($user['users_ifon']==0) {
                session('user_name', $user['users_name']);
                session('user_id', $user['users_id']);
//                dump($_SESSION);
                echo <<<STR
				<script type="text/javascript">					
                    window.location.href = "../index/";
				</script>
STR;
            }else{
                echo "<script> alert('您的账户被管理员封禁');history.go(-1);</script>";
            }
        }else{
            echo "<script> alert('用户名或密码错误，请重新输入');history.go(-1);</script>";
        }
    }
    /*功能：退出登陆
   * 作者：骆静静
   * 状态：完成
   * */
    public function loginout(){
      echo "退出登陆";
        session('user_name', null);
        session('user_id', null);
        $this->redirect('/home/index/login');
    }


}