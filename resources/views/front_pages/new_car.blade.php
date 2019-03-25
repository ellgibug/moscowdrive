@extends('layouts.master')

@section('title', 'Помощь с новым автомобилем ученика в автошколе MoscowDrive в Москве в 2019 году')
@section('description', 'Автошкола MoscowDrive оказывает своим ученикам помощь в приобретении, эксплуатации и оформлении нового автомобиля.')

@section('content')
    <div class="container mt-6 mb-6">
        <h1 class="right-line">Помощь с новым автомобилем</h1>
        <p>Вы планируете покупать свой первый автомобиль, но не знаете точный порядок процедуры покупки и постановки на учет? Вы можете обратиться к специалистам автошколы MoscowDrive и получить помощь в:</p>
        <ul>
            <li>выборе автомобиля исходя из Ваших предпочтений</li>
            <li>покупке и пригоне автомобиля</li>
            <li>постановке на учет в ГИБДД</li>
            <li>прохождении ТО</li>
            <li>оформлении страховки ОСАГО, КАСКО</li>
            <li>обкатке автомобиля</li>
        </ul>
        <p>Для уточнения всех вопросов Вы можете позвонить по номеру <a href="tel:84993914315"><strong>8 (499) 391 43 15</strong></a> или задать все интересующие вопросы через <a href="#" data-toggle="modal" data-target="#myModal">форму обратной связи и заказать обратный звонок</a>.</p>

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