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
    public function _before_index()
    {
        // 前置操作（执行index之前会自动调用该方法）
        if (session('root_id') == NULL) {
            $this->error('请登录！', '/admin/login/login');
        }
    }

    //显示主页
    public function index()
    {

        $this->display(boutique);
    }

    /*
      * 功能：用户黑名单管理
      * 编写者：田源
      * 状态：已完成
      */
    public function blackList()
    {
        // layout(false);
        $db = M('users');
        // $blackUser = $db->select();
        $count = $db->where(array('users_ifon' => 1))->count();

        //2.设置（获取）每一页显示的个数
        $pageSize = 6;
        //3.创建分页对象
        $page = new \Think\Page($count, $pageSize);

        $blackUser = $db->where(array('users_ifon' => 1))->limit($page->firstRow . ',' . $page->listRows)->select();
        foreach ($blackUser as $key => $val) {
            $blackUser[$key]["users_ifon"] = "封禁状态";
        }

        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');

        $this->assign('pages', $page->show());

        // var_dump($blackUser);
        $this->assign("black_users", $blackUser);

        // $this->page();
        $this->display();

    }



    /*功能：黑名单用户解除封禁
     作者：骆静静
     状态：完成
      * */
    public function freedeal(){
        $id=I('get.id');
        $condiction['users_ifon']=0;
        $condiction['users_id']=$id;
        $result=M('users')->save($condiction);
        if($result==1){
            echo <<<STR
				<script type="text/javascript">					
                    window.location.href = "/admin/assess/blackList";
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('操作失败');
                    window.location.href = "/admin/assess/blackList";
				</script>
STR;
        }

    }


    /*功能：黑名单用户彻底删除
    作者：骆静静
    状态：完成
     * */
    public function overdeal(){
        $id=I('get.id');
        $condiction['users_id']=$id;
        $result=M('users')->where($condiction)->delete();
        if($result==1){
            echo <<<STR
				<script type="text/javascript">					
                    window.location.href = "/admin/assess/appeal";
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('操作失败');
                    window.location.href = "/admin/assess/appeal";
				</script>
STR;
        }

    }
    /*
     * 功能：被投诉用户管理
     * 编写者：田源
     * 状态：已完成
     */
    public function appeal(){
        // layout(false);
        $db = M('users');
        // $blackUser = $db->select();
        $condiction['users_ifon']=0;
        $condiction['users_charge_num']=array('gt',20);

        $count= $db->where($condiction)->count();

        //2.设置（获取）每一页显示的个数
        $pageSize=6;
        //3.创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $data = $db->where($condiction)->limit($page->firstRow.','.$page->listRows)->select();

        foreach ($data as $key=>$val){
            $data[$key]["users_ifon"] = "自由状态";
        }

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');

        $this->assign('pages',$page->show());
        // var_dump($data);
        $this->assign("free",$data);


        $this->display();
    }
    /*功能：忽略被投诉用户
    作者：骆静静
    状态：完成
     * */
public function nodeal(){
    $id=I('get.id');
    $condiction['users_ifon']=2;
    $condiction['users_id']=$id;
    $result=M('users')->save($condiction);
    if($result==1){
        echo <<<STR
				<script type="text/javascript">					
                    window.location.href = "/admin/assess/appeal";
				</script>
STR;
    }else{
        echo <<<STR
				<script type="text/javascript">
					alert('操作失败');
                    window.location.href = "/admin/assess/appeal";
				</script>
STR;
    }

}
    /*功能：处理投诉用户
    作者：骆静静
    状态：完成
     * */
    public function deal(){
        $id=I('get.id');
        $condiction['users_ifon']=1;
        $condiction['users_id']=$id;
        $result=M('users')->save($condiction);
        if($result==1){
            echo <<<STR
				<script type="text/javascript">					
                    window.location.href = "/admin/assess/appeal";
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('操作失败');
                    window.location.href = "/admin/assess/appeal";
				</script>
STR;
        }
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
        $pageSize=6;
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
    /*
     * 功能：帖子获取
     * 编写者：田源
     * 状态：已完成
     */
    public function getPost(){
//         layout(false);
        $db = M('posts');
        $count=$db->where("(boss_deal <> 2 OR if_show <> 0) AND charge_num>15")->count();

        //2.设置（获取）每一页显示的个数
        $pageSize=6;
        //3.创建分页对象
        $page=new \Think\Page($count,$pageSize);
        $allposts = $db->where("(boss_deal <> 2 OR if_show <> 0) AND charge_num>15")->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign("posts",$allposts);


        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');

        $this->assign('pages',$page->show());
        $this->display();
    }

    /*
     * 功能：帖子删除
     * 编写者：田源
     * 状态：已完成
     */
    public function delete(){
        $id=I('get.id');
        // var_dump($id);
        $db = M('posts');
        // $result = $db->delete($id);
        // $result = $db->where("posts_id = $id")->setField('if_show',1);
        if($result){
            $this->redirect('getPost');
        }
        else{
            $this->error('删除失败！','getPost',2);
        }
    }
    /*
     * 功能：帖子忽略
     * 编写者：田源
     * 状态：已完成
     */
    public function postsIgnore(){
        $id=I('get.id');
        // var_dump($id);
        $db = M('posts');

        $result = $db->where("posts_id = $id")->setField('boss_deal',2);

        if ($result) {
            $this->redirect('getPost');
        }
        else{
            $this->error('忽略失败！','getPost',2);
        }

    }
    /*
       * 功能：添加吧务
       * 编写者：田源
       * 状态：已完成
       */
    public function examination(){
        // layout(false);
        $data['root_name'] = I('post.username');
        $data['root_password'] = I('post.password','','md5');

        // var_dump($data);
        $data['root_right'] = 1;
        $db = M('roots');
        $result = $db->data($data)->add();//添加
        $this->display();
    }
//    //积分管理（静态页）
//    public function integral(){
//
//    }
    /*
         * 功能：团队人员管理
         * 编写者：田源
         * 状态：已完成
         */
    public function personnelManager(){
        // layout(false);
        $db = M('roots');

        $count= $db->count();

        //2.设置（获取）每一页显示的个数
        $pageSize=6;
        //3.创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $all = $db->limit($page->firstRow.','.$page->listRows)->select();

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');

        $this->assign('pages',$page->show());
        $this->assign("root_users",$all);
        $this->display();
    }
    /*
     * 功能：删除团队人员
     * 编写者：田源
     * 状态：已完成
     */
    public function deleteManager(){
        $id=I('get.id');
        var_dump($id);
        $db = M('roots');
        $result = $db->delete($id);
        if($result){
            $this->redirect('personnelManager');
        }else{
            $this->error('操作失败！','personnelManager',2);
        }

    }

}