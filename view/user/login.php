<div class="bannertk">
        <div class="duongdan">
            <span class="chu">
                <a href="index.php?act=home"><i class="fa fa-home"></i>Trang chủ</a>
                <span>/</span>
                <span class="name">Đăng nhập</span>
            </span>
        </div>
        <div class="banner">
            
        </div>
        <span class="tk">TÀI KHOẢN</span>
    </div>
    <div class="dangnhap">
        <div class="font">
                <h2>ĐĂNG NHẬP</h2>
            <form action="index.php?act=login" method="post">
                <input type="text" name="user" placeholder="Tên đăng nhập" ><br>
                <input type="password" name="pass" placeholder="password"><br>
                <input class="inputsumit" type="submit" value="Login" name="login">
                <div class="dieukhien">
                    <a href="index.php?act=home">Trở về</a><br><br>
                    <a href="index.php?act=logup">Đăng ký</a><br><br>
                    <a href="index.php?act=qmk">Quên mật khẩu?</a>
                </div>
                <?php
if(isset($thongbao) && $thongbao != "")
echo $thongbao;
?>
            </form>
            
        </div>

    </div>
  