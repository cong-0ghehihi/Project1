<?php  
    function list_users(){
        $sql = "SELECT * from users";
        $result = pdo_query($sql);
        return $result;
    }

    function add_user($nameuser, $password, $email,  $role){
        $sql = "
            insert INTO users(`name`, `password`, `email`,  `role`) VALUES ('$nameuser', '$password', '$email', '$role')
        ";
        pdo_execute($sql);
    }

    function getone_user($iduser){
        $sql = "select * from users where id = $iduser";
        $result = pdo_query_one($sql);
        return $result;
    }
    function update_user($nameuser, $password, $email,  $role, $iduser){
        $sql = "
            UPDATE `users` SET `name`='$nameuser',`password`='$password',`email`='$email',`role`='$role' WHERE id = $iduser
        ";
        pdo_execute($sql);
    }
    function delete_user($iduser){
        $sql = "DELETE FROM `users` WHERE id = '$iduser'";
        pdo_execute($sql);
    }
?>