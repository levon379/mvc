<?php 

//var_dump($params['users']['data']);
//require_once  'header.php';
?>
<form action="<?php echo MVC_BASE_URL ?>/users/login" method="post">
    Login: <input type="text" name="login"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="login" name="submit">
</form> 
                    <?php // require_once  'footer.php'; ?>