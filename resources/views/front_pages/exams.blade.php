@extends('layouts.master')

@section('title', 'Подготовка к экзаменам в автошколе MoscowDrive в Москве в 2019 году ')
@section('description', 'Процесс сдачи, подготовка и организация квалификационных экзаменов на категорию B в ГИБДД.')

@section('content')
    <div class="container mt-6 mb-6">
        <h1 class="right-line">Подготовка к экзаменам</h1>
        <p>Как бы хорошо Вы не водили, но если Вы не знаете всех тонкостей сдачи экзаменов, то есть большая вероятность, что сдать с первого раза Вы все этапы не сможете.</p>
        <p>Полностью подготовиться к экзаменам, узнать все "подводные камни" маршрутов, правильно выполннить упражнения на площадке Вам помогут инструкторы в автошколе MoscowDrive.</p>
        <p>В течение курса занятий и непосредственно перед сдачей экзаменов в ГИБДД Вы будете проходить усиленную подготовку на площадке и в городе. Также, уже при проведении внутренних экзаменов Вы поймете свои сильные и слабые стороны, инструктора подскажут над чем Вам стоит еще порабоать, чтобы без проблем сдать экзамены в ГИБДД и получить водительское удостоверение.</p>
        <p>Желаем Вам удачи!</p>
        <hr>
        <p><strong>Вы можете сдавать экзамены в ГИБДД с автошколой или самостоятельно.</strong></p>
        <p>Порядок <strong>самостоятельной</strong> подачи документов и сдачи экзаменов в ГИБДД:</p>
        <ol class="service-list service-list-border list-unstyled">
            <li>Создание Подтвержденной учетной запись на портале <a href="https://www.gosuslugi.ru" target="_blank">Госуслуг</a>.
                <br>Как создать и подтвердить свою учетную запись написано <a href="https://www.gosuslugi.ru/help/faq/c-1/2" target="_blank">здесь.</a>
            </li>
            <li>Записаться на сдачу первой части экзамена - теоретической.<br>
            После авторизации на портале Госуслуг Вам необходимо перейти в категорию<br>
                <small>Услуги <i class="fa fa-angle-right" aria-hidden="true"></i> Водительское удостоверение <i class="fa fa-angle-right" aria-hidden="true"></i> Подача заявления на сдачу экзаменов после прохождения профессионального обучения на право управления транспортными средствами</small>,<br>
                оплатить госпошлину (лучше онлайн со скидкой 30%) и заполнить анкету - указать свои персональные данные, данные об автошколе, Вашей медицинской справке и выбрать дату сдачи экзамена.<br>
                Если Вы оплатили госпошлину онлайн, то Вам будет предложено распечатать квитанцию - распечатайте ее и возьмите с собой.<br>
                Также Вам будет выдан электронный билет с указанием времени записи - Вам также надо будет распечатать его и взять с собой или показать с телефона.<br>
                С собой на регистрацию на экзамен Вам необходимо иметь с собой: паспорт, свидетельство об окончании автошколы, медицинскую справку, квитанцию об оплате госпошлины (если Вы ее оплатили).<br>
                Не опаздывайте на назначенное время! Не оставляйте свидельство об окончании  автошколы и медицинскую справку в ГИБДД, у Вас должны только снять с них ксерокопии.<br>
                О процессе сдаче теории в ГИБДД Вы можете прочесть <a href="{{ route('theory') }}" target="_blank">здесь</a>.
             </li>
            <li>
                После успешной сдачи экзамена по теории Вы идете записываться на второй этап - площадка.<br>
                Запись проходит в самом здании ГИБДД.<br>
                В назначенный день Вы должны прийти (с собой иметь только паспорт), пройти процедуру регистрации, дождаться своей очереди и приступить к экзамену.<br>
                О процессе сдаче площадки в ГИБДД Вы можете прочесть <a href="{{ route('autodrom') }}" target="_blank">здесь</a>.
            </li>
            <li>Финальная часть процесса получения водительского удостоверения - экзамен в городе. <br>
                Запись на экзамен также проходит в самом здании ГИБДД, но на экзамен Вы приходите уже в место начала проведения экзамена (с собой иметь паспорт), проходите процедуру регистрации, ожидаете своей очереди и сдаете экзамен.<br>
                О процессе сдаче экзамена в городе в ГИБДД Вы можете прочесть <a href="{{ route('city') }}" target="_blank">здесь</a>.
            </li>
            <li>
                После сдачи всех трех частей экзамена Вам надо будет прийти по записи в то же здание ГИБДД для фотографии и получения водительского удостоверения.<br> Процесс записи на получение прав аналогичен процессу записи на теорию. Если госпошлина была оплачена, то распечатейте квитанцию и возьмите ее с собой. Повторно оплачивать ничего не нужно. <br> Если до этого Вы не оплачивали госпошлину, то оплатите ее и также принесите квитанцию.
            </li>
        </ol>
        <br>
        <p>В случае <strong>сдачи экзаменов с автошколой</strong> организационные моменты берет на себя автошкола.</p>
    </div>
@endsection