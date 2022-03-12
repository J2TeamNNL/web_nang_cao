<h1>
    Danh sách lớp
</h1>

<a href="?action=create&controller=lop">
    Thêm
</a>

<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Sửa</th>
        <th>Xoá</th>
    </tr>
    <?php foreach ($result as $each){ ?>
        <tr>
            <td><?php echo $each['ma'] ?></td>
            <td><?php echo $each['ten'] ?></td>
            <td>
                <a href="?action=edit&controller=lop&ma=<?php echo $each['ma'] ?>">
                    Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&controller=lop&ma=<?php echo $each['ma'] ?>">
                    Xoá
                </a>
            </td>
        </tr>
    <?php } ?>
</table>