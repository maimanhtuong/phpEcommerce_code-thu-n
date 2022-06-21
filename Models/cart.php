<?php

    class cart extends hanghoa{

    
   function add_item($mahh,$soluong,$mausac,$size){
    $product= new hanghoa();
    $result=$product->getById($mahh);
    $row = $result->fetch();
    
        $dongia=($row['giamgia'])?$row['giamgia']:$row['dongia'];
    if(isset($_SESSION['cart'][$mahh])){
           $_SESSION['cart'][$mahh]['soluong']+=$soluong;
       }else{
           $_SESSION['cart'][$mahh]=array(
               'mahh'=>$mahh,
               'soluong'=>$soluong,
               'mausac'=>$mausac,
               'size'=>$size,
               'dongia'=>$dongia,
               'tenhh'=>$row['tenhh'],
               'hinh'=>$row['hinh'],
               
           );
       }
   }
   function deleteItem($mahh){
       unset($_SESSION['cart'][$mahh]);
   }
    function updateItem($mahh,$soluong){
         $_SESSION['cart'][$mahh]['soluong']=$soluong;
    }
}
?>