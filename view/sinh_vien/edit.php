<form method="post" action="?action=update&controller=sinh_vien">
    <input type="hidden" name="ma" value="<?php echo $each['ma'] ?>">
    Tên
    <input type="text" name="ten" value="<?php echo $each['ten'] ?>">
    <br>
    Lớp
    <select name="ma_lop">
        <?php foreach ($lops as $lop): ?>
            <option value="<?php echo $lop['ma'] ?>" <?php if($lop['ma'] === $each['ma_lop']) echo "selected" ?>>
                <?php echo $lop['ten'] ?>
            </option>
        <?php endforeach ?>
    </select>
    <br>
    <button>Sửa</button>
</form>