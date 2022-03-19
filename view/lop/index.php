<a href="?action=create">
    Thêm
</a>
<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Họ Tên</th>
        <th>Sửa</th>
    </tr>
    <?php foreach($arr as $each): ?>
        <tr>
            <td><?php echo $each->show_ma() ?></td>
            <td><?php echo $each->get_ho_ten()  ?></td>
            <td>
                <a href="?action=edit&ma=<?php echo $each->get_ma()  ?>">
                    Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&ma=<?php echo $each->get_ma()  ?>">
                    Xoá
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>