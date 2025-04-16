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

//check is function exists
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

    //extend
    function extend($view, $section = null, $args = [])
    {
        echo \App\Core\View::extend($view,$section, $args);
    }

    
}

//section
//check if function exists
if(!function_exists('section'))
{
    /**
     * @param string  $view
     * @param array $args
     * @return
     * 
     */
    //view
    function section($section)
    {
        echo \App\Core\View::section($section);
    }
}

//endsection
//check if function exists
if(!function_exists('endsection'))
{
    /**
     * @param string  $view
     * @param array $args
     * @return
     * 
     */
    //view
    function endsection()
    {
        echo \App\Core\View::endsection();
    }
}