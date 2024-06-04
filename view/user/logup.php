<div class="bannertk">
        <div class="duongdan">
            <span class="chu">
                <a href="index.php?act=home"><i class="fa fa-home"></i>Trang chủ</a>
                <span>/</span>
                <span class="name">Đăng ký</span>
            </span>
        </div>
        <div class="banner">
            
        </div>
        <span class="tk">TÀI KHOẢN</span>
    </div>
    <div class="dangnhap">
        <div class="font">
                <h2>ĐĂNG KÝ</h2>
            <form action="index.php?act=logup" method="post">
                <input type="text" name="user" placeholder="Tên" required ><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="pass" placeholder="Password" required><br>
                <input class="inputsumit" type="submit" value="Đăng ký" name="dangky">
                <div class="dieukhien">
                    <a href="index.php?act=home">Trở về</a><br><br>
                </div>
                <?php
if(isset($thongbao) && $thongbao != "")
echo $thongbao;
?>  
            </form>
     
     
        </div>

    </div>
