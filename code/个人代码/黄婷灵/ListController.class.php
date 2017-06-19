<?php
namespace Home\Controller;
/*功能：话题模块
     * 作者：黄婷灵
     * 状态：over
     * */
//开启输出缓冲区
ob_start();
//开启会话
session_start();


use Think\Controller;
use Think\Model;

class ListController extends Controller
{
    /*功能：显示话题列表页
     * 作者：黄婷灵
     * 状态：完成
     * */
    public function index(){
        //$db = M('posts');
        //$posts = $db->select();
        //$list = new listall();
        $id = $_GET['id'];
        $label_id = M('posts')->getField('posts_label_id');
        //var_dump($id);
        $map['if_show'] = 1;
        //$map['up_num'] = array('gt',20);
        $count= M('posts')->where($map)->count();
        //设置（获取）每一页显示的个数
        $pageSize=8;
        //创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $posts=M('posts')->where($map)->limit($page->firstRow.','.$page->listRows)->where($label_id=$id)->order('posts_time DESC')->select();

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $this->assign('pages',$page->show());

        $postsTable=M('posts');
        $condition['if_show']='1';
        //$condition2['users_id']=$postsTable->where($condition)->field('users_id')->select();
        $condition2=$postsTable->where($condition)->select();
        //var_dump($condition2);
        $this->assign('posts',$condition2);



        $this->assign('posts',$posts);
        $this->display();
    }
    /*功能：话题内容页显示
     * 作者：黄婷灵
     * 状态：完成
     * */
    public function content(){
        //获取传入参数id
        $id = $_GET['id'];
        $id = intval($id);
        //dump($id);
        //话题内容
        $tmp['posts_id']=$id;
        $content = M('posts')->where($tmp)->select();

        //评论内容
        $tmp['par_comments_id']=$id;
        $comment = M('comments')->where($tmp)->field('comments_id','users_id','par_comments_id','comments_content','to_id','comments_time')->order('comments_time DESC')->select();
        //dump($comment);

        //话题用户相关显示
        $postsTable=M('posts');
        $condition['if_show']='1';
        $condition2['users_id']=$postsTable->where($condition)->field('users_id')->select();
        $condition2=$postsTable->where($condition)->field('posts_id','users_id','posts_title','posts_lable_id','post_intr','posts_time','view_num')->select();
        //var_dump($condition2);

        $count= M('comments')->where($tmp)->count();
        //设置（获取）每一页显示的个数
        $pageSize=6;
        //创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $comments=M('comments')->limit($page->firstRow.','.$page->listRows)->where($tmp)->order('comments_time DESC')->select();
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $this->assign('pages',$page->show());

        $this->assign('posts',$condition2);
        $this->assign('content',$content[0]);

        $this->assign('posts_id',$content[0]['posts_id']);
        $this->assign('users_id',$content[0]['users_id']);
        //var_dump($content[0]['posts_id']);
        $this->assign('comment',$comments);
        //var_dump($content[0]);
        $this->display();
    }
    /*功能：话题评论
     * 作者：黄婷灵
     * 状态：完成
     * */
    public function getcomment(){
        $id = $_POST['id'];
dump($id);
//        $id = intval($id);

        //判断是否登录
        if (session('user_id') == NULL) {
            $this->error('请登录！', '/home/index/login');
        }else{
            $data['users_id'] = session('user_id');
            $usersid = session('user_id');


        // var_dump($data);

        $condition['posts_id'] = $id;
        //dump($condition);
        $data['comments_content'] = I('post.comment');
        $data['par_comments_id'] = I('id');
        $data['to_id'] = $_SESSION['user_id'];
        $data['comments_time'] = date('Y-m-d h:m:s',time());
//        $data2 = M('posts')->where($condition)->select();
//        $data['users_id'] = M('posts')->where($condition)->getField('users_id');
        $data['users_id'] = $usersid;
//echo "users";
//         var_dump($data);
//        echo 'id';
        $db = M('comments');
        $result = $db->data($data)->add();
        if($result){
            $tmps['users_id'] = session('user_id');
            $result = M('users')->where($tmps)->setInc('users_comment',1);
            echo <<<STR
				<script type="text/javascript">					
                    window.location.href = "/home/list/content/id/$id";
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('评论失败');
                    window.location.href = "/home/list/content/id/$id";
				</script>
STR;
        }
//        var_dump($result);

//        $this->display('content');
    }
    }
    /*功能：标签话题
     * 作者：黄婷灵
     * 修改：骆静静
     * 状态：完成
     * */
    public function getlist(){
        $id = $_GET['id'];
//        dump($id);
        $map['posts_label_id']=$id;

        //var_dump($id);
        $map['if_show'] = 1;
//        $map['up_num'] = array('gt',20);
        $count= M('posts')->where($map)->count();
        //设置（获取）每一页显示的个数
        $pageSize=6;
        //创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $posts=M('posts')->where($map)->limit($page->firstRow.','.$page->listRows)->order('posts_time DESC')->select();

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $this->assign('pages',$page->show());

        /*$postsTable=M('posts');
        $condition['if_show']='1';
        $condition['posts_label_id']=$id;
        //$condition2['users_id']=$postsTable->where($condition)->field('users_id')->select();
        $condition2=$postsTable->where($condition)->select();
        //var_dump($condition2);
        $this->assign('posts',$condition2);*/

        $this->assign('posts',$posts);
        $this->display();
    }
    /*功能：帖子的投诉
    作者：骆静静
    状态：完成
     * */
    public function chargepost(){
        //判断是否登录
        if (session('user_id') == NULL) {
            echo "<script> alert('请登录'); window.location.href = '/home/index/login';</script>";
            //$this->error('请登录！', '/home/index/login');
        }else
        {
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];

            //        var_dump($user_id);
            //        var_dump($user_name);
            $posts_id = I('get.posts_id');
            $the_user_id = I('get.users_id');
//            var_dump($the_user_id);
            $data['big_user_id'] = $user_id;
            $data['charge_post_id'] = $posts_id;
            $result = M('chargepost')->where($data)->count();
            //        dump($result);
            if (!$result) {
                $result2 = M('chargepost')->add($data);
                if ($result2) {
                    $data1['charge_post_id'] = $posts_id;
                    $chargePnum = M('chargepost')->where($data1)->count();
                    $data2['posts_id'] = $posts_id;
                    $data2['charge_num'] = $chargePnum;
                    $addNum = M('posts')->save($data2);
                    $data3['users_id']=$the_user_id;
                    $result3=M('users')->where($data3)->setInc('users_charge_num',1);
                    echo "<script> alert('投诉成功');history.go(-1);</script>";
                } else {
                    echo "<script> alert('投诉失败');history.go(-1);</script>";
                }

            } else {
                $data1['charge_post_id'] = $posts_id;
                $chargePnum = M('chargepost')->where($data1)->count();
                //dump($chargePnum);
                $data2['posts_id'] = $posts_id;
                $data2['charge_num'] = $chargePnum;
                $addNum = M('posts')->save($data2);

                echo <<<STR
                        <script type="text/javascript">
                            alert('您已经投诉过此帖子');
                            window.location.href = "/home/list/content/id/$posts_id";
                        </script>
STR;
            }

        }
    }
}