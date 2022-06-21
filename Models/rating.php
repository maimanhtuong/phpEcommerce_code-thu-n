<?php
    class rating{
        var $conn=null;
        public function __construct()
        {
            $this->conn = DB::getInstance();
        }
        function getRating(){
            $query="select product_id,round(avg(rating),2) as avg from rating group by product_id";
            $result=$this->conn->query($query);
            $avg=array();
            while($set=$result->fetch()){
                $avg[$set['product_id']]=$set['avg'];
            }
            return $avg;
        }
        function getRatingByUser($product_id,$username){
            $query="select * from rating where product_id=$product_id and username='$username'";
            $result=$this->conn->query($query);
            $avg=array();
            while($set=$result->fetch()){
                $avg[$set['product_id']]=$set['rating'];
            }
            return $avg[$product_id];
        }
        function setRating($product_id,$rating,$username){
           $query='replace into rating(product_id,rating,username) values('.$product_id.','.$rating.",'".$username."')";
              $this->conn->query($query);
              
        }
}
?>