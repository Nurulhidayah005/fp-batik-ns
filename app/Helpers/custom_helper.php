<?php 

if(!function_exists('changedateFormat')){
    function changedateFormat($format = 'd-m-Y', $originalDate){
        return date($format, strtotime($originalDate)); 
    }
}

if(!function_exists('isLoggin')){
    function isLoggin(){
        if (session()->get('LoggedUserData')) {
            return true;
        }
        return false; 
    }
}