<?php
    class category{
       var  $conn=null;
        public function __construct()
        {
            $this->conn = DB::getInstance();
        }

        public function getAll(){
           $result = $this->conn->query('SELECT * FROM loai');
              return $result;
        }

        public function getById($id){
            $result = $this->conn->query("SELECT * FROM hanghoa WHERE maloai=${id}");
            return $result;
        }

    }
?>