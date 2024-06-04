<?php 
// function load_comments($idsp){
//  $sql="SELECT comments.content,comments.date,users.user_name FROM `comments`
//  LEFT JOIN users ON comments.iduser = users.id
//  LEFT JOIN products ON comments.idpro = products.id
//  WHERE products.id = $idsp";  
//    $bl = pdo_query($sql);
//    return $bl;
// }
// function insert_comments($content,$iduser,$idpro,$date){
//   $sql = "insert into comments(content,iduser,idpro,date) values ('$content','$iduser','$idpro','$date')";
//   pdo_execute($sql);
// }
// function loadAll_bl(){
//   $sql ="select * from comments order by id";
//   $listbl = pdo_query($sql);
//   return $listbl;
// }

// function loadAll_bl(){
//   $sql ="select * from comments order by id";
//   $listbl = pdo_query($sql);
//   return $listbl;
// }
// function insert_comments($content,$iduser,$idpro,$date){
//   $sql = "insert into comments(content,iduser,idpro,date) values ('$content','$iduser','$idpro','$date')";
//   pdo_execute($sql);
// }

function delete_bl($id){
  $sql = "delete from comments where id =".$id;
  pdo_execute($sql);
}



// function insert_comments($id_user,$id_pro, $content,$date_cmt){
//   $sql = "
//       INSERT INTO `comments`(`id_user`, `id_pro`, `content`, `date_cmt`) 
//       VALUES ('$id_user','$id_pro','$content','$date_cmt');
//   ";
//   pdo_execute($sql);
// }
function insert_comments($id_user, $id_pro, $content, $date_cmt) {
  $sql = "
      INSERT INTO `comments`(`id_user`, `id_pro`, `content`, `date_cmt`) 
      VALUES (?, ?, ?, ?);
  ";
  pdo_execute($sql, $id_user, $id_pro, $content, $date_cmt);
}


  function load_comments($idsp){
    $sql = "
        SELECT comments.id, comments.content, comments.date_cmt , users.image_user , users.name FROM `comments` 
        INNER JOIN users ON comments.id_user = users.id
        INNER JOIN products ON comments.id_pro = products.id
        WHERE products.id = $idsp;
    ";
    $result =  pdo_query($sql);
    return $result;
  }
  
  function loadall_comments($id_pro) { 
    $sql = "select comments.id , comments.content , comments.date_cmt , users.name as name_user , products.name as name_pro from comments 
    LEFT JOIN users ON comments.id_user = users.id
    LEFT JOIN products ON comments.id_pro = products.id
    where 1 ";
    if($id_pro>0) $sql.=" AND $id_pro = '".$id_pro."'";
    $sql.=" order by id asc";
    $listbl = pdo_query($sql);
    return $listbl;
  }

?>