<?php
$parametrs=explode('/',$_GET['p']);

if(isset($parametrs[0]) & !empty($parametrs[0]) )
{
    $controller=ucfirst($parametrs[0]).'Controller';
    $file='controller/'.$controller.'.php';
    
    if(file_exists($file)){
        require_once $file;
        // $controller=ucfirst($controller).'.php';
        
        if(class_exists($controller))
        {
            $obj=new $controller;
            if(isset($parametrs[1]) & !empty($parametrs[1]))
            {
                
                $action=$parametrs[1];
                if(method_exists($obj,$action))
                {
                    if (isset($parametrs[2]) & !empty($parametrs[2])) 
                    {
                        
                        $obj->$action($parametrs[2]);
                    }else
                    {
                        $obj->$action();
                    }
                }else
                {
                    http_response_code(404);
				    echo "<h6>this method doesn't exist</h6>";
                }

            }else
            {
                $action="index";
                $obj->$action();
            }
        }else
        {
            http_response_code(404);
            echo "<h6>this classe doesn't exist</h6>";
        }
    }else
    {
        http_response_code(404);
        echo "<h6>this page doesn't exist</h6>";
    }
}else
{
    require_once "controller/LoginController.php";
	$obj=new LoginController();
	$obj->index();
}
?>