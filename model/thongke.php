<?php
function load_pro_cat_statistical(){
    $sql = "SELECT cat.id, cat.name , count(*) AS quantity, min(pro.price) AS min_price , max(pro.price) AS max_price, round(avg(pro.price),2) AS price_avg
    FROM categories cat JOIN products pro ON cat.id = pro.id_cat
    GROUP BY cat.id, cat.name
    ORDER BY cat.id ASC";

    return pdo_query($sql);
}
?> 