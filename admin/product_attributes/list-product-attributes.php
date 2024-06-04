<div class="col-md-10">
    <h3>Chi tiết sản phẩm</h3>
    <a href="?act=addattribute" class="btn btn-success" style="width:125px;background-color:#25bc7c">Thêm chi tiết</a>
    <table class="table" id="table_sta" style="border: 1px black;">
        <thead style="border: 1px;">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Tên size</th>
                <th scope="col">Ngày đăng</th>
                <th scope="col">Số lượng</th>
               
                <th scope="col" >Hành động</th>
            </tr>
        </thead>
        <tbody >
            <?php foreach($list_attributes as $key => $value): ?>
            <tr >
                <th  scope="row">
                    <?php echo $key + 1; ?>
                </th>
              
                <td >
                    <?php echo $value['namepro']; ?>
                </td>
                
                <td >
                    <?php echo $value['namesize']; ?>
                </td>
                <td >
                    <?php echo $value['added_on']; ?>
                </td>
                <td >
                    <?php echo $value['quantity']; ?>
                </td>
               
                
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</div>
