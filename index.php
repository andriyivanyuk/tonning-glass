<!-- <?php include 'sendemail.php'; ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tonning Glass</title>
  <link rel="stylesheet" href="assets/css/app.css" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/assets/owl.theme.default.css" />
  <link rel="stylesheet" href="assets/libs/font-awesome/css/font-awesome.min.css">

</head>

<body>

  <!--alert messages start-->
  <!-- <?php echo $alert; ?> -->
  <!--alert messages end-->

  <div class="backdrop"></div>
  <header class="header-shell">
    <div class="header-shell__upper-content">
      <div class="header-shell__upper-content__navigation-wrapper">
        <div class="header-shell__upper-content__navigation-wrapper__info-section">
          <button class="toggle-button">
            <span class="toggle-button__bar"></span>
            <span class="toggle-button__bar"></span>
            <span class="toggle-button__bar"></span>
          </button>

          <div class="logo-title-shell">
            <img src="/assets/images/logo.svg" alt="" />
            <div class="header-shell__upper-content__navigation-wrapper__info-section__title">
              company title
            </div>
          </div>

          <div class="header-shell__upper-content__navigation-wrapper__info-section__services-wrapper">
            <div class="header-shell__upper-content__navigation-wrapper__info-section__services-wrapper__hours">
              <img class="header-shell__upper-content__navigation-wrapper__info-section__services-wrapper__hours__clock-image" src="./assets/images/phone_24px.svg" alt="" />
              <div class="hours-duration-shell">
                <span class="header-shell__upper-content__navigation-wrapper__info-section__services-wrapper__hours__title">
                  Часы работы
                </span>
                <span class="header-shell__upper-content__navigation-wrapper__info-section__services-wrapper__hours__duration">
                  Пн - Суб: 9:00 - 20:00
                </span>
              </div>
            </div>

            <div class="header-shell__upper-content__navigation-wrapper__info-section__services-wrapper__call-us">
              <img class="header-shell__upper-content__navigation-wrapper__info-section__services-wrapper__call-us__phone-image" src="./assets/images/phone_24px.svg" alt="" />
              <div class="title-number-shell">
                <span class="header-shell__upper-content__navigation-wrapper__info-section__services-wrapper__call-us__title">
                  Свяжитесь с нами
                </span>

                <span class="header-shell__upper-content__navigation-wrapper__info-section__services-wrapper__call-us__number">
                  +38 068-228-4467
                </span>
              </div>
            </div>
            <a href="#appointment-form" class="header-shell__upper-content__navigation-wrapper__info-section__services-wrapper__appointment-btn">
              Назначить встречу
            </a>
          </div>
        </div>
        <nav class="header-shell__upper-content__navigation-wrapper__main-navigation">
          <ul class="header-shell__upper-content__navigation-wrapper__main-navigation__list">
            <li class="header-shell__upper-content__navigation-wrapper__main-navigation__list__item">
              <a href="#">Главная</a>
            </li>
            <li class="header-shell__upper-content__navigation-wrapper__main-navigation__list__item">
              <a href="#who-we-are">О Нас</a>
            </li>
            <li class="header-shell__upper-content__navigation-wrapper__main-navigation__list__item">
              <a class="advantage_link" href="#advantages">Преимущества</a>
            </li>
            <li class="header-shell__upper-content__navigation-wrapper__main-navigation__list__item">
              <a class="works_link" href="#works">Наши работы</a>
            </li>
            <li class="header-shell__upper-content__navigation-wrapper__main-navigation__list__item">
              <a href="#services">Услуги</a>
            </li>
            <li class="header-shell__upper-content__navigation-wrapper__main-navigation__list__item">
              <a href="#contact">Контакт</a>
            </li>
          </ul>
        </nav>

        <nav class="header__shell__mobile-navigation">
          <ul class="header__shell__mobile-navigation__list">
            <li class="header__shell__mobile-navigation__list__item">
              <a href="#">Главная</a>
            </li>
            <li class="header__shell__mobile-navigation__list__item">
              <a href="#">О Нас</a>
            </li>
            <li class="header__shell__mobile-navigation__list__item">
              <a href="#">Преимущества</a>
            </li>
            <li class="header__shell__mobile-navigation__list__item">
              <a href="#">Наши работы</a>
            </li>
            <li class="header__shell__mobile-navigation__list__item">
              <a href="#">Услуги</a>
            </li>
            <li class="header__shell__mobile-navigation__list__item">
              <a href="#">Контакт</a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="header-shell__down-content">
        <p class="header-shell__down-content__title">Тонировка автомобиля</p>
        <button class="header-shell__down-content__action-button">
          <a href="#appointment-form"> Назначить встречу</a>
        </button>
      </div>
    </div>
  </header>

  <section class="about-us-shell">
    <div class="about-us-shell__who-we-are" id="who-we-are">
      <div class="we-are-shell">
        <p class="about-us-shell__who-we-are__uptitle">
          <span class="about-us-shell__who-we-are__uptitle__content">О Нас</span>
        </p>
        <p class="about-us-shell__who-we-are__title">
          Качественные материалы
        </p>
        <p class="about-us-shell__who-we-are__description">
          В нашей работе мы используем только высококачественные тонировочные
          пленки, которые обеспечивают отличную видимость изнутри салона, не
          царапаются, не выгорают, и не теряют цвет в процессе эксплуатации.
        </p>
        <img class="about-us-shell__who-we-are__main-image" src="/assets/images/who-we-are.jpg" alt="" />
      </div>
    </div>

    <div class="container">
      <div id="advantages" class="about-us-shell__promisses">
        <p class="about-us-shell__promisses__to-you">
          <span class="about-us-shell__promisses__to-you__content">
            Преимущества
          </span>
        </p>
        <p class="about-us-shell__promisses__title">Вы получаете:</p>
        <div class="about-us-shell__promisses__services">
          <div class="advantages-row">
            <div class="about-us-shell__promisses__services__element custom-col-rev">
              <div class="advantages-info">
                <div class="advantages-info__title align-content-right">
                  Уменьшение расхода топлива
                </div>
                <div class="advantages-info__description align-content-right">
                  Летом защита от теплового излучения с помощью тонирования
                  стекол значительно уменьшит нагрузку на кондиционер, ведь
                  салон медленнее нагревается. Таким образом, тонировка авто
                  позволит сократить затраты на бензин.
                </div>
              </div>
              <div class="advantages-img">
                <img class="advantages-main-img" src="./assets/images/advantages/fuel.svg" alt="" />
              </div>
            </div>

            <div class="about-us-shell__promisses__services__element custom-media-mr">
              <div class="advantages-img">
                <img class="advantages-main-img" src="./assets/images/advantages/fireproof.svg" alt="" />
              </div>
              <div class="advantages-info">
                <div class="advantages-info__title align-content-left">
                  Защита салона от выгорания
                </div>
                <div class="advantages-info__description align-content-left">
                  Произведя тонирование стекол вашего автомобиля, вы проявите
                  дальновидность, предохранив салон от выгорания. В будущем
                  тонировка авто позволит сэкономить на вынужденной смене
                  обивки салона. В том числе тонирование стекол поможет
                  защитить торпеду от растрескивания, а аудиоаппаратуру,
                  акустику и забытые вещи от дурного глаза.
                </div>
              </div>
            </div>
          </div>

          <div class="advantages-row mr-tp-row">
            <div class="about-us-shell__promisses__services__element custom-media-mr custom-col-rev">
              <div class="advantages-info">
                <div class="advantages-info__title align-content-right">
                  Бронирование фар
                </div>
                <div class="advantages-info__description align-content-right">
                  Защитная пленка позволяет уберечь оптику вашего автомобиля
                  от сколов, царапин, трещин, а также химического воздействия
                  на мойках, сохранив первоначальное свойство светоотдачи и
                  идеальный внешний вид надолго.
                </div>
              </div>
              <div class="advantages-img">
                <img class="advantages-main-img" src="./assets/images/advantages/headlights.svg" alt="" />
              </div>
            </div>

            <div class="about-us-shell__promisses__services__element custom-media-mr">
              <div class="advantages-img custom-title-mr">
                <img class="advantages-main-img" src="./assets/images/advantages/security.svg" alt="" />
              </div>
              <div class="advantages-info">
                <div class="advantages-info__title align-content-left">
                  Повышение безопасности
                </div>
                <div class="advantages-info__description align-content-left">
                  Произведя тонирование стекол вашего автомобиля, вы проявите
                  дальновидность, предохранив салон от выгорания. В будущем
                  тонировка авто позволит сэкономить на вынужденной смене
                  обивки салона. В том числе тонирование стекол поможет
                  защитить торпеду от растрескивания, а аудиоаппаратуру,
                  акустику и забытые вещи от дурного глаза.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="carousel__shell" id="works">
    <div class="container">
      <p class="carousel__shell__uptitle">
        <span class="carousel__shell__uptitle__content">Наши работы</span>
      </p>
    </div>

    <div class="owl-carousel owl-theme">
      <div class="carousel-item">
        <img src="assets/images/carousel/1.jpg" alt="Img" />
      </div>

      <div class="carousel-item">
        <img src="assets/images/carousel/2.jpg" alt="Img" />
      </div>

      <div class="carousel-item">
        <img src="assets/images/carousel/3.jpg" alt="Img" />
      </div>

      <div class="carousel-item">
        <img src="assets/images/carousel/4.jpg" alt="Img" />
      </div>

      <div class="carousel-item">
        <img src="assets/images/carousel/5.jpg" alt="Img" />
      </div>

      <div class="carousel-item">
        <img src="assets/images/carousel/6.jpg" alt="Img" />
      </div>
    </div>
  </section>

  <section class="services__shell" id="services">
    <div class="container">
      <p class="services__shell__uptitle">
        <span class="services__shell__uptitle__content">Услуги</span>
      </p>

      <p class="services__shell__title">Тонирование стекел автомобиля</p>

      <div class="services__shell__list">
        <div class="services__shell__list__item">
          <img src="/assets/images/car_bay.svg" alt="" />
          <p class="services__shell__list__item__title">Тонировка стекел</p>
          <p class="services__shell__list__item__description">
            Самый быстрый способ придать автомобилю индивидуальность,
            подкорректировать внешний вид, добавить изюминку в облик вашей
            машины. И, наконец, тонировка автостекол сделает вид Вашего
            автомобиля завершенным.
          </p>
        </div>

        <div class="services__shell__list__item">
          <img src="/assets/images/car_engine.svg" alt="" />
          <p class="services__shell__list__item__title">Бронирование фар</p>
          <p class="services__shell__list__item__description">
            Защитная пленка позволяет уберечь оптику вашего автомобиля от
            сколов, царапин, трещин, а также химического воздействия на
            мойках, сохранив первоначальное свойство светоотдачи и идеальный
            внешний вид надолго.
          </p>
        </div>

        <div class="services__shell__list__item">
          <img src="/assets/images/car_breaks.svg" alt="" />
          <p class="services__shell__list__item__title">
            Тонировка автомобиля
          </p>
          <p class="services__shell__list__item__description">
            Универсальное решение. Сегодня тонировка машины – это
            конфиденциальность и безопасность
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="appointment-form" class="appointment__shell">
    <div class="container align-form">
      <h4 class="sent-notification"></h4>
      <form method="post" class="appointment__shell__main-form" id="create-appointment">
        <p class="appointment__shell__main-form__title">Назначить встречу</p>
        <div class="row">
          <div class="form-control">
            <label>Имя</label>
            <input class="appointment__input" type="text" name="name" placeholder="Введите имя" />
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <small>Error message</small>
          </div>

          <div class="form-control">
            <label>E-mail</label>
            <input class="appointment__input" type="email" name="email" placeholder="Введите почту" />
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <small>Error message</small>
          </div>

          <div class="form-control">
            <label>Номер Телефона</label>
            <input class="appointment__input" type="number" name="phone" placeholder="Введите номер телефона" />
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <small>Error message</small>
          </div>

          <div class="form-control">
            <label>Выберите услугу</label>
            <select class="appointment-select" name="service">
              <option value="выберите услугу">выберите услугу</option>
              <option value="тонировка стекел">тонировка стекел</option>
              <option value="бронирование фар">бронирование фар</option>
              <option value="тонировка автомобиля">тонировка автомобиля</option>
            </select>
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <small>Error message</small>
          </div>

          <div class="form-control">
            <label>Введите сообщение</label>
            <textarea name="description" class="appointment__textarea" id="description" cols="30" rows="10"></textarea>
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <small>Error message</small>
          </div>
        </div>

        <div class="row align-appointment-btn">
          <button
            name="submit"
            type="submit" 
            class="appointment__btn">
            Назначить встречу
          </button>
        </div>
      </form>
    </div>



  </section>

  <footer class="footer__shell" id="contact">
    <div class="container">
      <div class="footer__shell__elements">
        <div class="footer__shell__elements__general-content">
          <div class="footer__shell__elements__general-content__title">
            <img class="footer__shell__elements__general-content__title-image" src="/assets/images/logo.svg" alt="" />
            <span class="footer__shell__elements__general-content__title-content">Company name
            </span>
          </div>
          <p class="footer__shell__elements__general-content__description">
            This is a blurb about the company sed do eiusmod tempor incididunt
            ut labore et dolore ex magna aliqua.
          </p>
          <div class="footer__shell__elements__general-content__social-links">
            <a href="/"><img src="/assets/images/facebook-link.svg" alt="" /></a>
            <a href="/"><img src="/assets/images/twitter-link.svg" alt="" /></a>
            <a href="/"><img src="/assets/images/instagram-link.svg" alt="" /></a>
            <a href="/"><img src="/assets/images/youtube-link.svg" alt="" /></a>
          </div>
        </div>

        <div class="footer__shell__elements__contact">
          <p class="footer__shell__elements__contact__title">Contact</p>
          <ul class="footer__shell__elements__contact__list">
            <li class="footer__shell__elements__contact__list__item">
              <img class="footer__shell__elements__contact__list__item-image" src="/assets/images/place.svg" alt="" />
              <p class="footer__shell__elements__contact__list__item-description">
                321 Pikes Place Parkway Seattle, WA 54321
              </p>
            </li>

            <li class="footer__shell__elements__contact__list__item">
              <img class="footer__shell__elements__contact__list__item-image" src="/assets/images/smartphone.svg" alt="" />
              <p class="footer__shell__elements__contact__list__item-description">
                (555) 765-4321
              </p>
            </li>

            <li class="footer__shell__elements__contact__list__item">
              <img class="footer__shell__elements__contact__list__item-image" src="/assets/images/email.svg" alt="" />
              <p class="footer__shell__elements__contact__list__item-description">
                Info@company.com
              </p>
            </li>

            <li class="footer__shell__elements__contact__list__item">
              <img class="footer__shell__elements__contact__list__item-image" src="/assets/images/timer.svg" alt="" />
              <p class="footer__shell__elements__contact__list__item-description">
                Mon - Sat: 7:000 am - 6:00 pm
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <section class="footer__copyright">
    <div class="container align-copyright">
      <p class="footer__copyright__title">
        Tagline lorem ipsum dolor sit amet, consectetur adipiscing eiusmod
      </p>
      <p class="footer__copyright__privacy">
        © 2018 Company. Privacy Policy | Terms & Conditions
      </p>
    </div>
  </section>

  <script src="assets/libs/jquery/jquery-3.5.1.min.js"></script>
  <script src="assets/libs//owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>