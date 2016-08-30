<?php 
    //首页的控制器
    class IndexController extends Controller
    {
        public function index()
        {
            echo '首页非我莫属!';
            $this->display('Index/index.html');
        }
    }



