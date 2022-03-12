<form method="post" action="?action=store&controller=<?php echo $controller; ?>">
    Tên
    <input type="text" name="ten">
    <br>
    Lớp
    <select name="ma_lop">
        <?php foreach ($lops as $lop): ?>
            <option value="<?php echo $lop['ma'] ?>">
                <?php echo $lop['ten'] ?>
            </option>
        <?php endforeach ?>
    </select>
    <br>
    <button>Thêm</button>
</form>