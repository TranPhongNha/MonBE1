<?php
class Product extends Db{
    //Viet phuong thuc lay ra tat ca san pham noi bat
    function getAllFeatureProducts(){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra 10 sp moi nhat
    
}