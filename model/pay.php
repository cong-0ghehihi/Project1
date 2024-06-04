<?php
function pay_method(){
    $sql = "
    SELECT * FROM payment
            ";
    $result = pdo_query($sql);
    return $result;
}

?>