<div class="container1">
    <div class="infor">
        <div class="so1">
            <p class="rich">RICH VEST - Thương hiệu veston may sẵn hàng đầu Việt Nam</p>
            <div class="dr">
                <a href="?act=viewcart">Giỏ hàng</a>
                <span> > </span>
                <span>Thông tin vận chuyển</span>
            </div>
            <p class="tt">Thông tin thanh toán</p>
            <div class="tk">
                <div class="avt">
                    <img width="40px" src="./img/hello.jpg" alt="">
                </div>
                <?php if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                    <div class="tkct">
                        <p><span> <?= $name ?> </span><span>| <?= $email ?></span></p>
                        <p><a href="?act=logout">
                                <div class="dx">Đăng xuất</div>
                            </a></p>
                    </div>
                <?php } else { ?>
                    <p>Bạn đã có tài khoản?
                    <p><a href="?act=login">
                            <div class="dx">Đăng nhập</div>
                        </a></p>
                    </p>
                <?php } ?>
            </div>
            <div class="thongtinvc">
                <form action="?act=order" method="post">
                <?php if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                    <div class="from-inp">
                        <input class="form-input" name="email" type="email" placeholder="Email" value="<?php echo $email ?>">
                    </div>
                <?php } else { ?>
                    <div class="from-inp">
                        <input class="form-input " name="email" required type="email" placeholder="Email">
                    </div>
                <?php } ?>
                    <div class="from-inp">
                        <input class="form-input" name="fullname" required type="text" placeholder="Họ và tên">
                    </div>
                    <div class="from-inp">
                        <input class="form-input" name="phone" required type="text" placeholder="Điện thoại">
                    </div>
                    <div class="from-inp">
                        <input class="form-input" name="address" required type="text" placeholder="Địa chỉ">
                    </div>
                    <h4>Phương thức thanh toán</p>
                    <!-- <?php foreach($listpay as $method) :?>  
                    <div class="phuongthuctt">
                            <div><input type="radio" name="method" required id="" value="<? $method['id']?>"></div>
                            <div class="cod">
                                <span><img src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=6" alt=""></span>
                            </div>
                            <div class="ss">
                                <ph4><?= $method['method'] ?></p>
                            </div>
                        </div>
                        <?php endforeach?> -->
                        <div class="phuongthuctt">
                            <div><input type="radio" name="method" required id="" value="Thanh toán khi nhận hàng(COD)"></div>
                            <div class="cod">
                                <span><img src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=6" alt=""></span>
                            </div>
                            <div class="ss">
                                <ph4></p>
                            </div>
                        </div>
                        <div class="dathang">
                            <a href="?act=viewcart">Giỏ hàng</a>
                          
                            <input type="submit" name="order" value="Đặt hàng">
                        </div>
               
                <hr style="width: 95%">

            </div>
        </div>
    </div>
 
    <div class="tinhtien">
  
        <div class="so2">
        <?php 
    $grandTotal = 0; 
    $i = 0;
  foreach ($_SESSION['cart'] as $item) {
       // Tổng tiền của toàn bộ giỏ hàng
       $total = (int)$item['4'] * (int)$item['5'];
       // Cộng vào tổng tiền của toàn bộ giỏ hàng
        $grandTotal += $total; 
     ?>
            <div class="thongtinsanpham">
                <div class="anh">
                    <img src="<?= $item[2] ?>" alt="">
                    <span class="sl"><?= $item[5] ?></span>
                </div>
                <div class="tensp">
                    <p class="t"><?= $item[1] ?></p>
                    <p class="s"><?= $item[3] ?></p>
                </div>
                <div class="gia">
                    <span><?= number_format($item[4]) ?></span><span>₫</span>
                </div>
            </div>

            <div class="tamtinh">
                <div class="tt">
                    Tạm tính
                </div>
                <div class="gia">
                    <span><?= number_format($total) ?></span><span>₫</span>
                </div>
            </div>
            <?php } ?>
            <div class="tongtien">
                <div class="tt">
                    
                    Tổng tiền <input type="hidden" name="total" value="<?= $grandTotal ?>">
                </div>
                <div class="gia">
                    <span class="dongia">VNĐ</span> <span><?= number_format($grandTotal) ?></span><span>₫</span>
                   
                </div>
            </div>
            </form>
            <div class="chuy">
                <p>- Khánh hàng vui lòng thanh toán tiền vận chuyển khi nhận hành.</p>
                <p>- Freeship toàn quốc đối với đơn hàng > 1,000,000 chuyển khoản trước.</p>
            </div>
        </div>
    </div>
</div>