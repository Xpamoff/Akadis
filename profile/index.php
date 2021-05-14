<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Академия Калашникова</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
</head>
<body>
<header>
    <div class="header_left_hand">
        <i class="fas fa-bars menu_open" onclick="open_menu()"></i>
        <img src="../img/logo_academy.svg" class="logo header_left_hand_inner_block" onclick="location.href = '../'">
        <div class="page_address header_left_hand_inner_block">Личный кабинет</div>
    </div>
    <div class="header_right_hand">
        <i class="far fa-comments header_right_hand_inner_block"></i>
        <i class="far fa-bell header_right_hand_inner_block"></i>
        <img src="../img/avatar.jpg" class="header_right_hand_inner_block avatar" onclick="location.reload()">
    </div>
</header>
<div class="main-box">
    <div class="menu-box">
        <div class="menu">
            <div class="high_name">
                <div class="high nice-look" onclick="location.href = '../'"><i class="fas fa-th-large high_images"></i>Главная</div>
                <a class="nice-look" onclick="location.href = '../courses'">Направление</a>
                <a class="nice-look" onclick="location.href = '../tasks'">Задачи</a>
                <a class="nice-look" onclick="location.href = '../schedule'">Расписание</a>
                <a class="nice-look" onclick="location.href = '../news'">Новости</a>
            </div>
            <div class="high_name">
                <div class="high nice-look"><i class="fas fa-user-friends high_images"></i>Одногруппники</div>
                <a class="nice-look">Чаты</a>
                <a class="nice-look">Моя группа</a>
            </div>
            <div class="high_name">
                <div class="high nice-look" onclick="location.href='../support'"><i class="fas fa-comment high_images"></i>Поддержка</div>
                <a class="nice-look" onclick="location.href='../support'">FAQ</a>
                <a class="nice-look" onclick="location.href='../support'">Задать вопрос</a>
            </div>
        </div>
    </div>

        <div class="cont">
            <div class="first-module">
                <section class="profile">
                    Личная информация:
                    <hr>
                    <div class="name">Имя: Шелдон Купер</div>
                    <div class="group">Группа: ИТ_У_21</div>
                    <div class="teacher">Преподаватель: Доктор Стерждес</div>
                    <div class="phone">Телефон: 1-845-123-73-73</div>
                    <div class="email">Почта: sheldon.cooper@gmail.com</div>
                    <a class="link">Изменить</a>
                </section>
                <section class="score">
                    Личный счёт:
                    <hr>
                    <div class="score_place">61 б.</div>
                    <a class="link">Как увеличить баллы?</a>
                </section>
                <section class="pas">
                    Пароль
                    <hr>
                    <a class="link">Изменить</a>
                </section>
            </div>
            <div class="second-module">
                <section class="ava-section">
                    Аватар:
                    <hr>
                    <div class="inner-ava">
                        <img src="../img/avatar.jpg" class="ava">
                        <a class="link">Изменить фото</a>
                    </div>
                </section>
                <section class="exit bb">
                    Выйти с аккаунта
                </section>
                <section class="delete bb">
                    Удалить аккаунт
                </section>
            </div>
                
            </div>
        </div>
    </div>
<footer>
        
        <div class="contact">
            <p>Вы вошли как Шелдон Купер</p>
        <p>Академия Калашников 2021</p>
        <a href="#" class="link">Наверх</a>
        <h4>Приёмная комиссия </h4>
            <div>
                <p></p>
                <p><a href="tel:+73412573810">+7 (3412) 57-38-10</a> </p>
                <p><a href="mailto:ak@kalashnikov.academy">ak@kalashnikov.academy</a> </p>
            </div>
            <div class="icons">
                <a href="https://vk.com/kalashnikov_academ"><img src="img/vk.png" alt=""></a>
                <a href="https://www.youtube.com/channel/UCiReb2TaSAEQAh7kK-a4gYQ"><img src="img/youtube.png" alt=""></a>
                <a href="https://www.instagram.com/academy_kalashnikov/"><img src="img/instagram.png" alt=""></a>
            </div>
        </div>
    </footer>
<script src="../js/main.js"></script>
</body>
</html>