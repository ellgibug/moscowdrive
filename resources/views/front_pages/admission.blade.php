@extends('layouts.master')

@section('title', 'Правила поступления в автошколу MoscowDrive в Москве в 2019 году')
@section('description', 'Порядок поступления и перечень необходимых документов для автошколы. Обучение с 16 лет. Помощь в оформлении медицинской справки.')

@section('content')
    <div class="container mt-6 mb-6">
        <h1 class="right-line">Поступление</h1>
        <p>В автошколу могут поступить лица в возрасте от 16 лет.</p>
        <p>Порядок поступления и обучения в автошколе:</p>
        <ol class="service-list service-list-border list-unstyled">
            <li>Запись в автошколу через <a href="#" data-toggle="modal" data-target="#myModal">форму обратной связи</a> или по телефону <a href="tel:84993914315">8 (499) 391 43 15</a>.</li>
            <li>Согласование времени пробного занятия.</li>
            <li>Заключение договора после пробного занятия.
                <br>При себе иметь паспорт, две фотографии 3х4.
                <br>Медицинская справка может быть принесена сразу или позднее.
                <br>Также Вы можете оформить медицинскую справку в автошколе.
            </li>
            <li>Прохождение курса практических и теоретических занятий без ожиданий и очередей в удобное для Вас время.</li>
            <li>Сдача внутренних экзаменов по теории, на автодроме и в городе.</li>
            <li>Получение пакета документов (свидетельство об окончании автошколы и медицинская справка), необходимых для сдачи экзаменов и получения водительского удостоверения в ГИБДД.</li>
        </ol>

        <!-- Modal -->
        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog animated zoomIn animated-3x" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title color-primary" id="myModalLabel">Форма обратной связи</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <form id="short_form">
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
                        <p id="success_msg" class="mt-3 d-none"><strong>Ваша форма успешно отправлена!</strong></p>
                        <p id="error_msg" class="mt-3 d-none"><strong>При отправке формы произошла ошибка, позвоните пожалуйста по телефону <a href="tel:84993914315">8 (499) 391 43 15</a>.</strong></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection