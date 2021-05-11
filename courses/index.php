<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Академия Калашникова</title>
    <link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/naprav.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
</head>
<body>
<header>
    <div class="header_left_hand">
        <i class="fas fa-bars menu_open" onclick="open_menu()"></i>
        <img src="../img/logo_academy.svg" class="logo header_left_hand_inner_block" onclick="location.href = '../'">
        <div class="page_address header_left_hand_inner_block">Направления</div>
    </div>
    <div class="header_right_hand">
        <i class="far fa-comments header_right_hand_inner_block"></i>
        <i class="far fa-bell header_right_hand_inner_block"></i>
        <img src="../img/avatar.jpg" class="header_right_hand_inner_block avatar">
    </div>
</header>
<div class="main-box">
    <div class="menu-box">
        <div class="menu">
            <div class="high_name">
                <div class="high nice-look" onclick="location.href = '../'"><i class="fas fa-th-large high_images"></i>Главная</div>
                <a class="nice-look" onclick="location.reload()">Направление</a>
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
                <div class="high nice-look" onclick="location.href = '../support'"><i class="fas fa-comment high_images"></i>Поддержка</div>
                <a class="nice-look" onclick="location.href = '../support'">FAQ</a>
                <a class="nice-look" onclick="location.href = '../support'">Задать вопрос</a>
            </div>
        </div>
    </div>

        <div class="cont">
            <div class="first-module">
			<section class="naprav">
                    <div class="it">
					<img src="../img/it.svg">
					<h1>АЙТИ</h1>
					<p>Полное погружение в пространство программирования, новейшие технологии в режиме STAND UP</p>
					</div>
                </section>
				<section class="naprav">
                    <div class="prom">
					<img src="../img/prom.svg">
					<h1>ПРОМДИЗАЙН</h1>
					<p>Креативное мышление без границ!</p>
					<p>Узнай, как превратить идею в готовый продукт</p>
                    <p>на курсе «Промышленный дизайн»</p>
					</div>
                </section>
				<section class="naprav">
                    <div class="robo">
					<img src="../img/robo.svg">
					<h1>РОБОТОТЕХНИКА</h1>
					<p>Освой современные технологии производства с помощью образовательной программы «Робототехника»</p>
					</div>
                </section>
            </div>
            <div class="second-module">
			<section class="naprav">
                    <div class="mexa">
					<img src="../img/mexa.svg">
					<h1>МЕХАТРОНИКА</h1>
					<p>Научись конструировать производственные линии и узнай как работает каждый механизм.</p>
					</div>
                </section>
				<section class="naprav">
                    <div class="neiro">
					<img src="../img/neiro.svg">
					<h1>НЕЙРО</h1>
					<p>Искусственный интеллект - это не фантастика из фильма про будущее, это настоящее, которое ты можешь не только изучить, но и изменить.</p>
					<br>
					</div>
                </section>
				<section id="inside" align="center">
				<h1> Запись на занятия </h1>
				<img id="logo_zapisi_na_curs" src="../img/logo_academy.svg">
				<br>
				<input type="text" name="first-name" id="button" placeholder="Имя">
				<br>
				<input type="text" name="last-name" id="button" placeholder="Фамилия">
				<br>
				<input type="text" name="namber" id="button" placeholder="Номер">
				<br>
				<div class="radio_button">
				<ul align="left">
				<li><p><input type="radio"name="curs">АЙТИ</p></li>
				<li><p><input type="radio"name="curs">ПРОМДИЗАЙН</p></li>
				<li><p><input type="radio"name="curs">РОБОТОТЕХНИКА</p></li>
				<li><p><input type="radio"name="curs">МЕХАТРОНИКА</p></li>
				<li><p><input type="radio"name="curs">НЕЙРО</p></li>
				</ul>
				</div>			
				<input type="submit"name="submit"id="button" value="Отправить заявку">			
				</section>
            </div>
        </div>
    </div>
    <footer>
        <p>Вы вошли как Шелдон Купер</p>
        <p>Академия Калашников 2021</p>
        <a href="#">Наверх</a>
    </footer>
<script src="../js/main.js"></script>
</body>
</html>