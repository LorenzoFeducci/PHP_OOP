<?php
    require_once('config.php');
    $autoload = function($classname){
        global $subdir, $baseDir;
        foreach($subdir as $dir){
            $file = $baseDir."/includes/$classname.php";
            if (file_exists($file)) {
                require_once $file;
                break;
            }
        }
    };
?>