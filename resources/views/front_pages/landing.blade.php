@extends('layouts.master')

@section('title', 'Автошкола MoscowDrive в Москве. Обучение вождению и получение прав в 2019 году')
@section('description', 'Автошкола MoscowDrive приглашает на обучение вождению с последующей сдачей экзаменов в ГИБДД и получением прав категории B в 2019 году. Запишитесь на пробное занятие.')

@section('styles')
    <style>.featurette-container p{font-size: 16px;}</style>
    <link rel="stylesheet" href="{{ asset('slider.revolution/css/extralayers.css') }}">
    <link rel="stylesheet" href="{{ asset('slider.revolution/css/settings.css') }}">
@endsection

@section('content')
    <section id="slider" class="slider fullwidthbanner-container roundedcorners mt-0">
        <div class="fullwidthbanner" data-height="560" data-navigationStyle="">
            <ul class="hide">
                <li data-transition="slideleft" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                    <img src="" data-lazyload="/images/акции-16.png" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
                </li>
                <li data-transition="slideleft" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                    <img src="" data-lazyload="/images/акции-15.png" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
                </li>
                <li data-transition="slideleft" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                    <img src="" data-lazyload="/images/акции-21.png" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
                </li>
                <li data-transition="slideleft" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                    <img src="" data-lazyload="/images/акции-22.png" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
                </li>
                <!--<li data-transition="slideleft" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">-->
                <!--    <img src="" data-lazyload="/images/акции-18.png" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />-->
                <!--</li>-->
                <li data-transition="slideleft" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                    <img src="" data-lazyload="/images/акции-17.png" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
                </li>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </section>
       <div class="bg-white pt-4 pb-4">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="uppercase color-primary">Наши преимущества</h2>
            </div>
            <div class="row text-center featurette-container">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <img src="{{ asset('images/акции-07.png') }}" alt="" class="img-fluid">
                    <p>Автошкола работает по программе подготовки водителей ТС категории В с учетом последних изменений от 19.10.2017 и аккредитована в ГИБДД.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <img src="{{ asset('images/акции-10.png') }}" alt="" class="img-fluid">
                    <p>Чтобы удостовериться в качестве нашей работы Вы можете посетить пробное занятия по вождению в городе перед подписанием договора.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <img src="{{ asset('images/акции-06.png') }}" alt="" class="img-fluid">
                    <p>Перед экзаменами в ГИБДД Вы получите всю необходимую подготовку и сможете сдать их без проблем.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <img src="{{ asset('images/акции-09.png') }}" alt="" class="img-fluid">
                    <p>Вы можете выбрать любой вариант обучения теории - онлайн или в классе, а после изучения материала закрепить его сразу на практике.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <img src="{{ asset('images/акции-08.png') }}" alt="" class="img-fluid">
                    <p>Вы начинаете и заканчиваете практические занятия около станций метро или там, где Вам удобно.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <img src="{{ asset('images/акции-11.png') }}" alt="" class="img-fluid">
                    <p>Вы будете заниматься на новых технически исправных автомобилях.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <img src="{{ asset('images/акции-13.png') }}" alt="" class="img-fluid">
                    <p>Расписание практических занятий для каждого ученика составляется индивидуально и может быть скорректировано в процессе обучения.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <img src="{{ asset('images/акции-12.png') }}" alt="" class="img-fluid">
                    <p>Отсутствие денежных сборов на неэффективные элементы обучения. Вы платите только за лекции по теории, вождение на автодроме и в городе.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <img src="{{ asset('images/акции-14.png') }}" alt="" class="img-fluid">
                    <p>Отсутствие очередей - практические занятия по вождению не позднее следующей неделе после заключения договора. Среднее время занятий - 3 астрономических часа в неделю.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-4 wrap ms-hero-img-parking ms-bg-fixed">
        <div class="container text-center">
            <h2 class="mb-2 mt-0 color-white uppercase">Открыт набор на обучение в вечерние группы и группы выходного дня</h2>
            <p class="color-white">Никаких очередей и ожиданий, <strong>практические занятия начинаются сразу после заключения договора</strong> на удобной для Вас станции метро.</p>
            <p class="color-white">Перед заключением договора Вы можете посетить <strong>пробное занятие</strong>, чтобы убедиться в качестве нашей работы и посмотреть как проходят занятия в автошколе.</p>
            <div class="row mt-4 mb-4">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Вечерняя группа</h3>
                        </div>
                        <div class="card-body">
                            <p class="fs-16">Занятия по теории 2 раза в неделю в будни вечером в классе или онлайн (15 занятий)</p>
                            <hr>
                            <p class="fs-16">Полный курс обучения МКПП или АКПП</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Группа выходного дня</h3>
                        </div>
                        <div class="card-body">
                            <p class="fs-16">Занятия по теории 1 раза в неделю по выходным в классе или онлайн (15 занятий)</p>
                            <hr>
                            <p class="fs-16">Полный курс обучения МКПП или АКПП</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Теория онлайн</h3>
                        </div>
                        <div class="card-body">
                            <p class="fs-16">15 полноценных занятий по теории<br>онлайн по Skype</p>
                            <hr>
                            <p class="fs-16">Полный курс обучения МКПП или АКПП</p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="color-white">Вы можете в любое время изменить свою форму обучения бесплатно или приостановить занятия на время.  <br>Подробности узнавайте у администратора автошколы по телефону <a href="tel:84993914315" class="color-white"><strong>8 (499) 391 43 15</strong></a> или закажите обратный звонок.</p>
        </div>
    </div>

    <div class="bg-white pt-4 pb-4">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="uppercase color-primary">Услуги и Цены</h2>
                <p class="lead uppercase">Цены являются фиксированными и не повышаются на протяжении обучения</p>
                <p class="text-muted">* Цены указаны без учета акций - стоимость обучения может быть ниже</p>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="price-table">
                        <header class="price-table-header">
                            <span class="price-table-category color-white">Курс АКПП</span>
                            <h3 class="color-light">
                                47 000
                                <sub>руб.</sub>
                            </h3>
                        </header>
                        <div class="price-table-body bg-light">
                            <ul class="price-table-list">
                                <li><i class="zmdi zmdi-check"></i>30 часов практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Полный курс теоретических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Формирование индивидуального расписания практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Выбор (и замена) инструктора для практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Выбор (и замена) станции метро для практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Топливный сбор и ГСМ</li>
                                <li><i class="zmdi zmdi-check"></i>Проведение внутреннего экзамена</li>
                                <li><i class="zmdi zmdi-check"></i>Поддержка на протяжении обучения</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price-table prominent ">
                        <header class="price-table-header">
                            <span class="price-table-category color-white">Курс МКПП</span>
                            <h3 class="color-light">
                                49 000
                                <sub>руб.</sub>
                            </h3>
                        </header>
                        <div class="price-table-body bg-light">
                            <ul class="price-table-list">
                                <li><i class="zmdi zmdi-check"></i>40 часов практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Полный курс теоретических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Формирование индивидуального расписания практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Выбор (и замена) инструктора для практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Выбор (и замена) станции метро для практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Топливный сбор и ГСМ</li>
                                <li><i class="zmdi zmdi-check"></i>Проведение внутреннего экзамена</li>
                                <li><i class="zmdi zmdi-check"></i>Поддержка на протяжении обучения</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price-table">
                        <header class="price-table-header">
                            <span class="price-table-category color-white">Курс МКПП</span>
                            <h3 class="color-light">
                                29 000
                                <sub>руб.</sub>
                            </h3>
                        </header>
                        <div class="price-table-body bg-light">
                            <ul class="price-table-list">
                                <li><i class="zmdi zmdi-check"></i>15 часов практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Полный курс теоретических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Формирование индивидуального расписания практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Выбор (и замена) инструктора для практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Выбор (и замена) станции метро для практических занятий</li>
                                <li><i class="zmdi zmdi-check"></i>Топливный сбор и ГСМ</li>
                                <li><i class="zmdi zmdi-check"></i>Проведение внутреннего экзамена</li>
                                <li><i class="zmdi zmdi-check"></i>Поддержка на протяжении обучения</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <h3 class="mb-2">Также вы можете посетить <span class="color-primary">курсы городской парковки</span><br>на учебных автомобилях с АКПП и МКПП или на вашем собственном автомобиле</h3>
                <h3 class="mb-2">По многочисленным заявкам был открыт <span class="color-primary">набор в мотошколу на категорию А</span><br>по цене 22 000 рублей за все*</h3>
                <small class="text-muted">* В стоимость курса обучения на категорию А включены: полный курс теоретических занятий; 10 практических занятий по 60 минут; практические занятия по индивидуальному расписанию; топливный сбор и ГСМ; проведение внутреннего экзамена; поддержка на протяжении обучения. Срок обучения 1.5 - 2 месяца, цена курса фиксрована и не повышается на протяжении обучения.</small>
                <div class="mt-3">
                    <a href="{{ route('prices') }}" class="btn btn-lg btn-raised btn-default">
                        все цены
                    </a>
                    <a href="{{ route('driving') }}" class="btn btn-xlg btn-raised btn-default">
                        все услуги
                    </a>
                    <a href="{{ route('parking') }}" class="btn btn-lg btn-raised btn-default">
                        уроки парковки
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-4 wrap ms-hero-img-parking ms-bg-fixed" >
        <div class="container">
            <h2 class="uppercase text-center color-white mb-4">Оставьте свое сообщение</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="card index-1">
                        <div class="card-body-big color-dark">
                            <p id="success_msg" class="d-none mb-2"><strong>Ваша форма успешно отправлена!</strong></p>
                            <p id="error_msg" class="d-none mb-2"><strong>При отправке формы произошла ошибка, позвоните по телефону <a href="tel:84993914315">8 (499) 391 43 15</a>.</strong></p>
                            <form id="short_form" class="mb-3">
                                <input type="hidden" name="url" id="url" value="{{ Request::route()->uri }}">
                                <div class="form-group label-floating mt-2 mb-1">
                                    <div class="input-group center-block">
                                        <label class="control-label" for="name">
                                            <i class="zmdi zmdi-account"></i> Имя</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group label-floating mt-2 mb-1">
                                    <div class="input-group center-block">
                                        <label class="control-label" for="phone">
                                            <i class="zmdi zmdi-phone"></i> Телефон</label>
                                        <input type="tel" id="phone" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group label-floating mt-2 mb-1">
                                    <div class="input-group center-block">
                                        <label class="control-label" for="message">
                                            <i class="zmdi zmdi-email"></i> Сообщение</label>
                                        <textarea class="form-control" rows="3" id="message" name="message"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-raised btn-primary btn-block withoutripple" type="submit">
                                    Отправить
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </div>
    <div class="wrap mt-0 mb-0 p-0">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A64ddfcc87b019a8bd43ef6bc726c27449a92ec8100312cc55215854b2e2999a8&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('slider.revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('slider.revolution/js/jquery.themepunch.revolution.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
@endsection