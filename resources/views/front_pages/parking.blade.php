@extends('layouts.master')

@section('title', 'Уроки городской парковки в автошколе MoscowDrive в Москве в 2019 году')
@section('description', 'Испытываете проблемы с парковкой? Автошкола MoscowDrive предлагает пройти курс городской парковки, после которого Вы сможете парковаться быстро и безопасно в любой ситуации.')

@section('content')
    <div class="container mt-6 mb-6">
        <h1 class="right-line">Уроки городской парковки</h1>
        <p>В условиях большой транспортной загруженности на улицах городов, особенно Москвы, очень часто водители начинают испытывать  трудности с парковкой своего автомобиля. Если Вы чувствуете себя неуверенно перед началом парковки, но хотите избавиться от этого чувтсва и парковаться быстро, уверенно и безопасно, то инструкторы автошколы MoscowDrive помогут Вам в этом!</p>
        <p>Мы разработали несколько курсов городской парковки, после которых Вы сможете:</p>
        <ul>
            <li>чувствовать габариты управляемого автомобиля</li>
            <li>парковаться в ограниченном пространстве</li>
            <li>парковаться параллельно и задним ходом</li>
            <li>контролировать ситуацию по зеркалам автомобиля</li>
            <li>и самое главное - <strong>парковаться быстро и безопасно в любом месте и при любой ситуации!</strong></li>
        </ul>
        <h2 class="right-line">Выберите для себя подходящий курс</h2>
        <p>Внимание: цены указаны с учетом акций и специальных предложений.</p>
        <h3 class="color-primary">Занятия на автомобиле с МКПП</h3>
        <p>5 часов - 5 000 р.</p>
        <p>10 часов - 6 000 р.</p>
        <h3 class="color-primary">Занятия на автомобиле с АКПП</h3>
        <p>5 часов - 6 000 р.</p>
        <p>10 часов - 12 000 р.</p>
        <h3 class="color-primary">Занятия на автомобиле ученика</h3>
        <p>Порядок проведения занятий на автомобиле ученика, так же как и цены, обсуждается и разрабатывается индивидуально. Вы можете позвонить по номеру <a href="tel:84993914315"><strong>8 (499) 391 43 15</strong></a> или задать все интересующие вопросы через <a href="#" data-toggle="modal" data-target="#myModal">форму обратной связи и заказать обратный звонок</a>.</p>

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