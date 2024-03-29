<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="scripts.js"></script>
</head>
<body>
<!-- Обёртка -->
    <header class="bg_blue">
        <header class="wrapper">
            <div class="begin">
                <ul class="menu">
                    <li class="menu__item"><a href="#portfolio">Портфолио</a></li>
                    <li class="menu__item"><a href="#about_me">Обо мне</a></li>
                    <li class="menu__item"><a href="#contacts">Контакты</a></li>
                </ul>
                <div class="begin__text">
                    <div class="header">
                        <h1>Меня зовут Мохьмад</h1>
                        <p class="header__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque esse,
                            eaque officia natus voluptatibus asperiores.</p>
                    </div>
                    <div class="img_man">
                        <img src="image\man.svg">
                    </div>
                </div>
            </div>
        </header>
    </header>

<!-- Портфолио -->
    <div id="portfolio">
        <div class="portfolio__block">
            <div class="portfolio__header">Портфолио</div>
            <div class="sub_header-arrow-container">
                <p class="sub_header">AI DIGITAL CORPORATE PRESENTATION TEMPLATE</p>
                <div class="arrow_block">
                    <div class="arrow">
                        <img src="image\arrow__l.svg">
                    </div>
                    <div class="arrow">
                        <img src="image\arrow__r.svg">
                    </div>
                </div>
            </div>
            <div class="image-portfolio-container">
                <img class="img_interier" src="image\interior.svg">
                <ul class="portfolio_info">
                    <li class="portfolio_info__text">ux / ui design</li>
                    <li class="portfolio_info__text">development</li>
                    <li class="portfolio_info__text">adaptives for tablet and phone</li>
                    <li class="portfolio_info__text">animation support</li>
                    <button class="portfolio__btn"><a>Посмотреть</a></button>
                </ul>
            </div>
        </div>
    </div>

<!-- Обо мне -->
    <section class="bg_blue">
        <div id="about_me">
            <div class="about_me__content">
                <div class="about_me__header">
                    <h3>Обо мне</h3>
                    <p class="about_me__text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="about_me__img">
                    <img src="image\man.svg">
                </div>
            </div>
        </div>
    </section>

<!-- Контакты -->
    <div id="contacts">
        <div class="question">
            <h4>Обсудим проект?</h4>
            <p class="contacts__text">Заполните форму обратной связи</p>
        </div>
        <div class="form">
            <ul class="contacts__ul">
                <li class="contacts__info">Ваше имя</li>
                <li>
                    <input class="form__input" id="input-name" placeholder="Мохьмад" type="text" />
                </li>
                <li class="contacts__info">Ваше email</li>
                <li>
                    <input class="form__input" id="input-email" placeholder="mail@example.com" type="email" />
                </li>
                <li class="contacts__info">Ваше номер</li>
                <li>
                    <input class="form__input" id="input-tel" placeholder="+7(928)777-65-55" type="tel" maxlength="18"
                        oninput="formatPhoneNumber(this)" />
                </li>
                <li><button class="contacts__btn">Отправить</button></li>
                <li>
                    <p class="contacts__p">
                        Или свяжитесь со мной удобным способом связи, расположенным ниже
                    </p>
                </li>
            </ul>
        </div>
        <div>
            <ul class="contacts__link">
                <li><a class="contacts__a" href="https://web.telegram.org/a/" target="_blank">TELEGRAM</a></li>
                <li><a class="contacts__a" href="https://web.whatsapp.com/" target="_blank">WHATSAPP</a></li>
                <li><a class="contacts__a" href="https://www.instagram.com" target="_blank">INSTAGRAM</a></li>
                <li><a class="contacts__a" href="https://e.mail.ru" target="_blank">E-MAIL</a></li>
            </ul>
        </div>
    </div>
</body>
</html>