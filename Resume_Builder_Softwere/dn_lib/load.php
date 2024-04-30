<?php

    session_start();
    require('config.php');
    require('class/database_class.php');
    require('class/action_class.php');
    require('class/custom_class.php');
    require('class/session_class.php');
    require('class/helper_class.php');
    require('class/view_class.php');


    $action=new Action;

    //$action->db->insert('demo','name,age',['adhw@#<>?&*',7]);
    //$action->db->insert('demo','name,age,email,country',['sahil',21,'sahil@gmail.com','india']);
    
    // echo "<pre>";
    //print_r($action->db->read("demo","id,name","WHERE id>2"));

    //$action->db->delete("demo","id=2");
   
    //echo "<pre>";
    // print_r($action->db->update("demo","name,email",["abc","abc@gmail.com"],"id=1"));


    //$action->session->delete("name");
   // $action->session->set("name","abc");
    //echo $action->session->get("name");

?>