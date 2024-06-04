<div class="col-md-8">
    <h3>Thêm khách hàng mới</h3>
    <form method="post" action="?act=adduser">
        <div class="mb-3">
            <label for="name" class="form-label">Tên khách hàng</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên khách hàng" name="nameuser" />
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Mật khẩu</label>
            <input type="text" class="form-control" id="pass" placeholder="Nhập mật khẩu" name="password" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" />
        </div>
     
        <div class="mb-3">
            <label for="role" class="form-label">Quyền</label>
            <select class="form-control" id="role" name="role">
                <option value="0">Khách hàng</option>
                <option value="1">Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="btnsubmit">Thêm mới</button>
    </form>
</div>