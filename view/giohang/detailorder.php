<div class="col-md-12" style="min-height: 365px;">
<h3>Chi tiết đơn hàng <?= $value['id'] ?></h3>
<table class="table" style="border: 1px black;margin: 20px auto;width: 1300px;">
        <thead style="border: 1px;">
            <tr>
                <th scope="col">STT</th>
               
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Size</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
          
            </tr>
        </thead>
        <tbody >
            <?php foreach($list_detail as $key => $value): ?>
            <tr >
                <th  scope="row">
                    <?php echo $key + 1; ?>
                </th>
                
       
                <td >
                    <?php echo $value['name'] ; ?>
                </td>
                <td >
                    <?php echo $value['size']; ?>
                </td>
                <td >
                    <?php echo number_format($value['price']); ?>₫
                </td>
                <td >
                    <?php echo $value['quantity']; ?>
                </td>
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
    <a style="margin:0 0 0 105px;" href="?act=yourorder">Quay lại đơn hàng</a>
</div>
