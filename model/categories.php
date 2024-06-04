<?php

function list_cate(){
    $sql="SELECT *from categories";
    $result=pdo_query($sql);
    return $result;
}
function add_cate($catename){
    $sql="INSERT INTO categories(name) values('$catename') ";
    pdo_execute($sql);
}

function getone_categories($id){
    $sql = "select * from categories where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function edit_cate($id,$name) {
    // code edit vào đây
    
    $sql="UPDATE categories SET name='$name' WHERE id = $id";
    pdo_execute($sql); 
}
 function delete($id) {
    // code edit vào đây
    $sql="DELETE FROM categories where id='$id'";
    pdo_execute($sql);
   
   
 }

?>
