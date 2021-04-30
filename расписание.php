<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Академия Калашникова</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/rasp.css">
</head>
<body>
    <header>
        <div class="header_left_hand">
            <i class="fas fa-bars menu_open" onclick="open_menu()"></i>
            <img src="img/logo_academy.svg" class="logo header_left_hand_inner_block" onclick="location.href='index.php'">
            <div class="page_address header_left_hand_inner_block">Расписание</div>
        </div>
        <div class="header_right_hand">
            <i class="far fa-comments header_right_hand_inner_block"></i>
            <i class="far fa-bell header_right_hand_inner_block"></i>
            <img src="img/avatar.jpg" class="header_right_hand_inner_block avatar">
        </div>
    </header>
    <div class="main-box">
        <div class="menu-box">
            <div class="menu">
                <div class="high_name">
                    <div class="high nice-look" onclick="location.href='index.php'"><i class="fas fa-th-large high_images"></i>Главная</div>
                    <a class="nice-look" onclick="location.href = 'nprav.html'">Направление</a>
                    <a class="nice-look" onclick="location.href = 'tasks'">Задачи</a>
                    <a class="nice-look" onclick="location.reload()">Расписание</a>
                    <a class="nice-look" onclick="location.href = 'news/index.php'">Новости</a>
                </div>
                <div class="high_name">
                    <div class="high nice-look"><i class="fas fa-user-friends high_images"></i>Одногруппники</div>
                    <a class="nice-look">Чаты</a>
                    <a class="nice-look">Моя группа</a>
                </div>
                <div class="high_name">
                    <div class="high nice-look" onclick="location.href='help.php'"><i class="fas fa-comment high_images"></i>Поддержка</div>
                    <a class="nice-look" onclick="location.href='help.php'">FAQ</a>
                    <a class="nice-look" onclick="location.href='help.php'">Задать вопрос</a>
                </div>
            </div>
        </div>
        <div class="cont">
            <img class="rasp" src="img/AsBH8vHB3iA.jpg">
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>