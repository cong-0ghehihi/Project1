<?php
function add_account($email, $user, $pass)
{
    $sql = "INSERT INTO users(`email`, `name`, `password`) VALUES ('$email','$user','$pass')";
    pdo_execute($sql);
}
function check_user($user, $pass)
{
    $sql = "select * from users where name='" . $user . "'  AND  password='" . $pass . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_email($email)
{
    $sql = "select * from users where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_user($id,$name,$pass,$email){
    $sql = "update users set name ='".$name."', password ='".$pass."', email ='".$email."' where id=".$id;
    pdo_execute($sql);
}