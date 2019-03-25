<nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-white" style="max-width: 1200px !important; margin: 0 auto">
    <div class="container container-full">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('landing') }}">
                <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
                <span class="ms-logo ms-logo-sm">M</span>
                <span class="ms-title">Moscow
                <strong>Drive</strong>
              </span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Об автошколе
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admission') }}">Поступление</a></li>
                        <li><a class="dropdown-item" href="{{ route('learning') }}">Обучение</a></li>
                        <li><a class="dropdown-item" href="{{ route('schedule') }}">Расписание занятий</a></li>
                        <li><a class="dropdown-item" href="{{ route('gallery') }}">Галерея</a></li>
                        <li><a class="dropdown-item" href="{{ route('comments') }}">Отзывы</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Услуги
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('driving') }}">Обучение вождению</a></li>
                        <li><a class="dropdown-item" href="{{ route('exams') }}">Подготовка к экзаменам</a></li>
                        <li><a class="dropdown-item" href="{{ route('parking') }}">Уроки городской парковки</a></li>
                        <li><a class="dropdown-item" href="{{ route('student_auto') }}">Занятия на авто ученика</a></li>
                        <li><a class="dropdown-item" href="{{ route('new_car') }}">Помощь с новой машиной</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Экзамены в ГИБДД
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('pdd') }}">ПДД онлайн</a></li>
                        <li><a class="dropdown-item" href="{{ route('theory') }}">Теория</a></li>
                        <li><a class="dropdown-item" href="{{ route('autodrom') }}">Площадка</a></li>
                        <li><a class="dropdown-item" href="{{ route('exercise_garage') }}">Упражнение ГАРАЖ</a></li>
                        <li><a class="dropdown-item" href="{{ route('overpass_exercise') }}">Упражнение ЭСТАКАДА</a></li>
                        <li><a class="dropdown-item" href="{{ route('turn_in_confined_space_exercise') }}">Упражнение РАЗВОРОТ В ОГРАНИЧЕННОМ ПРОСТРАНСТВЕ</a></li>
                        <li><a class="dropdown-item" href="{{ route('turns_90_degrees_exercise') }}">Упражнение ПОВОРОТЫ НА 90 ГРАДУСОВ</a></li>
                        <li><a class="dropdown-item" href="{{ route('parallel_parking_exercise') }}">Упражнение ПАРАЛЛЕЛЬНАЯ ПАРКОВКА</a></li>
                        <li><a class="dropdown-item" href="{{ route('city') }}">Город</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('prices') }}" class="nav-link">Цены
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addresses') }}" class="nav-link">Адреса
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contacts') }}" class="nav-link">Контакты
                    </a>
                </li>
            </ul>
        </div>
        <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
        </a>
    </div>
    <!-- container -->
</nav>