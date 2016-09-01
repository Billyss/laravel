<?php 
    //控制基类
    class Controller extends Smarty
    {
        //构造方法 做Smarty的初始化
        public function __construct()
        {
            //配置smarty
            $this->setTemplateDir('./views')
                ->setCompileDir('./runtime/views_c')
                ->setConfigDir('./configs')
                ->setCacheDir('./runtime/caches');
            
            //配置 模版变量的定界符<{}> 
            $this->left_delimiter = LEFT_D;
            $this->right_delimiter = RIGHT_D;
            $this->caching = CACHING;//配置缓存
            $this->cache_lifetime = CACHE_LIFETIME;//缓存时间
        }

        //跳转
        public function redirect($message, $url=null)
        {
            echo "<script>alert('{$message}')</script>";
            if (empty($url)) {
                echo "<script>history.back()</script>";
            } else {
                echo "<script>location.href='{$url}'</script>";
            }
            
        }

        //处理调用不存在的方法
        public function __call($fun, $params)
        {
            header('HTTP/1.0 404 not found');
            header('Status:404 not found');//兼容IE
            echo '<h1>404 NOT FOUND</h1>';
            exit;
        }
    }


