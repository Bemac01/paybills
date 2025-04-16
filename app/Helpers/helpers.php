<?php

//check if function exists
if(!function_exists("view"))
{
    /**
     * @param string  $view
     * @param array $args
     * @return
     * 
     */
    //view
    function view($view, $args = [])
    {
        return \App\Core\View::render($view, $args);
    }
}

//check id function exists
if(!function_exists("chi_include"))
{
    /**
     * @param string $view
     * @param array $args
     * @return
     * 
     */
    //chi_include 
    function chi_include($view, $args = [])
    {
        echo \App\Core\View::include($view, $args);
    }
    
}