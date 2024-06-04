<div class="col-md-8">
    <h3>Sửa thông tin khách hàng</h3>
    <form method="post" action="?act=edituser">
        <input type="hidden" value="<?php echo $user['id'] ?>" name="iduser">
        <div class="mb-3">
            <label for="name" class="form-label">Tên khách hàng</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên khách hàng" name="nameuser"
                value="<?php echo $user['name'] ?>" />
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Mật khẩu</label>
            <input type="text" class="form-control" id="pass" placeholder="Nhập mật khẩu" name="password"
                value="<?php echo $user['password'] ?>" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email"
                value="<?php echo $user['email'] ?>" />
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Quyền</label>
            <select class="form-control" id="role" name="role" value="<?php echo $user['role'] ?>">
                <option value="0" <?php if($user['role'] == "0"): ?> selected <?php endif; ?>>Khách hàng</option>
                <option value="1" <?php if($user['role'] == "1"): ?> selected <?php endif; ?>>Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="btnsubmit">Chỉnh sửa</button>
    </form>
</div>