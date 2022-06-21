
<?php
class DB
{
    private static $instance = NULl;
    public static function getInstance() {
      $servername = "localhost";
      $username = "root";
      $password = "root";
      if (!isset(self::$instance)) {
        try {
          self::$instance = new PDO("mysql:host=$servername;dbname=xshop", $username, $password);
          self::$instance->exec("SET NAMES <utf8<");
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$instance;
    }

    

}

    // class connect{
    //     private static $conn=null;
    //     public static function connectt()
    //     {
            
    //         $servername = "localhost";
    //         $username = "root";
    //         $password = "root";
            
    //         try {
    //           self::$conn = new PDO("mysql:host=$servername;dbname=xshop", $username, $password);
    //           // set the PDO error mode to exception
    //           self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
    //         } catch(PDOException $e) {
    //           echo "Connection failed: " . $e->getMessage();
    //         }

    //         return self::$conn;
    //     }

        
    // }


    # connection.php



?>