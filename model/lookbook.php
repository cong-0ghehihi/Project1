<?php 
    function all_lookbook_home(){
        $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 0,6;";
        return pdo_query($sql);
    }
    function lookbook_home(){
        $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 0,4;";
        return pdo_query($sql);
    }
      function list_lookbook(){
        $sql = "SELECT `id`,  SUBSTRING(`title`, 1, 150) AS `title`, SUBSTRING(`content`, 1, 200) AS `content`, `img`, `date_add`, `Name` FROM news ORDER BY id;";
        return pdo_query($sql);   
    }
    function add_lookbook($title, $content, $filename,$date_add){
        $date_add = date('Y-m-d');
        $sql = "
            INSERT INTO news(`title`, `content`, `img`, `date_add`) VALUES ('$title','$content','$filename','$date_add')";
        pdo_execute($sql);
    }
    function updateone_loobbook($id){
        $sql = "SELECT * from news where id =".$id;
        $result = pdo_query_one($sql);
        return $result;
    }
    function update_lookbook($id,$title, $content, $filename,$date_add){
        if($filename != ""){
            $sql = "UPDATE news SET title='$title',content='$content',img='$filename',date_add='$date_add' WHERE id =".$id;
        }else{
            $sql = "UPDATE news SET title='$title',content='$content',date_add='$date_add' WHERE id =".$id;
        }
        
        pdo_execute($sql);
    }
    function delete_lookbook($id){
        $lookbook =  updateone_loobbook($id);
        if($lookbook['img'] != null && $lookbook['img'] != ""){
            $imglink = "../img/" . $lookbook['img'];
            unlink($imglink);
        }
        $sql = "delete from news where id = $id";
        pdo_execute($sql);
    }
?>