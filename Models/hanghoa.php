<?php
// c1
class hanghoa
{
    var $conn = null;
    public function __construct()
    {
        $this->conn = DB::getInstance();
    }

    public function renderAll()
    {
        $result = $this->conn->query('SELECT * FROM hanghoa');
        return $result;
    }

    public function getSales(){
        $result = $this->conn->query('select * from hanghoa where giamgia>0 limit 4');
        return $result;
    }

    public function getNewest(){
        $result= $this->conn->query('select * from hanghoa order by mahh desc limit 4');
        return $result;
    }
    public function getById($id){
        $result= $this->conn->query("select * from hanghoa where mahh=${id}");
        return $result;
    }
    public function getListColor($nhom){
        $result= $this->conn->query("select mausac from hanghoa where nhom=${nhom} group by mausac");
        return $result;
    }
    public function getListSize($nhom){
        $result= $this->conn->query("select distinct size from hanghoa where nhom=${nhom}");
        return $result;
    }
    public function getListSearch($key){
        $result= $this->conn->query("select * from hanghoa where tenhh like '%${key}%'");
        return $result;
    }
    public function getListByPage($page,$limit){
        $start=($page-1)*$limit;
        $result= $this->conn->query("select * from hanghoa limit ${start},${limit}");
        return $result;
    }
    public function getNumProduct(){
        $result= $this->conn->query("select count(*) as num from hanghoa ");
        $row = $result->fetch();
        return $row['num'];
    }

    public function soluongton(){
        $result= $this->conn->query("SELECT COUNT(Nhom), tenhh FROM hanghoa GROUP BY tenhh");
        return $result;
    }

    public function getListMaLoai(){
        $result= $this->conn->query("select * from loai");
        return $result;
        var_dump($result);die;
    }

    
       
    
    
}
// c2
// class product
// {
//     var $conn = null;
//     public function __construct()
//     {
//         $this->conn = connect::connectt();
//     }

//     public function renderAll()
//     {
//         $result = $this->conn->query('SELECT * FROM hanghoa');
//         return $result;
//     }

//     public function getSales(){
//         $result = $this->conn->query('select * from hanghoa where giamgia>0');
//         return $result;
//     }
//     public function getById($id){
//         $result= $this->conn->query("select * from hanghoa where id=${id}");
//     }
// }
