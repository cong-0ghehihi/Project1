<div class="col-md-12">
    <h3>Danh sách danh mục sản phẩm</h3>
    <a href="index.php?act=addnews" class="btn btn-success">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Bài viết</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Ngày đăng</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list_new as $key => $value): ?>
            <tr>
                <th scope="row">
                    <?php echo $key + 1; ?>
                </th>
                <td style="width: 380px;">
                    <?php echo $value['title']; ?>
                </td>
                <td style="width: 430px;">
                    <?php echo $value['content']; ?>
                </td>
                <td>
                    <img width="100px" src="../img/<?php echo $value['img']; ?>" alt="">
                </td>
                <td>
                    <?php echo $value['date_add']; ?>
                </td>
                <td style="display: grid;">
                    <a style="width: 100px; margin-bottom: 10px;" href="?act=editnews&id=<?php echo $value['id']; ?>" class="btn btn-warning">Sửa</a>


                    <button style="width: 100px;" class="btn btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal"
                        data-bs-target="#modalDelete">
                        Xóa
                    </button>
                    <!-- <button id="btn-delete" data-id="<?php echo $value['id']; ?>">Xóa</button> -->
                </td>
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</div>


<script>
// let btnDelete = document.getElementById("btn-delete");
// btnDelete.addEventListener("click", function() {
//     let check = confirm("Bạn có muốn xóa không?")
//     if (check) {
//         let id = this.getAttribute("data-id")
//         let link = `?act=deletedm&iddm=${id}`
//         window.location.href = link
//     }
// })
</script>

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
    var link = `?act=deletenews&id=${id}`
    document.getElementById("btn-delete").setAttribute("href", link)
})
</script>