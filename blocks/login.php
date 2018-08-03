<?php

    if($_POST['method_name'] == 'auth')
    {
        if($_POST['login'] == $auth['login'] && $_POST['pass'] == $auth['pass'])
        {
            setcookie('token', $auth['token'], strtotime('+1 year'));
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="shortcut icon" href=""/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css"  />

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        html,
        body{
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .for-form{
            width: 320px;

        }
    </style>
</head>

<body>

    <div class="for-form">
        <form action="" method="post" enctype="multipart/form-data" name="myForm" target="_self">
            <input type="hidden" name="method_name" value="auth">
            <label for="">login</label>
            <input type="text" name="login" value=""/>
            <label for="">pass</label>
            <input type="password" name="pass" value=""/>

            <input name="submit" type="submit" class="button " value="готово"/>
        </form>
    </div>


<script type="text/javascript" src=""></script>
</body>
</html>

