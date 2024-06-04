<div class="col-md-12">
    <h3>Danh sách sản phẩm</h3>
  
    <table class="table" id="table_sta" style="border: 1px black;">
        <thead style="border: 1px;">
            <tr>
                
                <th scope="col">Id bill</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Size</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                
             
            </tr>
        </thead>
        <tbody >
            <?php foreach($list_detail as $key => $value): ?>
            <tr >
                
                <td >
                    <?php echo $value['id_bill']; ?>
                </td>
                <td >
                    <?php echo $value['name'] ; ?>
                </td>
                <td >
                    <?php echo $value['size']; ?>
                </td>
                <td >
                    <?php echo $value['price']; ?>
                </td>
                <td >
                    <?php echo $value['quantity']; ?>
                </td>
               
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</div>


