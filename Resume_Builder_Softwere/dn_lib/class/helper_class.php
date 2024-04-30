<?php


    class Helper{

        public static $isPageIsAvailable=false;


        public function load_css($file_name){
            return ASSET_URL.'css/'.$file_name.'?v='.time();
        }

        public function UID(){
            $str='xyzpqrabc'.time();
            return str_shuffle($str);
        }
 
        public function redirect($route){
            header("location:".SITE_URL.$route);
        }

        public function load_js($file_name){
            return ASSET_URL.'js/'.$file_name;
        }

        public function load_image($file_name){
            return ASSET_URL.'image/'.$file_name;
        }

        
        public function load_img($file_name){
            return ASSET_URL.'images_user/'.$file_name;
        }


        public function templet_img($file_name){
            return ASSET_URL.'templet_img/'.$file_name;
        }
        

        public function url($route){
            return SITE_URL.$route;
        }

        public function isAnyEmpty($array){
            foreach($array as $key=>$value){
                if(!$value) return $key;
            }
            return false;
        }

        public function route($path_url,$function){

            $adddress_bar_url=$_SERVER['PATH_INFO']?? NULL;

            if(!$adddress_bar_url && $path_url=='/'){
                self::$isPageIsAvailable=true;
                $function(array());
            }

            $is_vaild=true;

            $adddress_bar_url=rtrim($adddress_bar_url,'/');
            $adddress_bar_url=ltrim($adddress_bar_url,'/');

      
            $abu_data=explode('/',$adddress_bar_url);
            $pu_data=explode('/',$path_url);
            $data=array();

            foreach($pu_data as $index=>$parameter){
                if(!isset($abu_data[$index])) return;
                if($abu_data[$index]==$parameter){

                }
                elseif(str_contains($parameter,'$')){
                    $data[ltrim($parameter,'$')]=$abu_data[$index];
                }
                else{
                    $is_vaild=false;
                }
            }
            /*echo "<pre>";
            print_r($abu_data);
            print_r($pu_data);*/
            if($is_vaild){
                self::$isPageIsAvailable=true;
                $function($data);
            }

        }

    }

?>