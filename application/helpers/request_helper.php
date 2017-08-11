<?php


class request_helper {
    public function post($form_element_name){
        if(isset($_POST["$form_element_name"])){
            return $_POST["$form_element_name"];
        }
    }
    
    public function get($form_element_name){
        if(isset($_GET["$form_element_name"])){
            return $_GET["$form_element_name"];
        }      
    }

        public function file($form_element_name){
        if(isset($_FILES["$form_element_name"])){
            return $_FILES["$form_element_name"];
        }      
    }
}

