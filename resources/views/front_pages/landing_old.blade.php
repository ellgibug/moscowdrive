@spaceless()
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Material Style</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="assets/img/favicon.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/preload.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.green-800.min.css">
    <link rel="stylesheet" href="assets/css/width-boxed.min.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>
</head>
<body>
<div id="ms-preload" class="ms-preload">
    <div id="status">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<div class="ms-site-container ms-nav-fixed">
    <nav class="navbar navbar-expand-md navbar-fixed ms-lead-navbar navbar-mode navbar-mode mb-0" id="navbar-lead">
        <div class="container container-full">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
                    <span class="ms-logo ms-logo-white ms-logo-sm">M</span>
                    <span class="ms-title">Moscow
                <strong>Drive</strong>
              </span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a data-scroll class="nav-link active" href="#home">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#services">Обучение</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#portfolio">Адреса</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#pricing">Цены</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#contact">Обратная связь</a>
                    </li>
                </ul>
            </div>
            <!-- navbar-collapse collapse -->
            <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
                <i class="zmdi zmdi-menu"></i>
            </a>
        </div>
        <!-- container -->
    </nav>
    <div class="intro-fixed ms-hero-img-road ms-hero-bg-royal " id="home">
        <div class="intro-fixed-content index-1">
            <div class="container" style="margin-top: 90px">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">M</span>
                            <h1 class="text-center no-m ms-site-title  center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Moscow
                                <span>Drive</span>
                            </h1>
                            <div class="card card-info-inverse index-1 animated zoomInRight animation-delay-7" >
                                <div class="card-body-big color-dark">
                                    <p class="fw-700 uppercase fs-20">Поделись страницей с друзьями и получи скидку на обучение!</p>
                                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,lj"></div>
                                </div>
                            </div>
                            <div class="card index-1 animated zoomInRight animation-delay-7">
                                <div class="card-body-big color-dark">
                                    <p class="fw-700 uppercase fs-20">Акция: приди с другом и получите скидку!</p>
                                    <a href="#" class="animated zoomInUp animation-delay-9 btn btn-raised btn-info">
                                        Подробнее об акции</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card index-1 animated zoomInRight animation-delay-7">
                            <div class="card-body-big color-dark">
                                <p class="fw-700 uppercase text-danger fs-25">Открыт набор на обучение водителей <span class="color-dark"> категории В</span> в вечерние группы и группы выходного дня!</p>
                                <br><p class="fw-700 uppercase"> Практические занятия начинаются сразу после подписания договора, никаких очередей или ожиданий!</p><br>
                                <p class="color-primary fw-500 uppercase">Оставить заявку на обучение</p>
                                <form>
                                    <div class="form-group label-floating mt-2 mb-1">
                                        <div class="input-group center-block">
                                            <label class="control-label" for="ph-subscribe">
                                                <i class="zmdi zmdi-phone"></i> Телефон*</label>
                                            <input type="text" id="ph-subscribe" class="form-control"> </div>
                                    </div>
                                    <div class="form-group label-floating mt-2 mb-1">
                                        <div class="input-group center-block">
                                            <label class="control-label" for="ph-subscribe">
                                                <i class="zmdi zmdi-email"></i> Сообщение</label>
                                            <input type="text" id="ph-subscribe" class="form-control"> </div>
                                    </div>
                                    <button class="btn btn-raised btn-primary btn-block withoutripple" type="button">
                                        Отправить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="text-center mb-2 d-md-none d-lg-block">--}}
                    {{--<a id="go-intro-fixed-next" href="javascript:void(0)" class=" btn-circle btn-circle-raised btn-circle-white animated zoomInUp animation-delay-12">--}}
                        {{--<i class="zmdi zmdi-long-arrow-down"></i>--}}
                    {{--</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
            <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
    </div>
    <div class="bg-white index-1 intro-fixed-next pt-8" style="box-shadow: 0 0 10px rgba(0,0,0,0.5)" id="intro-next">
        <div class="container" >
            {{--<h2 class="text-center">Об Автошколе</h2>--}}

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                        <div class="ms-icon-feature">
                            <div class="ms-icon-feature-icon wow fadeInUp animation-delay-10">
                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="ms-icon-feature-content">
                                <h4>Автошкола работает по программе подготовки водителей транспортных средств категории В с учетом последних изменений от 19.10.2017 и аккредитована в ГИБДД.</h4>
                                {{--<p>Мы работаем по программе подготовки водителей транспортных средств категории В с учетом последних изменений от 19 октября 2017 года.</p>--}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                        <div class="ms-icon-feature">
                            <div class="ms-icon-feature-icon wow fadeInUp animation-delay-10">
                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="ms-icon-feature-content">
                                <h4>Сопровождение на экзамены</h4>
                                {{--<p>...что-то про заявление...</p>--}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                        <div class="ms-icon-feature">
                            <div class="ms-icon-feature-icon wow fadeInUp animation-delay-10">
                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="ms-icon-feature-content">
                                <h4>Пробное занятие перед заключением договора</h4>
                                {{--<p>Посетите пробное занятие перед заключением договора и убедитесь в качестве нашей работы!</p>--}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                        <div class="ms-icon-feature">
                            <div class="ms-icon-feature-icon wow fadeInUp animation-delay-10">
                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="ms-icon-feature-content">
                                <h4>Теория на практике - отработка теоретических материалов на вождении сразу после их изучения в колассе</h4>
                                {{--<p>Отработка на практике теоретического материала сразу же после изучения его в классе или онлайн.</p>--}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                        <div class="ms-icon-feature">
                            <div class="ms-icon-feature-icon wow fadeInUp animation-delay-10">
                                <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-check"></i></span>
                            </div>
                            <div class="ms-icon-feature-content">
                                <h4>Персональное расписание для каждого ученика</h4>
                                {{--<p>Расписание занятий для каждого ученика составляется индивидуально и может быть скорректировано в процессе обучения.</p>--}}
                            </div>
                        </div>
                    </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <div class="ms-icon-feature">
                        <div class="ms-icon-feature-icon wow fadeInUp animation-delay-10">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-check"></i></span>
                        </div>
                        <div class="ms-icon-feature-content">
                            <h4>Отсутствие очередей - занятия по вождению начинаются сразу после заключения договора</h4>
                            {{--<p>Вам не придется ждать начала вождения! Практические занятия начинаются не позднее следующей недели после заключения договора.</p>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <div class="ms-icon-feature">
                        <div class="ms-icon-feature-icon wow fadeInUp animation-delay-10">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-check"></i></span>
                        </div>
                        <div class="ms-icon-feature-content">
                            <h4>Начало и окончание практических занятий около станций метро или там, где Вам удобно</h4>
                            {{--<p>Практические занятия начинаются и заканчиваются около станций метро.</p>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mb-2 ">
                    <div class="ms-icon-feature">
                        <div class="ms-icon-feature-icon wow fadeInUp animation-delay-10">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-check"></i></span>
                        </div>
                        <div class="ms-icon-feature-content">
                            <h4>Новые комфортные автомобили</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <div class="ms-icon-feature">
                        <div class="ms-icon-feature-icon  wow fadeInUp animation-delay-10">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="fa fa-times"></i></span>
                        </div>
                        <div class="ms-icon-feature-content">
                            <h4 class="color-danger">Отсутствие дополнительных денежных вложений и неэффективных элементов обучения</h4>
                        </div>
                    </div>
                </div>

            </div>


            {{--<p class="text-center center-block mb-1 action">Автошкола работает по программе подготовки водителей транспортных средств категории В с учетом последних изменений от 19 октября 2017 года и имеет право обучать вождению в 2018 году.</p>--}}
            {{--<p class="lead text-center center-block mb-1 action"><span class="text-danger">Открыт набор на обучение водителей категории В</span> в вечерние группы и группы выходного дня! Практические занятия начинаются сразу после подписания договора, никаких очередей или ожиданий!</p>--}}
            {{--<p class="lead text-center center-block mb-4">Перед заключением договора Вы можете посетить пробное занятие.</p>--}}

            {{--<div class="border-box">--}}

            {{--<h4 class="color-primary mt-lg-0 action">Посетите пробное занятие перед заключением договора</h4>--}}
            {{--<p>Будущий водитель при выборе автошколы несомненно хочет получить качественное и комфортное обучение. Но каковы гарантии, что обучение в выбранной автошколе будет соответствовать ожиданиям ученика?</p>--}}
            {{--<p>В нашей автошколе есть уникальная возможность посещения пробного занятия перед заключением договора, на котором Вы сможете ознакомиться с тем, как приходят занятия в автошколе, а также уже начать самостоятельно водить автомобиль в городских условиях даже если у Вас нет никакого опыта вождения.</p>--}}
            {{--<p class="text-muted fw-300">*Пробное занятие является платным (60 минут - 800 р.) и проходит на автомобиле с МКПП.</p>--}}
            {{--</div>--}}
            {{--<div class="border-box">--}}
            {{--<h4 class="color-primary mt-lg-0 action">Обучение правилам дорожного движения</h4>--}}
            {{--<p>Вы можете выбрать для себя удобный способ теоретического обучения:</p>--}}
            {{--<ul>--}}
                {{--<li>Вечерние группы по рабочим дням</li>--}}
                {{--<li>Группы выходного дня</li>--}}
                {{--<li>Полноценное online обучение по Skype - если Вы не можете посетить лекцию в классе, то Вы можете посмотреть ее через интернет и задать все интересующие Вас вопросы</li>--}}
            {{--</ul>--}}
            {{--<p>Каждая форма обучения включает в себя полный курс ПДД со всеми текущими изменениямис подробным разбором реальных дорожных ситуаций, полезными советами начинающим водителям, а также уникальную методику теоретического обучения, которая позволяет максимально быстро и качественно усвоить результат - обучение теории на практике.</p>--}}
            {{--<p>После изучения теоретического материала в классе, Вы сможете сразу закрепить его во время реального вождения в городе под руководством опытного инструктора - побывать на сложных перекрестках, светофорах, перекрестках с круговым движением и т.д.</p>--}}
            {{--</div>--}}
            {{--<div class="border-box">--}}
            {{--<h4 class="color-primary mt-lg-0 action">Расписание практических занятий</h4>--}}
            {{--<p>Практические занятие проходят 7 дней в неделю без перерывов с 07:00 до 22:00.</p>--}}
            {{--<p>График занятий является составляется индивидуально для каждого ученика и может быть скорректирован в процессе обучения.</p>--}}
            {{--</div>--}}
            <div class="text-center mt-2">
                <a href="#" class="btn btn-xlg btn-raised btn-primary color-white">
                    поступление в автошколу
                </a>
            </div>



        </div>
        <!-- container -->
        <section id="services" class="mt-6">
            <div class="wrap ms-hero-bg-info">
                <div class="container">
                    <div class="text-center mb-4">
                        <h2 class="text-center mb-2">Обучение</h2>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    {{--<h3>Пробное занятие перед заключением договора</h3>--}}
                                    {{--<p>Будущий водитель при выборе автошколы несомненно хочет получить качественное и комфортное обучение. Но каковы гарантии, что обучение в выбранной автошколе будет соответствовать ожиданиям ученика?</p>--}}
                                    {{--<p>В нашей автошколе есть уникальная возможность посещения пробного занятия перед заключением договора, на котором Вы сможете ознакомиться с тем, как приходят занятия в автошколе, а также уже начать самостоятельно водить автомобиль в городских условиях даже если у Вас нет никакого опыта вождения.</p>--}}
                                    {{--<p class="text-muted fw-300">*Пробное занятие является платным (60 минут - 800 р.) и проходит на автомобиле с МКПП.</p>--}}
                                    {{--<hr>--}}
                                    <h3>Обучение вождению с нуля до получения прав и самостоятельного вождения</h3>
                                    <p>Если у Вас нет никакого опыта вождения и Вы хотите получить права категории В, то Вам необходима качественная подготовка не только к экзаменам для получения прав, но и уроки полноценного вождения в на городских улицах. В этом Вам помогут инструкторы автошколы, которые не только подготовят Вас к сдаче экзамена на автодроме и на маршруте ГИБДД, но и проводят занятия в условиях различных погодных и дорожных ситуаций, а также по Вашим маршрутам. В реазультате Вы сможете смостоятельно сдать экзамены, а главное уверенно управлять автомобилем на дороге.</p>
                                    <p>Вы можете заниматься на автомобилях с механической (МКПП) или автоматической (АКПП) трансмиссиях.</p>
                                    <p>Приглашаем Вас посетить пробное занятие перед заключением договора.</p>
                                    <p>Рекомендуемая программа обучения - <span class="fw-700">полный курс</span> вождения на МКПП или АКПП, после которого Вы сможете самостоятельно управлять автомобилем в любой дорожной ситуации.</p>
                                    <hr>
                                    <h3>Обучение вождению по ускоренному курсу</h3>
                                    <p>У Вас уже есть опыт вождения, Вы закончили автошколу, имеете права категори В, но у Вас недостаточно практики или Вы не уверенны в своих знаниях? Тогда Вы можете пройти <span class="fw-700">ускоренный курс</span> обучения на автомобилях с МКПП или АКПП, который составляет 25 астрономических часов вождения и полноценные занятия по теории.</p>
                                    <hr>
                                    <h3>Дополнительные занятия по вождению на автодроме, маршрутам ГИБДД или Вашим маршрутам</h3>
                                    <p>Вам необходимо несколько занятий с инструктором для подготовки к экзаменам или для повышения уровня качества своего вождения? Вы можете взять неограниченное число часов по вождению на автомобилях с МКПП или АКПП.</p>
                                    <p>Для учеников, прошедших полный или сокращенный курсы обучения 1 астрономический час занятий на автомобиле с МКПП составляет 800 р., на автомобиле с АКПП - 1000 р. </p><p>Для тех, кто не проходил полноценное обучение в автошколе, 1 астрономический час занятий на автомобиле с МКПП составляет 1000 р., на автомобиле с АКПП - 1200 р.</p>
                                    <hr>
                                    <h3>Уроки городской парковки</h3>
                                    <p>Нередко водители, а особенно начинающие, испытывают проблемы с парковкой из-за ограниченного парковочного пространства или из-за отсутствия чувства габаритов своего автомобиля, что может привести в дальнейшем к неприятным последствиям.</p>
                                    <p>Вы чувствуете себя не достаточно уверенно, но хотите быстро и качественно парковаться - инстукторы автошколы помогут Вам в этом!</p>
                                    <p>После прохождения курса городской парковки на автомобилях с МКПП или АКПП Вы научитесь быстро и уверенно научитесь:</p>
                                    <ul>
                                        <li>параллельной парковке</li>
                                        <li>заезду в гараж или парковке задним ходом</li>
                                        <li>маневрированию в ограниченном пространстве</li>
                                        <li>оценке габаритов автомобиля</li>
                                    </ul>
                                    <p>Для учеников, прошедших курс обучения в автошколе, существует <span class="fw-700">курс парковки на автомобиле ученика.</span></p>
                                    <hr>
                                    <h3>Уроки на автомобиле ученика</h3>
                                    <p>Для учеников, прошедших полный или сокращенный курс обучения, автошкола предлагает проводить занятия на автомобиле ученика. Это поможет начинающему водителю чувствовать себя абсолютно уверенно как на оживленных улицах и скоростных трассах, так и в тесных дворах и на парковках. </p>
                                    <hr>
                                    <h3>Помощь в покупке машины</h3>
                                    <p>Автошола оказывает консультации по: </p>
                                    <ul>
                                        <li>Выбор автомобиля (нового или б/у)</li>
                                        <li>Прохождение ТО</li>
                                        <li>Оформление автомобиля в ГИБДД ???</li>
                                        <li>Оформление автомобиля в страховых компаниях</li>
                                        <li>Перегон автомобиля с места покупки</li>
                                    </ul>
                                    <hr>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="">
            <div class="wrap">
                <div class="container index-1">
                    <div class="text-center mw-800 center-block">
                        <h2 class="wow">Адреса</h2>
                        <p class="lead">Discover our projects and the rigorous process of creation.
                            We are backed by 20 years of research.</p>
                    </div>

                </div>
            </div>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afba6560ec50df200160c330bf2f73c6a69d68a05bc6ed1732b5ef8e0c2bb264b&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
        </section>
        <section id="pricing">
            <div class="wrap ms-hero-bg-info">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="text-center mb-2">Цены Автошколы</h2>
                        <p>Цены в автошколе являются фиксированными и не повышаются на всем протяжении обучения. В указанные цены уже включены все сборы, они являются итоговыми.</p>
                        <p class="lead lead-lg color-danger">Оставь свой отзыв в социальных сетях с хэштэгом <span class="action">#АВТОШКОЛА</span>, покажи инструктору на занятии и получи скидку на обучение!</p>
                    </div>

                    <div class="row no-gutters no-shadow">
                        <div class="col-xl-3 col-md-6">
                            <div class="price-table price-table-info">
                                <header class="price-table-header">
                                    <span class="price-table-category">Курс АКПП</span>
                                    <h3>
                                        <sup>от</sup>37 800
                                        <sub>руб.</sub>
                                    </h3>
                                </header>
                                <div class="price-table-body">
                                    <ul class="price-table-list">
                                        <li>
                                            <span class="fw-700">Сокращенный курс обучения</span>
                                            <br>
                                            Теория + 25 часов практики<br>
                                            <span class="action">42 000 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Сокращенный курс обучения по акции</span>
                                            <br>
                                            Со скидкой 10% <br>
                                            <span class="action">37 800 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Полный курс обучения</span>
                                            <br>
                                            Теория + 40 часов практики<br>
                                            <span class="action">57 000 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Полный курс обучения по акции</span>
                                            <br>
                                            Со скидкой 10% <br>
                                            <span class="action">51 300 </span>руб.
                                        </li>

                                    </ul>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-info btn-raised">Записаться!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="price-table price-table-success prominent-lg">
                                <header class="price-table-header">
                                    <span class="price-table-category">Курс МКПП</span>
                                    <h3>
                                        <sup>от</sup>33 300
                                        <sub>руб.</sub>
                                    </h3>
                                </header>
                                <div class="price-table-body">
                                    <ul class="price-table-list">
                                        <li>
                                            <span class="fw-700">Сокращенный курс обучения</span>
                                            <br>
                                            Теория + 25 часов практики<br>
                                            <span class="action">37 000 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Сокращенный курс обучения по акции</span>
                                            <br>
                                            Со скидкой 10% <br>
                                            <span class="action">33 300 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Полный курс обучения</span>
                                            <br>
                                            Теория + 40 часов практики<br>
                                            <span class="action">49 000 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Полный курс обучения по акции</span>
                                            <br>
                                            Со скидкой 10% <br>
                                            <span class="action">44 100 </span>руб.
                                        </li>

                                    </ul>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-info btn-raised">Записаться!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="price-table price-table-danger">
                                <header class="price-table-header">
                                    <span class="price-table-category">Парковка АКПП</span>
                                    <h3>
                                        <sup>от</sup>5 700
                                        <sub>руб.</sub>
                                    </h3>
                                </header>
                                <div class="price-table-body">
                                    <ul class="price-table-list">
                                        <li>
                                            <span class="fw-700">Пакет "Стандарт"</span>
                                            <br>
                                            5 часов<br>
                                            <span class="action">6 000 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Пакет "Стандарт"</span>
                                            <br>
                                            Со скидкой 5% <br>
                                            <span class="action">5 700 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Пакет "Максимум"</span>
                                            <br>
                                            10 часов<br>
                                            <span class="action">12 000 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Пакет "Максимум"</span>
                                            <br>
                                            Со скидкой 5% <br>
                                            <span class="action">11 400 </span>руб.
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-info btn-raised">Записаться!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="price-table price-table-royal prominent-lg">
                                <header class="price-table-header">
                                    <span class="price-table-category">Парковка МКПП</span>
                                    <h3>
                                        <sup>от</sup>4 750
                                        <sub>руб.</sub>
                                    </h3>
                                </header>
                                <div class="price-table-body">
                                    <ul class="price-table-list">
                                        <li>
                                            <span class="fw-700">Пакет "Стандарт"</span>
                                            <br>
                                            5 часов<br>
                                            <span class="action">5 000 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Пакет "Стандарт"</span>
                                            <br>
                                            Со скидкой 5% <br>
                                            <span class="action">4 750 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Пакет "Максимум"</span>
                                            <br>
                                            10 часов<br>
                                            <span class="action">10 000 </span>руб.
                                        </li>
                                        <li>
                                            <span class="fw-700">Пакет "Максимум"</span>
                                            <br>
                                            Со скидкой 5% <br>
                                            <span class="action">9 500 </span>руб.
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-info btn-raised">Записаться!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row pricing-table-container">
                        <div class="col-md-4 d-none d-lg-block pricing-col">
                            <div class="pricing-table pricing-table-description">
                                <div class="pricing-table-head">
                                    <h2> Наименование услуги
                                    </h2>
                                </div>
                                <ul class="pricing-table-content">
                                    <li>Теоретические занятия</li>
                                    <li>МКПП Практические занятия (1 час)</li>
                                    <li>АКПП Практические занятия (1 час) </li>
                                    <li>Практические занятия на внедорожнике МКПП (1 час)</li>
                                    <li>Практические занятия на внедорожнике АКПП (1 час) </li>
                                    <li>Практические занятия на автомобиле ученика</li>
                                    <li>Занятия по уличной парковке МКПП (5 часов)</li>
                                    <li>Занятия по уличной парковке АКПП (5 часов)</li>
                                    <li>Занятия по уличной парковке МКПП (10 часов)</li>
                                    <li>Занятия по уличной парковке АКПП (10 часов)</li>
                                    <li>Поддержка на протяжении обучения</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pricing-col">
                            <div class="pricing-table">
                                <div class="pricing-table-head">
                                    <h2> Для ученика,
                                        <span>который заключил договор на полное обучение в автошколе</span>
                                    </h2>
                                </div>
                                <ul class="pricing-table-content">
                                    <li> 17 000 р.
                                        <span class="d-block d-lg-none">Теоретические занятия</span>
                                    </li>
                                    <li> 800 р.
                                        <span class="d-block d-lg-none">МКПП Практические занятия (1 час)</span>
                                    </li>
                                    <li> 1 000 р.
                                        <span class="d-block d-lg-none">АКПП Практические занятия (1 час)</span>
                                    </li>
                                    <li>
                                        1 200 р.
                                        <span class="d-block d-lg-none">Практические занятия на внедорожнике МКПП (1 час)</span>
                                    </li>
                                    <li> 1 500 р.
                                        <span class="d-block d-lg-none">Практические занятия на внедорожнике АКПП (1 час)</span>
                                    </li>
                                    <li> по запросу
                                        <span class="d-block d-lg-none">Практические занятия на автомобиле ученика</span>
                                    </li>
                                    <li>
                                        5 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (5 часов)</span>
                                    </li>
                                    <li>
                                        6 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (5 часов)</span>
                                    </li>
                                    <li>
                                        10 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (10 часов)</span>
                                    </li>
                                    <li>
                                        12 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (10 часов)</span>
                                    </li>
                                    <li>
                                        бесплатно
                                        <span class="d-block d-lg-none">Поддержка на протяжении обучения</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pricing-col">
                            <div class="pricing-table">
                                <div class="pricing-table-head">
                                    <h2> Для ученика,
                                        <span>который НЕ ЗАКЛЮЧИЛ договор на полное обучение в автошколе</span>
                                    </h2>

                                </div>
                                <ul class="pricing-table-content">
                                    <li>
                                        <i class="fa fa-times"></i>
                                        <span class="d-block d-lg-none">Теоретические занятия</span>
                                    </li>
                                    <li> 1 000 р.
                                        <span class="d-block d-lg-none">МКПП Практические занятия (1 час)</span>
                                    </li>
                                    <li> 1 200 р.
                                        <span class="d-block d-lg-none">АКПП Практические занятия (1 час)</span>
                                    </li>
                                    <li>
                                        1 500 p.
                                        <span class="d-block d-lg-none">Практические занятия на внедорожнике МКПП (1 час)</span>
                                    </li>
                                    <li> 1 700 р.
                                        <span class="d-block d-lg-none">Практические занятия на внедорожнике АКПП (1 час)</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-times"></i>
                                        <span class="d-block d-lg-none">Практические занятия на автомобиле ученика</span>
                                    </li>
                                    <li>
                                        5 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (5 часов)</span>
                                    </li>
                                    <li>
                                        6 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (5 часов)</span>
                                    </li>
                                    <li>
                                        10 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (10 часов)</span>
                                    </li>
                                    <li>
                                        12 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (10 часов)</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-times"></i>
                                        <span class="d-block d-lg-none">Поддержка на протяжении обучения</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <a href="#" class="btn btn-xlg btn-raised btn-white color-primary">
                           Подробнее о ценах
                        </a>
                    </div>
                </div>
                <!--container -->
            </div>
        </section>

        <section id="contact" class="mt-6">
            <div class="wrap">
                <div class="container">
                    <h2 class="text-center mb-2">Свяжитесь с нами</h2>
                    <p class="text-center center-block mt-2 mb-2 mw-800">Оставьте свое сообщение, запишитесь на занятия или закажите обратный звонок, мы перезвоним Вам максимально быстро!</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <fieldset class="container">
                                            <div class="form-group row">
                                                <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Имя</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="inputName" placeholder="Имя"> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputBack" autocomplete="false" class="col-lg-2 control-label">Способ связи</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="inputBack" placeholder="Email и / или телефон"> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Тема сообщения</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="inputSubject" placeholder="Тема сообщения"> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="textArea" class="col-lg-2 control-label">Сообщение</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" rows="3" id="textArea" placeholder="Ваше сообщение"></textarea>
                                                </div>
                                            </div>
                                            <div class="text-center form-group">
                                                <button type="submit" class="btn btn-raised btn-primary">Отправить</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container -->
            </div>
        </section>
        <footer class="ms-footer">
            <div class="container">
                <p>Copyright &copy; Moscow Drive 2018</p>
            </div>
        </footer>
        <div class="btn-back-top">
            <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
                <i class="zmdi zmdi-long-arrow-up"></i>
            </a>
        </div>
    </div>
</div>
<!-- ms-site-container -->
<div class="ms-slidebar sb-slidebar sb-left sb-momentum-scrolling sb-style-overlay">
    <header class="ms-slidebar-header">
        <div class="ms-slidebar-login">
            <a href="javascript:void(0)" class="withripple">
                <i class="zmdi zmdi-account"></i> Login</a>
            <a href="javascript:void(0)" class="withripple">
                <i class="zmdi zmdi-account-add"></i> Register</a>
        </div>
        <div class="ms-slidebar-title">
            <form class="search-form">
                <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
                <label for="search-box-slidebar">
                    <i class="zmdi zmdi-search"></i>
                </label>
            </form>
            <div class="ms-slidebar-t">
                <span class="ms-logo ms-logo-sm">M</span>
                <h3>Material
                    <span>Style</span>
                </h3>
            </div>
        </div>
    </header>
    <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
        <li>
            <a data-scroll class="link" href="#home">
                <i class="zmdi zmdi-home"></i> Home</a>
        </li>
        <li>
            <a data-scroll class="link" href="#services">
                <i class="zmdi zmdi-flight-takeoff"></i> Services</a>
        </li>
        <li>
            <a data-scroll class="link" href="#portfolio">
                <i class="zmdi zmdi-desktop-mac"></i> Portfolio</a>
        </li>
        <li>
            <a data-scroll class="link" href="#pricing">
                <i class="zmdi zmdi-money-box"></i> Pricing</a>
        </li>
        <li>
            <a data-scroll class="link" href="#about">
                <i class="zmdi zmdi-info-outline"></i> About Us</a>
        </li>
        <li>
            <a data-scroll class="link" href="#team">
                <i class="zmdi zmdi-accounts"></i> Team</a>
        </li>
        <li>
            <a data-scroll class="link" href="#contact">
                <i class="zmdi zmdi-email"></i> Contact</a>
        </li>
        <li>
            <a data-scroll class="link" href="index.html">
                <i class="zmdi zmdi-swap"></i> Main Site</a>
        </li>
    </ul>
    <div class="ms-slidebar-social ms-slidebar-block">
        <h4 class="ms-slidebar-block-title">Social Links</h4>
        <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-facebook">
                <i class="zmdi zmdi-facebook"></i>
                <span class="badge-pill badge-pill-pink">12</span>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-twitter">
                <i class="zmdi zmdi-twitter"></i>
                <span class="badge-pill badge-pill-pink">4</span>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-youtube">
                <i class="zmdi zmdi-youtube"></i>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-instagram">
                <i class="zmdi zmdi-instagram"></i>
            </a>
        </div>
    </div>
</div>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/lead.js"></script>
</body>
</html>


{{ die() }}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Material Style</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="assets/img/favicon.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/preload.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.green-800.min.css">
    <link rel="stylesheet" href="assets/css/width-boxed.min.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="ms-preload" class="ms-preload">
    <div id="status">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<div class="ms-site-container ms-nav-fixed">
    <nav class="navbar navbar-expand-md navbar-fixed ms-lead-navbar navbar-mode navbar-mode mb-0" id="navbar-lead">
        <div class="container container-full">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
                    <span class="ms-logo ms-logo-white ms-logo-sm">A</span>
                    <span class="ms-title">Авто
                <strong>Школа</strong>
              </span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#home">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#about">Об автошколе</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#addresses">Занятия</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#pricing">Цены</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#contact">Свяжитесь с нами</a>
                    </li>
                </ul>
            </div>
            <!-- navbar-collapse collapse -->
            <a href="#" class="ms-toggle-left btn-navbar-menu">
                <i class="zmdi zmdi-menu"></i>
            </a>
        </div>
        <!-- container -->
    </nav>
    <div class="intro-full ms-hero-img-road ms-hero-bg-primary color-white ms-bg-fixed" id="home">
        <div class="intro-full-content index-1">
            <div class="container">
                {{--<div class="text-center mb-4">--}}
                    {{--<h1 class="ms-site-title color-white center-block ms-site-title-lg mt-2 mb-5 text-uppercase fw-700">Название автошколы</h1>--}}

                    {{--<p class="lead lead-lg color-white text-center center-block mt-2 mw-800 text-uppercase fw-300">Текст о--}}
                        {{--<span class="color-warning">преимуществах</span> автошколы</p>--}}
                {{--</div>--}}
                {{--<div class="card card-light-inverse">--}}
                    {{--<div class="card-body">--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit deleniti, amet quib us neque recusandae commodi.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="text-center mb-2">--}}
                    {{--<a data-scroll class="btn btn-xlg btn-raised btn-white color-primary" href="#contact">--}}
                        {{--<i class="fa fa-rocket"></i> Записаться!</a>--}}
                {{--</div>--}}
            </div>

        </div>
    </div>
    <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
            <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
    </div>

    <section id="about">
        <div class="container text-justify wrap ">
            <h2 class="right-line">Об Автошколе</h2>
            <div class="row">
                <div class="col-lg-6">
                    <p>Автошкола "..." работает по новым правилам и имеет право обучать вождению по программам подготовки водителей в 2018 году.</p>
                    <p>Обучение в автошколе проходит на новых иномарках с механической или автоматической коробкой передач. Также в автошколе можно пройти обучение на полноприводных внедорожниках.</p>

                    <p>Перед записью в автошколу Вы можете посетить <a data-scroll class="fw-700" href="#contact">пробное занятие</a> с инструктором, после которого, при Вашем желании будет заключен договор на обучение.</p>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li>Полный теоретический курс ПДД с возможностью обучаться on-line и отработкой знаний на практике</li>
                        <li>Отработка навыков вождения на специализированной площадке (автодром)</li>
                        <li>Вождение в городе по любым маршрутам</li>
                        <li>Поддержка инструктора и администарции на весь перииод обучения </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="addresses">
        <div class="container text-justify wrap">
            <h2 class="right-line">Адреса занятий</h2>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="color-primary">Описание</h3>
                    <p>Автошкола "Автошкола" осуществляет профессиональную программу подготовки водителей <span class="color-warning">категории В</span> на автомобилях с механической или автоматической трансмиссией в условиях города. </p>
                    <p>Перед записью в автошколу Вы можете посетить <a data-scroll class="fw-500" href="#contact">пробное занятие</a> с инструктором, после которого, при Вашем желании будет заключен договор на обучение.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="color-primary">Преимущества</h3>
                    <ul>
                        <li>Полный теоретический курс ПДД с возможностью обучаться on-line и отработкой знаний на практике</li>
                        <li>Отработка навыков вождения на специализированной площадке (автодром)</li>
                        <li>Вождение в городе по любым маршрутам</li>
                        <li>Поддержка инструктора и администарции на весь перииод обучения </li>
                    </ul>
                </div>
            </div>
            стащить всю инфу с сайтов
            вставить про адреса




        </div>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afba6560ec50df200160c330bf2f73c6a69d68a05bc6ed1732b5ef8e0c2bb264b&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
    </section>


    <section id="pricing">

            <div class="wrap ms-hero-img-city ms-hero-bg-dark ms-bg-fixed">

                <div class="container color-dark">
                    <div class="text-center mt-5">
                        <h2 class="text-center color-white mb-2">Наши цены</h2>
                        <p class="lead lead-lg color-white text-center center-block mt-2 mb-2 mw-800 text-uppercase fw-300">Цены в автошколе являеются <span class="color-warning">фиксированными и не повышаются</span> во время всего процесса обучения.</p>
                        <p class="color-white">
                            * 1 час = 60 минут<br>
                            * минимальное время занятий - 2 часа<br>
                            * топливный сбор и гсм уже включены в стоимость
                        </p>
                    </div>
                    <div class="row pricing-table-container">
                        <div class="col-md-4 d-none d-lg-block pricing-col">
                            <div class="pricing-table pricing-table-description">
                                <div class="pricing-table-head">
                                    <h2> Наименование услуги
                                    </h2>
                                </div>
                                <ul class="pricing-table-content">
                                    <li>Теоретические занятия</li>
                                    <li>МКПП Практические занятия (1 час)</li>
                                    <li>АКПП Практические занятия (1 час) </li>
                                    <li>Практические занятия на внедорожнике МКПП (1 час)</li>
                                    <li>Практические занятия на внедорожнике АКПП (1 час) </li>
                                    <li>Практические занятия на автомобиле ученика</li>
                                    <li>Занятия по уличной парковке МКПП (5 часов)</li>
                                    <li>Занятия по уличной парковке АКПП (5 часов)</li>
                                    <li>Занятия по уличной парковке МКПП (10 часов)</li>
                                    <li>Занятия по уличной парковке АКПП (10 часов)</li>
                                    <li>Поддержка инструктором и администрацией на протяжении обучения</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pricing-col">
                            <div class="pricing-table">
                                <div class="pricing-table-head">
                                    <h2> Для ученика,
                                        <span>который заключил договор на полное обучение в автошколе</span>
                                    </h2>
                                </div>
                                <ul class="pricing-table-content">
                                    <li> 17 000 р.
                                        <span class="d-block d-lg-none">Теоретические занятия</span>
                                    </li>
                                    <li> 800 р.
                                        <span class="d-block d-lg-none">МКПП Практические занятия (1 час)</span>
                                    </li>
                                    <li> 1 000 р.
                                        <span class="d-block d-lg-none">АКПП Практические занятия (1 час)</span>
                                    </li>
                                    <li>
                                        1 200 р.
                                        <span class="d-block d-lg-none">Практические занятия на внедорожнике МКПП (1 час)</span>
                                    </li>
                                    <li> 1 500 р.
                                        <span class="d-block d-lg-none">Практические занятия на внедорожнике АКПП (1 час)</span>
                                    </li>
                                    <li> по запросу
                                        <span class="d-block d-lg-none">Практические занятия на автомобиле ученика</span>
                                    </li>
                                    <li>
                                        5 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (5 часов)</span>
                                    </li>
                                    <li>
                                        6 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (5 часов)</span>
                                    </li>
                                    <li>
                                        10 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (10 часов)</span>
                                    </li>
                                    <li>
                                        12 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (10 часов)</span>
                                    </li>
                                    <li>
                                        бесплатно
                                        <span class="d-block d-lg-none">Поддержка инструктором и администрацией на протяжении обучения</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pricing-col">
                            <div class="pricing-table">
                                <div class="pricing-table-head">
                                    <h2> Для ученика,
                                        <span>который НЕ ЗАКЛЮЧИЛ договор на полное обучение в автошколе</span>
                                    </h2>

                                </div>
                                <ul class="pricing-table-content">
                                    <li>
                                        <i class="fa fa-times"></i>
                                        <span class="d-block d-lg-none">Теоретические занятия</span>
                                    </li>
                                    <li> 1 000 р.
                                        <span class="d-block d-lg-none">МКПП Практические занятия (1 час)</span>
                                    </li>
                                    <li> 1 200 р.
                                        <span class="d-block d-lg-none">АКПП Практические занятия (1 час)</span>
                                    </li>
                                    <li>
                                        1 500 p.
                                        <span class="d-block d-lg-none">Практические занятия на внедорожнике МКПП (1 час)</span>
                                    </li>
                                    <li> 1 700 р.
                                        <span class="d-block d-lg-none">Практические занятия на внедорожнике АКПП (1 час)</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-times"></i>
                                        <span class="d-block d-lg-none">Практические занятия на автомобиле ученика</span>
                                    </li>
                                    <li>
                                        5 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (5 часов)</span>
                                    </li>
                                    <li>
                                        6 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (5 часов)</span>
                                    </li>
                                    <li>
                                        10 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (10 часов)</span>
                                    </li>
                                    <li>
                                        12 000 р.
                                        <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (10 часов)</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-times"></i>
                                        <span class="d-block d-lg-none">Поддержка инструктором и администрацией на протяжении обучения</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="text-center">
                        <p class="text-action">
                            Специальное предложение: оставь свой отзыв в социальных сетях с хэштэгом #....., покажи инструктору на занятиях и получи скидку 10%!
                        </p>
                    </div>
                </div>
                <!-- container -->
            </div>




        </section>


    <section id="contact">
            <div class="wrap bg-warning color-dark">
                <div class="container">
                    <h2 class="text-center color-white mb-2">Свяжитесь с нами</h2>
                    <p class="color-white text-center center-block mt-2 mb-2 mw-800 fw-300">Оставьте свое сообщение, запишитесь на занятия или закажите обратный звонок, мы перезвоним Вам максимально быстро!</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <fieldset class="container">
                                            <div class="form-group row">
                                                <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Имя</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="inputName" placeholder="Имя"> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Email</label>
                                                <div class="col-lg-9">
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email"> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Тема сообщения</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="inputSubject" placeholder="Тема сообщения"> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="textArea" class="col-lg-2 control-label">Сообщение</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" rows="3" id="textArea" placeholder="Ваше сообщение ..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row justify-content-end">
                                                <div class="col-lg-10">
                                                    <button type="submit" class="btn btn-raised btn-primary">Отправить</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container -->
            </div>
        </section>

    <footer class="ms-footer">
        <div class="container">
            <p>Copyright &copy; Material Style 2017</p>
        </div>
    </footer>

    <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
            <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
    </div>

    </div>
</div>
<!-- ms-site-container -->
<div class="ms-slidebar sb-slidebar sb-left sb-momentum-scrolling sb-style-overlay">
    <header class="ms-slidebar-header">
        <div class="ms-slidebar-login">
            <a href="javascript:void(0)" class="withripple">
                <i class="zmdi zmdi-account"></i> Login</a>
            <a href="javascript:void(0)" class="withripple">
                <i class="zmdi zmdi-account-add"></i> Register</a>
        </div>
        <div class="ms-slidebar-title">
            <form class="search-form">
                <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
                <label for="search-box-slidebar">
                    <i class="zmdi zmdi-search"></i>
                </label>
            </form>
            <div class="ms-slidebar-t">
                <span class="ms-logo ms-logo-sm">M</span>
                <h3>Material
                    <span>Style</span>
                </h3>
            </div>
        </div>
    </header>
    <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
        <li>
            <a data-scroll class="link" href="#home">
                <i class="zmdi zmdi-home"></i> Home</a>
        </li>
        <li>
            <a data-scroll class="link" href="#services">
                <i class="zmdi zmdi-flight-takeoff"></i> Services</a>
        </li>
        <li>
            <a data-scroll class="link" href="#portfolio">
                <i class="zmdi zmdi-desktop-mac"></i> Portfolio</a>
        </li>
        <li>
            <a data-scroll class="link" href="#pricing">
                <i class="zmdi zmdi-money-box"></i> Pricing</a>
        </li>
        <li>
            <a data-scroll class="link" href="#about">
                <i class="zmdi zmdi-info-outline"></i> About Us</a>
        </li>
        <li>
            <a data-scroll class="link" href="#team">
                <i class="zmdi zmdi-accounts"></i> Team</a>
        </li>
        <li>
            <a data-scroll class="link" href="#contact">
                <i class="zmdi zmdi-email"></i> Contact</a>
        </li>
        <li>
            <a data-scroll class="link" href="index.html">
                <i class="zmdi zmdi-swap"></i> Main Site</a>
        </li>
    </ul>
    <div class="ms-slidebar-social ms-slidebar-block">
        <h4 class="ms-slidebar-block-title">Social Links</h4>
        <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-facebook">
                <i class="zmdi zmdi-facebook"></i>
                <span class="badge-pill badge-pill-pink">12</span>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-twitter">
                <i class="zmdi zmdi-twitter"></i>
                <span class="badge-pill badge-pill-pink">4</span>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-youtube">
                <i class="zmdi zmdi-youtube"></i>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-instagram">
                <i class="zmdi zmdi-instagram"></i>
            </a>
        </div>
    </div>
</div>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/lead-full.js"></script>
</body>
</html>
@endspaceless()