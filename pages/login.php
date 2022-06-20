<!DOCTYPE html>
<html>
<? include("config.php") ?>
<? include("admin.php") ?>

<head>
    <title>Админка</title>
    <link rel="stylesheet" href="/_sourse/admin.css">
</head>

<body>
    <div class='table'>
        <div class='tale-wrapper'>
            
            <h1 class='table-title'>Войти в панель администратора</h1>
            <div class='table-content'>
                <form action='/' method='post' id='login-form' class='login-form'>
                    <input type='text' placeholder='Логин' class='input' name='login' required><br>
                    <input type='password' placeholder='Пароль' class='input' name='password' required><br>
                    <input type='submit' value='Войти' class='button' name="admin_btn">
                </form>
            </div>
        </div>
    </div>
</body>

</html>