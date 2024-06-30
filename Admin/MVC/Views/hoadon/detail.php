<?php if(isset($data) and $data != null){ ?>
    <?php if($data['0']['TrangThai']==0){ ?>
        <a href="?mod=hoadon&act=xetduyet&id=<?= $data['0']['MaHD'] ?>" class="btn btn-success">Duyệt hóa đơn</a>
    <?php }else{ ?>
<a href="#" onclick="return confirm('Bạn đã duyệt hóa đơn này rồi !');" type="button" class="btn btn-success">Đã duyệt hóa đơn</a>


<?php }?>
<a href="?mod=hoadon&act=delete&id=<?= $data['0']['MaHD'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Đon Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td><?= $row['Ten'] ?></td>
                <td><?= number_format($row['DonGia']) ?> VNĐ</td>
                <td><?= $row['SoLuong'] ?></td>
                <td><?= number_format($row['DonGia'] * $row['SoLuong']) ?> VNĐ</td>
            </tr>
        <?php } ?>
</table>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>