@extends('layouts.master')

@section('title', 'Контакты автошколы MoscowDrive в Москве')
@section('description', 'Адрес, телефон, электронная почта автошколы MoscowDrive в Москве. Форма для обратной связи.')

@section('content')
    <div style="height: 50px"></div>
    <div class="material-background"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="right-line">Контакты</h1>

                        @if(Session::has('msg'))
                            <p class="lead color-primary"><strong>{{ Session::get('msg') }}</strong></p>
                        @endif
                        <p>Оставьте заявку на обучение, задайте вопрос или оставьте отзыв об автошколе, Ваше мнение очень важно для нас!</p>
                        <p>Вы свяжемся с Вами максимально быстро!</p>
                        <form class="form-horizontal" id="contact_form" action="{{ route('send_contacts') }}" method="post">
                            {{ csrf_field() }}
                            <fieldset class="container">
                                <div class="form-group row">
                                    <label for="name" class="col-lg-2 control-label">Имя</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-lg-2 control-label">Телефон</label>
                                    <div class="col-lg-9">
                                        <input type="tel" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-lg-2 control-label">Электронная почта</label>
                                    <div class="col-lg-9">
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="theme" class="col-md-2 control-label">Тема сообщения</label>
                                    <div class="col-md-9">
                                        <select class="form-control selectpicker" id="theme" name="theme">
                                            <option value="Поступление">Поступление</option>
                                            <option value="Вопросы">Вопросы </option>
                                            <option value="Отзывы и предложения">Отзывы и предложения</option>
                                            <option value="Другое">Другое</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="message" class="col-lg-2 control-label">Сообщение</label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" rows="3" id="message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="offset-lg-2 col-lg-10">
                                        <p>Отправляя эту форму я подтвержаю согласие на обработку персональных данных.</p>
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
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col-md-4 col-12"> Москва, Нагатинская ул., д.6</div>
                            <div class="col-md-4 col-12">info@moscow-drive.com</div>
                            <div class="col-md-4 col-12">8 (499) 391 43 15</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection