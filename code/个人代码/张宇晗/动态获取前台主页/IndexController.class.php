<?php
namespace Home\Controller;
use Think\Controller;


class IndexController extends Controller
{
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
        $condition2['users_id']=$postsTable->where($condition)->field('users_id')->select();
        $condition2=$postsTable->where($condition)->field('posts_id','users_id','posts_title','posts_lable_id','post_intr','posts_time','view_num')->select();
        //var_dump($condition2);
        $this->assign('posts',$condition2);
        $posts_num=$postsTable->field('posts_id')->count();
        $this->assign('posts_num',$posts_num);
        $this->display();

    }





}
