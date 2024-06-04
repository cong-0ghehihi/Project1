
<div class="bannertk">
      <div class="banner">
          
      </div>
      <span class="tk">TÀI KHOẢN</span>
  </div>
  <div class="container_user_detail">
   <div class="content-left-user-detail">
      <h1>TÀI KHOẢN CỦA BẠN</h1>
      <p><a href="index.php">Trở về trang chủ</a></p>
   </div>
   <div class="content-right-user-detail">
      <h1>CẬP NHẬT TÀI KHOẢN</h1>
      <?php
         if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
            extract($_SESSION['user']);
         }
      ?>
      <form action="index.php?act=edit_user" method="post">
         <div>
            <p>Email</p>
            <input type="email" name="email" value="<?=$email?>"> 
         </div>
         <div>
            <p>Name</p>
            <input type="text" name="name" value="<?=$name?>">
         </div>
         <div>
            <p>Pass</p>
            <input type="password" name="pass" value="<?=$password?>">
         </div>
         <div>
            <input type="hidden" name="id" value="<?=$id?>">
            <input class="input_submit" type="submit" value="Cập nhật" name="update">
            <input class="input_submit" type="reset" value="Nhập lại">
         </div>
      </form>
      <?php 
       if(isset($thongBao) && ($thongBao != "")) {
           echo $thongBao;
       }
      ?>
   </div>
  </div>