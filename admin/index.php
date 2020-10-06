<?php
include 'Init.php';
include $init_lang_en;
?>
<?php
include $init_tpl.'header.php';


?>

    <form action="" class="login">
        <h4 class="text-center">Admin Login</h4>
        <input class="form-control input-lg" type="text" name="user" placeholder="Username" autocomplete="off">
        <input class="form-control input-lg"  type="password" name="password" placeholder="Password" autocomplete="new-password">
        <input class="btn btn-primary btn-block"  type="submit" value="login">
    </form>

<?php
include $init_tpl."footer.php";
?>