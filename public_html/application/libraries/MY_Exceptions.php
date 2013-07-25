<?php
class MY_Exceptions extends CI_Exceptions {

public function __construct(){
    parent::__construct();
}

function show_404($page = ''){ // error page logic

    header("HTTP/1.1 404 Not Found");
    $CI =& get_instance();
   

}