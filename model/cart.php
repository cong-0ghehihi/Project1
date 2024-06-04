<?php
function billInsert($email,$fullname,$phone,$address,$method,$total_bill){
    $sql = "INSERT INTO `bills` (email,name_user,phone,address,id_payment,total_bill) VALUES ('$email','$fullname','$phone','$address','$method','$total_bill')";
    pdo_execute($sql);
}
function orderSelectLastId()
{
  $sql = "SELECT `id` FROM `bills` ORDER BY id DESC LIMIT 1";
  return pdo_query($sql);
}
function billDetailInsert($id_bill, $name, $size, $price, $quantity){
    $sql = " INSERT INTO `bill_detail`(id_bill, name, size, price, quantity) VALUES ('$id_bill','$name','$size','$price','$quantity') ";
    pdo_execute($sql);
}
function list_bill(){
  $sql=
  "SELECT id, email, name_user, phone, address, id_payment , id_status, total_bill, date_order   FROM bills 
order by id desc
";
$result = pdo_query($sql);
    return $result;
}
function list_bill_email($email){
  $email = $_SESSION['user']['email'];
  $sql=
  "SELECT id, email, name_user, phone, address, id_payment ,id_status,   total_bill, date_order   FROM bills 
where email ='" . $email . "'
order by id desc 
 
";
$result = pdo_query($sql);
    return $result;
}
function list_attribute_bill($idbill)
{
    $sql = " 
    SELECT *
    from `bill_detail`
    where id_bill = $idbill;
   
     ";
    $result = pdo_query($sql);
    return $result; 
    
}
function orderSetStatusOrder($status, $id)
{
  $sql = "UPDATE `bills` SET `id_status`= '$status' WHERE `id`=$id and `id_status`=0";
  pdo_execute($sql);
}
function orderSetStatusReceived($status, $id)
{
  $sql = "UPDATE `bills` SET `id_status`= '$status' WHERE `id`=$id and `id_status`=1";
  pdo_execute($sql);
}

?>