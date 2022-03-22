<form action="?action=update&controller=sinh_vien" method="post">
    <input type="hidden" name="ma" value="<?php echo $each->get_ma() ?>">
    Tên
    <input type="text" name="ten" value="<?php echo $each->get_ten() ?>">
    <br>
    Lớp
    <select name="ma_lop">
        <?php foreach($lops as $lop): ?>
            <option value="<?php echo $lop->get_ma() ?>"
            <?php if($each->get_ma_lop() === $lop->get_ma()) echo "selected" ?>
            >
                <?php echo $lop->get_ten() ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>
    <button>Sửa</button>
</form>