<?php


    class database{
        private $connection;
        function __construct(){
            try{
                $this->connection=new mysqli(db_host,db_user,db_pass,db_name);
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
        }

        private function getBindParmsDataType($data){
            $dt='';
            foreach ($data as $value) {
                if(is_float($value))$dt.='d';
                elseif(is_integer($value))$dt.='i';
                elseif(is_string($value))$dt.='s';
                else $dt.='b';
            }
            return $dt;
        }

        private function getLabels($values){
            $label="";
            foreach($values as $value){
                $label.='?,';
            }
            $label=substr_replace($label,'',-1);
            return $label;
        }

        public function clean($data){
            return $this->connection->real_escape_string($data);//aa function sql injection nae thay
        }

        public function insert($table,$columns,$values){

            //die($this->getLabels($values));
            $label=$this->getLabels($values);
            $query="INSERT INTO $table($columns)VALUE($label)";
            $obj=$this->connection->prepare($query);
            /*defulte value enter
            $name=abc;
            $age=22;
            */
            //value ne map karshe
            $obj->bind_param($this->getBindParmsDataType($values),...$values);
            return $obj->execute();
        }
        
        public function read($table,$columns="*",$conditions=''){
            $query="SELECT $columns FROM $table $conditions";
            $result=$this->connection->query($query);
            return $result->fetch_all(true);
        }

        public function delete($table,$condition){
            $query="DELETE FROM $table WHERE $condition";
            return $this->connection->query($query);
        }

//updata
        private function getLabelsWithName($columns){
            $label="";
            $columns=explode(',',$columns);
            foreach($columns as $column){
                $label.=$column.'=?,';
            }
            $label=substr_replace($label,'',-1);
            return $label;
        }
        
        public function update($table,$columns,$values,$condition){

            $label=$this->getLabelsWithName($columns);
            $query="UPDATE $table SET $label WHERE $condition";
            //die($query);
            $obj=$this->connection->prepare($query);
            $obj->bind_param($this->getBindParmsDataType($values),...$values);
            return $obj->execute();
        }
        
       /* public function update($table, $columns, $values, $condition = '1=1') {
            $label = $this->getLabelsWithName($columns);
            $set = '';
            $params = array();
            foreach ($columns as $index => $column) {
                $set .= "$column=?,";
                $params[] = &$values[$index];
            }
            $set = rtrim($set, ',');
            $query = "UPDATE $table SET $set WHERE $condition";
            $stmt = $this->connection->prepare($query);
            call_user_func_array(array($stmt, 'bind_param'), array_merge(array($this->getBindParmsDataType($values)), $params));
            return $stmt->execute();
        }*/
        

    }


?>