<?php
//pro cate
function products_bycate($id_cat)
{
    $sql = "select * from products where id_cat = $id_cat";
    $result = pdo_query($sql);
    return $result;
}
//pro
function list_product()
{
    $sql = "
    SELECT products.id, products.name, products.price ,  products.image, products.view, products.description, categories.name AS namecate FROM `products` LEFT JOIN categories ON products.id_cat = categories.id
            ";
    $result = pdo_query($sql);
    return $result;
}
function add_products($name, $price, $img, $description, $id_cat)
{
    $sql = "
            INSERT INTO products(`name`, `price`,  `image`, `description`, `id_cat`) VALUES ('$name','$price','$img','$description','$id_cat') 
        ";
    pdo_execute($sql);
}
function getone_products($idpro)
{
    $sql = "select * from products where id = $idpro";
    $result = pdo_query_one($sql);
    return $result;
}
function update_product($name, $price,  $img, $description, $id_cat, $idpro)
{
    $products = getone_products($idpro);
    if ($img != null) {
        if ($products['image'] != null && $products['image'] != "") {
            $imglink = "../uploads/" . $products['image'];
            unlink($imglink);
        }
        $sql = "
                update products SET name='$name',price='$price',image='$img',description='$description',id_cat='$id_cat' WHERE id = $idpro
            ";
    } else {
        $sql = "
                update products SET name='$name',price='$price',description='$description',id_cat='$id_cat' WHERE id = $idpro
            ";
    }

    pdo_execute($sql);
}

function delete_product($idpro)
{
    $products = getone_products($idpro);
    if ($products['image'] != null && $products['image'] != "") {
        $imglink = "../uploads/" . $products['image'];
        unlink($imglink);
    }
    $sql = "delete from products where id = $idpro";
    pdo_execute($sql);
}

//pro attr
function all_size(){
    $sql=" select * from sizes
    ";
    $result=pdo_query($sql);
    return $result;
}
function list_size($id_pro){
    $sql=" SELECT DISTINCT id_size, s.name as namesize from product_attributes as pa 
    inner join sizes as s on pa.id_size = s.id 
    where id_pro= $id_pro;
order by id_size asc
    ";
    $result = pdo_query($sql);
    return $result;
}

function add_product_attribute($id_pro, $id_size, $quantity)
{
    $sql = "
            INSERT INTO product_attributes(`id_pro`,`id_size`, `quantity`) VALUES ('$id_pro','$id_size','$quantity') 
        ";
    pdo_execute($sql);
}


function getone_attribute($idpro)
{
    $sql = " SELECT DISTINCT product_attributes.id, products.name as namepro, products.price, sizes.name as namesize , products.image, product_attributes.quantity, product_attributes.status , products.description
    from `product_attributes`
    JOIN  products ON product_attributes.id_pro = products.id
    JOIN sizes on product_attributes.id_size = sizes.id
    where id_pro = $idpro  ";
    $result = pdo_query_one($sql);
    return $result;
}

function list_attribute_pro($idpro)
{
    $sql = " 
    SELECT DISTINCT product_attributes.id, products.name as namepro, sizes.name as namesize , product_attributes.added_on, sum(product_attributes.quantity) as quantity, product_attributes.status 
    from `product_attributes`
    JOIN  products ON product_attributes.id_pro = products.id
    JOIN sizes on product_attributes.id_size = sizes.id
    where id_pro = $idpro 
group by namesize
     ";
    $result = pdo_query($sql);
    return $result;
}
//sản phẩm liên quan
function products_relate($idpro,$id_cat){
    $product = getone_products($idpro);
    $id_cat = $product['id_cat'];
    $sql = "select * from products where id_cat = $id_cat and id <> $idpro limit 0, 3";
    $result = pdo_query($sql);
    return $result;
}


//     function top10_products_luotxem(){
//         $sql = "select * from products order by view desc limit 0, 10";
//         $result = pdo_query($sql);
//         return $result;
//     }




//     function tangluotxem($idpro){
//         $products = getone_products($idpro);
//         $luotxem = $products['view'] + 1;
//         $sql = "update products set view = $luotxem where id = $idpro";
//         pdo_execute($sql);
//     }
function loadall_products($kyw = "", $id_cat = 0, $min_price, $max_price, $order) {
    $sql = "SELECT * FROM products WHERE 1"; 

    if ($kyw != "") {
        $sql .= " AND name LIKE '%" . $kyw . "%'";
    }

    if ($id_cat > 0) {
        $sql .= " AND id_cat ='" . $id_cat . "' ";
    }

    $sql .= " AND price > $min_price AND price < $max_price";
    
    $sql .= " ORDER BY price $order";
    

    return pdo_query($sql);
    ;
}
function list_product_admin($kyw = "", $id_cat = 0){
    $sql = "
        SELECT pro.* , cat.name as namecate  FROM products pro left join categories cat on pro.id_cat = cat.id WHERE 1
        "; 
        if ($kyw != "") {
            $sql .= " AND name LIKE '%" . $kyw . "%'";
        }
    
        if ($id_cat > 0) {
            $sql .= " AND id_cat ='" . $id_cat . "' ";
        }
    $result = pdo_query($sql);
    return $result;
}
function productBestSeller()
{
    $sql = "SELECT p.id, p.name,  p.image, 
    p.price, SUM(bd.quantity) as total_quantity_sold
    FROM bills b
    JOIN bill_detail bd ON b.id = bd.id_bill
    right JOIN products p ON bd.name = p.name
    WHERE b.id_status = 2
    GROUP BY p.id
    ORDER BY total_quantity_sold DESC LIMIT 4" ;
    return pdo_query($sql);
}

