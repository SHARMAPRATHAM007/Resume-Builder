<?php

    class View{

        public function load($page,$data=array()){

            global $action;
            extract($data,EXTR_SKIP);
            include("page/$page.php");
        }

        public function load1($page,$data=array()){

            global $action;
            extract($data,EXTR_SKIP);

            include("Main_Home_Page/$page.php");
        }
    }

?>