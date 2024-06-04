<div class="col-md-10" style="width:1130px">

    <h3>Danh Sách Bình Luận</h3>



    <div class="row mb10 formdslh">
        <table class="table" id="table_sta" style="border: 1px black;">
        <thead style="border: 1px;">   
        <tr>
                <!-- <th></th> -->
                <th scope="col">ID</th>
                <th scope="col">Nội Dung</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Ngày Bình Luận</th>
                <th></th>
            </tr>
        </thead>
            <?php
            foreach ($listbl as $binhluan) {
                extract($binhluan);
                // $suabl = "index.php?act=suabl&id=" . $id;
                // $xoabl = "index.php?act=xoabl&id=" . $id;
                echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $content . '</td>
                                <td>' . $name_user . '</td>
                                <td>' . $name_pro . '</td>
                                <td>' . $date_cmt . '</td>
                                 <td>  &emsp;
                                 <button style="margin: 0 0 20px 0 ; padding:5px" class="btn btn-danger" data-bs-id="' . $binhluan['id'] . '" data-bs-toggle="modal" data-bs-target="#modalDelete">
                                    Xóa
                                </button> </td>
                            </tr>';
            }
            ?>
        </table>
    </div>
    <!-- <div class="row mb10">
        <input type="button" value="Chọn Tất Cả">
        <input type="button" value="Bỏ Chọn Tất Cả">
        <input type="button" value="Xóa Các Mục Đã Chọn">

    </div> -->

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

</div>

<script>
var modalDelete = document.getElementById('modalDelete')
modalDelete.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-id')
    var link = `?act=xoabl&id=${id}`
    document.getElementById("btn-delete").setAttribute("href", link)
})
</script>