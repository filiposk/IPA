<?php

class Request
{
    public static function pathInfo()
    {
        if(isset($_SERVER['PATH_INFO']))
        {
            return $_SERVER['PATH_INFO'];
        }elseif(isset($_SERVER['PATH_INFO'])){
            return $_SERVER['PATH_INFO'];
        }else{
            return '';
        }
    }
}