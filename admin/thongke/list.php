<div class="row" style="width:1140px" >
    <div class="row frmtitle">
        <h1>Thống Kê Sản Phẩm Theo Loại</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb1 cart" >
            <table id="table_sta"  >
                <thead>  
                    <tr>
                        <th style="padding-left:10px">Mã Danh Mục</th>
                        <th>Tên Danh Mục</th>
                        <th>Số Lượng</th>
                        <th>Giá Thấp Nhất</th>
                        <th>Giá Cao Nhất</th>
                        <th>Giá Trung Bình</th>
                    </tr>
                </thead>            
                <?php
                foreach ( $dsThongKe as $sta) {
                    extract($sta);
                    echo '<tr>
                    <td  style="padding-left:60px">'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$quantity.'</td>
                    <td>'.number_format($min_price).' ₫</td>
                    <td>'.number_format($max_price).' ₫</td>
                    <td>'.number_format($price_avg).' ₫</td>
                    </tr>';
                }
                 ?>
                
            </table>
        </div>
        <span style="margin-bottom: 10px;" class="row mb1">
         <div style="display: flex;">
            <a href="index.php?act=bieudo"><input id="btn_bd" type="button" style="width: 190px;margin-right:10px;"
                  value="Biểu đồ doanh thu"></a>
            <a href="index.php?act=bieudopro"><input id="btn_bd" type="button" style="width: 190px;"
                  value="Biểu đồ sản phẩm"></a>
         </div>
      </span>
    </div>
</div>