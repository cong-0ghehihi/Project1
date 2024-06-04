<div id="PageContainer" style="min-height: 385px;">
    <main class=" main-content" role="main">
        <div id="page-wrapper">
            <div class="wrapper">
                <div class="inner">
                    <h1>Giỏ hàng</h1>
                    
                    <?php     if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)) { ?>
                        <form method="post" action="?act=checkout">
                            <table class="table">
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Size</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Hành động</th>
                    </tr>
                                <?php
                                  $grandTotal = 0; 
                                 $i = 0;
                                foreach ($_SESSION['cart'] as $item) {
                                   // Tổng tiền của toàn bộ giỏ hàng
                                    $total = (int)$item['4'] * (int)$item['5'];
                                   // Cộng vào tổng tiền của toàn bộ giỏ hàng
                                    $grandTotal += $total; 
                                 
                                ?>

                                    <tr>
                                        <td style="width: 20px; text-align: center;"><?= $i+1 ?></td>
                                        <td><?= $item['1'] ?></td>
                                        <td style="width: 80px;"><img  src="<?= $item['2'] ?>" alt="Product Image" style="width: 80px; height: 100px;"></td>
                                        <td style="text-align: center;"><?= $item['3'] ?></td>
                                        <td><?=  number_format($item['4']) ?></td>
                                        <td style="width: 70px"><input style="width:40px;text-align:center;margin-left:20px" type="number" name="quantity[]" value="<?= $item['5'] ?>" min="1"></td>
                                        <td ><?= number_format($total) ?></td>
                                        <td style="width: 120px;">
                                            <a href="?act=delcart&i=<?= $i ?>">Xóa sản phẩm</a> 
                                    
                                        </td>
                                    </tr>
                                <?php  } ?>

                                <tr>
                                    <td colspan="6"><strong>Tổng tiền:</strong></td>
                                    <td style=" padding: 20px 0px 20px 10px;"><strong><?= number_format($grandTotal) ?></strong></td>
                                    <td></td>
                                </tr>
                             
                            </table>
                            <br>
                        
<button style=" right: 158px; position: absolute;" type="submit" name="checkout" class="btn">Thanh toán</button>

                    


                        </form>

                    <?php } else echo "Giỏ hàng rỗng" ?>
                  
                  
               
                    <!-- end table -->
                  

                </div>
            </div>
        </div>
    </main>
</div>