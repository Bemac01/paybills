<?php

//check if function exists
if(!function_exists("view"))
{
    /*
     * @param string  $view
     * @param array $args
     * @return  html
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
    /*
     * @param string $view
     * @param array $args
     * @return html
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
    /*
     * @param string  $view
     * @param array $args
     * @return html
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
    /*
     * @param string  $view
     * @param array $args
     * @return html
     * 
     */
    //view
    function endsection()
    {
        return \App\Core\View::endsection();
    }
}

//chi_yield
//check if function exists
if(!function_exists('chi_yield'))
{
    /*
     * @param string  $view
     * @param array $args
     * @return html
     * 
     */
    //view
    function chi_yield($section)
    {
        echo App\Core\View::yield($section);
    }
    
}

//pushScript
//check if function exists
if(!function_exists('pushScript'))
{
    /*
     * @param string  $view
     * @param array $args
     * @return html
     * 
     */
    //view
    function pushScript($section)
    {
        echo \App\Core\View::pushScript($section);
    }
}

//endPushScript
//check if function exists
if(!function_exists('endPushScript'))
{
    /*
     * @param string  $view
     * @param array $args
     * @return html
     * 
     */
    //view
    function endPushScript()
    {
        return \App\Core\View::endPushScript();
    }
}

//esc_url
//check if function exists
if(!function_exists('esc_url'))
{
    /*
     * @param string  $url
     * @return html
     * 
     */
    //esc_url
    function esc_url($url)
    {
        return \App\Core\Component::esc_url($url);
    }
}

//App\Core\directs
//check if the function exists
if(!function_exists('redirect'))
{
    /*
     * @param string  $url
     * @return  string
     * 
     */
    //redirect
    function redirect($url)
    {
        return \App\Core\Route::redirect($url);
    }
}

//baseurl
//check if function exists
if (!function_exists('baseurl')) {
    //baseurl
    /*
    * @return string
    */
    function baseurl()
    {
        return \App\Core\Request::baseurl();
    }
}

//url
//check if function exists
if (!function_exists('url')) {
    //url
    /*
    * @return string
    */
    function url($path)
    {
        return \App\Core\Component::url($path);
    }
}

//assets
//check if function exists
if (!function_exists('assets')) {
    //url
    /*
    * @return string
    */
    function assets($path)
    {
        return \App\Core\Component::assets($path);
    }
}

//response_json
//check if function exists
if (!function_exists('response_json')) {
    //response_json
    /*
    * @return string
    */
    function response_json($data)
    {
        return \App\Core\Component::Response_json($data);
    }
}

//clenPhone
//check if function exists
if (!function_exists('cleanPhone')) {
    //cleanPhone
    /*
    * @return string
    */
    function cleanPhone($phone)
    {
        return \App\Core\Component::cleanPhone($phone);
    }
}

//auth
//check if function exists
if (!function_exists('auth')) {
    //auth
    /*
    * @return string
    */
    function auth()
    {
        $auth = new \App\Core\Authentication();
        return $auth->instance();
    }
}