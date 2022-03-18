<form action="?action=update" method="post">
    <input type="hidden" name="ma" value="<?php echo $each->get_ma() ?>">
    Họ
    <input type="text" name="ho" value="<?php echo $each->get_ho() ?>">
    <br>
    Tên
    <input type="text" name="ten" value="<?php echo $each->get_ten() ?>">
    <br>
    <button>Sửa</button>
</form>