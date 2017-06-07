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

    /*功能：精品贴管理
     * 作者：骆静静
     * 状态：完成
     * */

    public function boutique(){
//        layout(false);
        $map['up_num'] = array('gt',20);
        $map['if_show'] = 1;
        $count= M('posts')->where($map)->count();

        //2.设置（获取）每一页显示的个数
        $pageSize=3;
        //3.创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $posts=M('posts')->where($map)->limit($page->firstRow.','.$page->listRows)->select();

        $this->assign('posts',$posts);

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');

        $this->assign('pages',$page->show());

        $this->display();

    }
    /*功能：upup推送
        作者：骆静静
        状态：完成
     * */
    public function upup(){
        $id=I('get.id');
        $condiction['posts_id']=$id;
        $condiction['boss_deal']=1;
        $result=M('posts')->save($condiction);
        if($result==1){
            echo <<<STR
				<script type="text/javascript">
					alert('推送成功！');
                    window.location.href = "/admin/assess/boutique";
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('推送失败');
                    window.location.href = "/admin/assess/boutique";
				</script>
STR;
        }


    }
    /*功能：取消推送
      作者：骆静静
      状态：完成
   * */
    public function cancelup(){
        $id=I('get.id');
        $condiction['posts_id']=$id;
        $condiction['boss_deal']=0;
        $result=M('posts')->save($condiction);
        if($result==1){
            echo <<<STR
				<script type="text/javascript">
					alert('取消推送成功！');
                    window.location.href = "/admin/assess/boutique";
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('取消推送失败');
                    window.location.href = "/admin/assess/boutique";
				</script>
STR;
        }

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