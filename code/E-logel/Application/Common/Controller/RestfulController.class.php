<?php
namespace Common\Controller;


use Think\Controller;
use Think\Upload;

abstract class RestfulController extends Controller {
    // 当前待操作的数据表名称
    protected $_tableName = '';
    // 数据表操作对象
    protected $_db;

    protected function _initialize() {
        // 获取表名（通过控制器名）
        if (!$this->_tableName) {
            $this->_tableName = lcfirst(CONTROLLER_NAME);
        }
        // 创建自定义模型类
//        $this->_db = D($this->_tableName);
        // 判断当前模块下有无自定义类
        $class = MODULE_NAME . '\\Model\\' . CONTROLLER_NAME . 'Model';
        $commonClass = 'Common\\Model\\' . CONTROLLER_NAME . 'Model';
//        dump($commonClass);
        if (class_exists($class)) {
            $this->_db = new $class();
        } else if (class_exists($commonClass)) {
            // 当前模块下无自定义模型类，则使用Common模块下自定义类
            $this->_db = new $commonClass();
        } else {
            // 都没有
            $this->_db = M($this->_tableName);
        }
//        dump($this->_db);exit;
        // 权限校验

    }

    public function index() {
        $r = $this->_db->select();
//        dump($r);exit;
        $this->assign('results', $r);
        $this->display();
    }

    public function create() {
        $this->display();
    }

    public function store() {
        // 获取POST数据
        $data = I('post.');
//        dump($data);exit;
        // 上传文件
        // 1. 创建文件上传类对象
        $upload = new Upload();
        // 2. 设置参数
        // 设置文件保存目录
        $upload->rootPath = './Public';
        $upload->savePath = '/uploads/';
        // 3. 执行文件上传操作（上传后的处理）
        $info = $upload->upload();
        // 4. 获取上传后的信息
        if ($info) {    // 成功
//            dump($info);exit;
            // 针对多文件（或单文件）
            foreach ($info as $key => $value) {
                // 获取文件的保存目录
                $saveFileName = $value['savepath']
                    . $value['savename'];
                // 把图片保存路径写入到$data中
                $data[$key] = $saveFileName;
            }
        } else {        // 失败
            $this->error('文件上传失败！');
            exit;
        }

        // 插入到数据表中
        $result = $this->_db->add($data);
        // 善后处理
        if ($result) {
            $this->success($this->_tableName . '表数据插入成功！', '/' . MODULE_NAME . '/');
        } else {
            $this->error($this->_tableName . '表数据插入失败！');
        }
    }

    public function show() {
        // 获取GET参数
        $id = I('id');
        // 获取数据并显示视图
        $this->assign('row', $this->_db->find($id));
        $this->display();
    }

    public function edit() {
        $this->display();
    }

    public function update() {

    }

    public function destroy() {

    }
}