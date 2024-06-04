<div class="col-md-12" style="width:1130px">
    <h3>Danh sách khách hàng</h3>
    <a href="?act=adduser" class="btn btn-success" style="background-color:#25bc7c">Thêm mới</a>
    <table class="table" id="table_sta">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Quyền hạn</th>
                <th scope="col">Hành động</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($list_users as $key => $value): ?>
            <tr>
                <th scope="row">
                    <?php echo $key + 1; ?>
                </th>
                <td>
                    <?php echo $value['name']; ?>
                </td>
                <td>
                    <?php echo $value['email']; ?>
                </td>
                <td>
                    <?php echo $value['password']; ?>
                </td>
                <td>
                    <?php 
                        if($value['role'] == "0"){
                            echo "Khách hàng";
                        } else{
                            echo "Admin";
                        }
                    ?>
                </td>
                <td>
                    <a href="?act=edituser&iduser=<?php echo $value['id']; ?>" class="btn btn-warning">Sửa</a>
                     <button class="btn btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal"
                        data-bs-target="#modalDelete">
                        Xóa
                    </button>
                    <!-- <a onclick="return confirm('Bạn có muốn xóa k?')" href="?act=deletekh&idkh=<?php echo $value['id']; ?>"  class="btn btn-warning">Xóa</a> -->
                </td>
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</div>


<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Thông báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Hành động này không thể hoàn tác. Bạn có muốn xóa không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <a href="" class="btn btn-danger" id="btn-delete">Xác nhận xóa</a>
            </div>
        </div>
    </div>
</div>
<script>
var modalDelete = document.getElementById('modalDelete')
modalDelete.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-id')
    var link = `?act=deleteuser&iduser=${id}`
    document.getElementById("btn-delete").setAttribute("href", link)
})
</script>
