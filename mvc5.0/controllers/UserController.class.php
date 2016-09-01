<?php 
    //用户的控制器
    class UserController extends Controller
    {
        private $model = null;

        //构造方法
        public function __construct()
        {
            //调用指定 父级构造方法的内容
            parent::__construct();
            $this->model = new Model('s47_user');
        }
        //列表页
        public function index()
        {
            $data = $this->model->order('id desc')->select();
            $this->assign('title','用户列表');
            $this->assign('list',$data);
            $this->display('User/index.html');
        }
        //添加
        public function add()
        {
            $this->assign('title','添加用户');
            $this->display('User/add.html');
        }
        //执行添加
        public function insert()
        {
            if ($this->model->add() > 0) {
                $this->redirect('恭喜你,添加成功','./index.php?m=User');
            } else {
                $this->redirect('添加失败');
            }
        }
        
        //删除
        public function del()
        {
            if ($this->model->del($_GET['id'])) {
                $this->redirect('恭喜你 删除成功!', './index.php?m=User');
            } else {
                $this->redirect('恭喜你 删除失败!!!', './index.php?m=User');
            }
        }

        //编辑
        public function edit()
        {
            $data = $this->model->find($_GET['id']);
            $this->assign('title','用户编辑');
            $this->assign('data',$data);
            $this->display('User/edit.html');
        }
        //执行编辑
        public function update()
        {
            if ($this->model->update() > 0) {
                $this->redirect('恭喜你,编辑成功','./index.php?m=User');
            } else {
                $this->redirect('编辑失败');
            }
        }
    }



