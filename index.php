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
</head>
<body>
    <header>
        <div class="header_left_hand">
            <i class="fas fa-bars menu_open" onclick="open_menu()"></i>
            <img src="img/logo_academy.svg" class="logo header_left_hand_inner_block" onclick="location.reload()">
            <div class="page_address header_left_hand_inner_block">Главная</div>
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
                    <div class="high nice-look" onclick="location.reload()"><i class="fas fa-th-large high_images"></i>Главная</div>
                    <a class="nice-look" onclick="location.href = 'courses'">Направление</a>
                    <a class="nice-look" onclick="location.href = 'tasks'">Задачи</a>
                    <a class="nice-look" onclick="location.href = 'schedule'">Расписание</a>
                    <a class="nice-look" onclick="location.href = 'news'">Новости</a>
                </div>
                <div class="high_name">
                    <div class="high nice-look"><i class="fas fa-user-friends high_images"></i>Одногруппники</div>
                    <a class="nice-look">Чаты</a>
                    <a class="nice-look">Моя группа</a>
                </div>
                <div class="high_name">
                    <div class="high nice-look" onclick="location.href='support'"><i class="fas fa-comment high_images"></i>Поддержка</div>
                    <a class="nice-look" onclick="location.href='support'">FAQ</a>
                    <a class="nice-look" onclick="location.href='support'">Задать вопрос</a>
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
                </section>
                <section class="score">
                    Личный счёт:
                    <hr>
                    <div class="score_place">61 б.</div>
                </section>
                <section class="schedule">
                    Расписание:
                    <hr>
                    <div class="blizh">Ближайшее занятие: 16.04</div>
                    <div class="next">Следующее занятие: 20.04</div>
                    <a href="расписание.php" class="link">Всё расписание</a>
                </section>
                <section class="tasks">
                    Текущие задачи:
                    <hr>
                    <div class="zadachi">
                        <p>1. Придумать задачу</p>
                        <p>2. Начать выполнение задачи</p>
                        <p>3. Заканчивать делать задачу</p>
                        <p>4. Закончить задачу</p>
                    </div>
                    <a href="tasks/index.php" class="link">Перейти к доске задач</a>
                </section>
            </div>
            <div class="second-module">
                <section class="news">
                    Последняя новость:
                    <hr>
                    <div class="high-news-block">
                        <div class="news-block">
                            <img src="img/XXL.jfif">
                            <div class="higher-name">Двери</div>
                            <div class="preview">Теперь раздвижные двери раздвигаются!!!!!!!!</div>
                            <a href="news/index.php" class="link">Читать далее</a>
                        </div>
                    </div>


                </section>
                <section>
                    Общий рейтинг:
                    <hr>
                    <div class="places">1. Иван Иванов</div>
                    <div class="places">2. Иван Иванов</div>
                    <div class="places">3. Иван Иванов</div>
                    <div class="places">4. Иван Иванов</div>
                    <div class="places">5. Иван Иванов</div>
                    <div class="places">6. Иван Иванов</div>
                    <div class="places">7. Иван Иванов</div>
                    <div class="places">8. Иван Иванов</div>
                    <div class="places">9. Иван Иванов</div>
                    <div class="places">10. Иван Иванов</div>
                </section>
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