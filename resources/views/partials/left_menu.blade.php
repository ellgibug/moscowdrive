<div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
    <div class="sb-slidebar-container">
        <div class="text-center pr-1 pl-1">
            <img src="{{ asset('public/images/logo_black.svg') }}" alt="" class="img-fluid mb-1 mt-3">
        </div>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
            <li><a class="link" href="{{ route('landing') }}">Главная</a></li>
            <li class="card" role="tab" id="sch1">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc1" aria-expanded="false" aria-controls="sc1">Об автошколе</a>
                <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1" data-parent="#slidebar-menu">
                    <li><a href="{{ route('admission') }}">Поступление</a></li>
                    <li><a href="{{ route('learning') }}">Обучение</a></li>
                    <li><a href="{{ route('schedule') }}">Расписание занятий</a></li>
                    <li><a href="{{ route('gallery') }}">Галерея</a></li>
                    <li><a href="{{ route('comments') }}">Отзывы</a></li>
                </ul>
            </li>
            <li class="card" role="tab" id="sch2">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc2" aria-expanded="false" aria-controls="sc2">Услуги</a>
                <ul id="sc2" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2" data-parent="#slidebar-menu">
                    <li><a href="{{ route('driving') }}">Обучение вождению</a></li>
                    <li><a href="{{ route('exams') }}">Подготовка к экзаменам</a></li>
                    <li><a href="{{ route('parking') }}">Уроки городской парковки</a></li>
                    <li><a href="{{ route('student_auto') }}">Занятия на авто ученика</a></li>
                    <li><a href="{{ route('new_car') }}">Помощь с новой машиной</a></li>
                </ul>
            </li>
            <li class="card" role="tab" id="sch4">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc4" aria-expanded="false" aria-controls="sc4">Экзамены в ГИБДД</a>
                <ul id="sc4" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch4" data-parent="#slidebar-menu">
                    <li><a href="{{ route('pdd') }}">ПДД онлайн</a></li>
                    <li><a href="{{ route('theory') }}">Теория</a></li>
                    <li><a href="{{ route('autodrom') }}">Площадка</a></li>
                    <li><a href="{{ route('exercise_garage') }}">Упражнение ГАРАЖ</a></li>
                    <li><a href="{{ route('overpass_exercise') }}">Упражнение ЭСТАКАДА</a></li>
                    <li><a href="{{ route('turn_in_confined_space_exercise') }}">Упражнение РАЗВОРОТ В ОГРАНИЧЕННОМ ПРОСТРАНСТВЕ</a></li>
                    <li><a href="{{ route('turns_90_degrees_exercise') }}">Упражнение ПОВОРОТЫ НА 90 ГРАДУСОВ</a></li>
                    <li><a href="{{ route('parallel_parking_exercise') }}">Упражнение ПАРАЛЛЕЛЬНАЯ ПАРКОВКА</a></li>
                    <li><a href="{{ route('city') }}">Город</a></li>
                </ul>
            </li>
            <li><a class="link" href="{{ route('prices') }}">Цены</a></li>
            <li><a class="link" href="{{ route('addresses') }}">Адреса</a></li>
            <li><a class="link" href="{{ route('contacts') }}">Контакты</a></li>
        </ul>
    </div>
</div>