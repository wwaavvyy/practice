<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/login.css'); ?>">
</head>

<body>
    <div class="loginPage">    
        <header>
            <h2>CarRent: Авторизация</h2>
        </header>
        <?php echo validation_errors(); ?>
        
        <?php echo form_open('login/checklogin'); ?>
            <input placeholder="Email" type="email" name="email">
            <input placeholder="Пароль" type="password" name="password">
            <section class="links">
                <button class="button"><span>АВТОРИЗАЦИЯ</span></button>
                <br><br>
            </section>
        </form>
    </div>
</body>
</html>