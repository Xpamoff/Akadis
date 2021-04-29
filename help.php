<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Академия Калашникова</title>
    <link rel="stylesheet" href="css/help.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
    <header>
        <div class="header_left_hand">
            <i class="fas fa-bars menu_open" onclick="open_menu()"></i>
            <img src="img/logo_academy.svg" class="logo header_left_hand_inner_block" onclick="location.href='index.php'">
            <div class="page_address header_left_hand_inner_block">Поддержка</div>
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
                    <a class="nice-look" onclick="location.href = 'расписание.php'">Расписание</a>
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
            <div class="first-module">
                    <h1>Часто задаваемые вопросы</h1>
                    <hr>
				<section class="faq" onclick="location.href='index.php'">
                    Как поменять привязанный телефон?
                </section>
				<section class="faq" onclick="location.href='index.php'">
                    Как поменять привязанную почту?
                </section>
				<section class="faq" onclick="location.href='index.php'">
                    Почему мои баллы не изменяются?
                </section>
				<section class="faq" onclick="location.href='index.php'">
                    Как обратиться к администрации Академии?
                </section>
				<section class="faq" onclick="location.href='index.php'">
                    Другое
                </section>
            </div>
            <div class="second-module">
                <h1>Задать свой вопрос</h1>
				
				<input type="text" placeholder="Введите сюда ваш вопрос" class="vopr" border="none" onclick="border='none'">
				<button onclick="location.href='index.php'" class="faq but"><b>Отправить</b></button>
				</div>
        </div>
    </div>
    <footer>
        <p>Вы вошли как Шелдон Купер</p>
        <p>Академия Калашников 2021</p>
        <a href="#" class="link">Наверх</a>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>