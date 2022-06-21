<?php

    class importExcelAdmin{
         
        public function import(){

            // echo '<pre>';
            // $fileExcel= $_FILES['fileExcel'];
            // var_dump($fileExcel);
            // echo '</pre>';die;
            require 'PHPExcel/Classes/PHPExcel.php';
            require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';

            $fileExcel= $_FILES['fileExcel']['tmp_name'];
            $objPHPExcel = PHPExcel_IOFactory::load($fileExcel);
            $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
            $row = count($sheetData);
            $conn= DB::getInstance();
            for($i=0;$i<=$row;$i++){
               
                $tenhh= $sheetData[$i]['A'];
                $dongia= $sheetData[$i]['B'];
                $giamgia= $sheetData[$i]['C'];
                $hinh= $sheetData[$i]['D'];
                $nhom= $sheetData[$i]['E'];
                $maloai= $sheetData[$i]['F'];
                $dacbiet= $sheetData[$i]['G'];
                $soluotxem= $sheetData[$i]['H'];
                $ngaylap= $sheetData[$i]['I'];
                $mota= $sheetData[$i]['J'];
                $soluongton= $sheetData[$i]['K'];
                $mausac= $sheetData[$i]['L'];
                $size= $sheetData[$i]['M'];

                $sql="INSERT INTO hanghoa(tenhh,dongia,giamgia,hinh,nhom,maloai,dacbiet,soluotxem,ngaylap,mota,soluongton,mausac,size) VALUES('${tenhh}','${dongia}','${giamgia}','${hinh}','${nhom}','${maloai}','${dacbiet}','${soluotxem}','${ngaylap}','${mota}','${soluongton}','${mausac}','${size}')";
                $conn->query($sql);

                
            }
            echo '<script>alert("Import thành công")</script>';
            echo '<script>window.location="index.php"</script>';
        }
    }
?>