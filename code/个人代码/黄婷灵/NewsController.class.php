<?php
/*功能：新闻模块
     * 作者：黄婷灵
     * 状态：
     * */
namespace Home\Controller;
//开启输出缓冲区
ob_start();
//开启会话
session_start();
use Common\library\easybuy;
use Think\Controller;

class NewsController extends Controller
{

    //新闻列表页
    public function index(){
        //$db = M('posts');
        //$posts = $db->select();
        //$list = new listall();
        $id = $_GET['id'];
        $label_id = M('posts')->getField('posts_label_id');
        //var_dump($id);
        $map['if_show'] = 1;
        $map['up_num'] = array('gt',20);
        $count= M('posts')->where($map)->count();
        //设置（获取）每一页显示的个数
        $pageSize=4;
        //创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $posts=M('posts')->where($map)->limit($page->firstRow.','.$page->listRows)->where($label_id=$id)->select();

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $this->assign('pages',$page->show());

        $postsTable=M('posts');
        $condition['if_show']='1';
        $condition2['users_id']=$postsTable->where($condition)->field('users_id')->select();
        $condition2=$postsTable->where($condition)->field('posts_id','users_id','posts_title','posts_lable_id','post_intr','posts_time','view_num')->select();
        //var_dump($condition2);
        $this->assign('posts',$condition2);

        $this->assign('posts',$posts);
        $this->display();
    }

    public function news_content(){
        //获取传入参数id
        $id = $_GET['id'];
        $id = intval($id);

        //新闻内容
        $tmp['posts_id']=$id;
        $content = M('posts')->where($tmp)->select();

        //新闻用户相关显示
        $postsTable=M('posts');
        $condition['if_show']='1';
        $condition2['users_id']=$postsTable->where($condition)->field('users_id')->select();
        $condition2=$postsTable->where($condition)->field('posts_id','users_id','posts_title','posts_lable_id','post_intr','posts_time','view_num')->select();
        //var_dump($condition2);

        $this->assign('posts',$condition2);
        $this->assign('content',$content[0]);
        //var_dump($content[0]);
        $this->display();
    }
}