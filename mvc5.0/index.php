<?php 

    //导入配置文件
    require './configs/config.php';

    //自动加载类
    function mvc_autoload($classname){
        // echo $classname;
        if(file_exists("./models/{$classname}.class.php")){
            require "./models/{$classname}.class.php";
        }else if(file_exists("./controllers/{$classname}.class.php")){
            require "./controllers/{$classname}.class.php";
        }else{
            header('HTTP/1.0 404 not found');
            header('Status:404 not found');//兼容IE
            echo '<h1>404 NOT FOUND</h1>';
            exit;
        }
    }

    require './libs/Smarty.class.php';
    spl_autoload_register('mvc_autoload');


    //获取用户参数
    //获取控制器名(类名)
    $m = (!empty($_GET['m']))?$_GET['m']:'Index';
    //获取操作名 (方法名)
    $a = (!empty($_GET['a']))?$_GET['a']:'index';

    //拼装类名
    $classname = $m.'Controller';
    //实例化 控制器
    $controller = new $classname();
    // var_dump($controller);
    
    //调用 控制器中的方法
    $controller->$a();


