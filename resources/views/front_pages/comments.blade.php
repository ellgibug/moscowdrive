@extends('layouts.master')

@section('title', 'Отзывы об автошколе MoscowDrive в Москве')
@section('description', 'Оставьте свое предложение по улучшению или отзыв о нашей работе. Все Ваши комментарии очень важны для нас.')

@section('content')
    <div class="container mt-6 mb-6">
        <h1 class="right-line">Отзывы о нас</h1>
        @if(Session::has('msg'))
            <p class="lead color-primary"><strong>{{ Session::get('msg') }}</strong></p>
        @endif
        <div class="ms-collapse" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="mb-0 card card-default">
                <div class="card-header" role="tab" id="headingOne">
                    <h4 class="card-title ms-rotate-icon">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Оставить отзыв
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{ route('send_comment') }}" id="comments_form">
                            {{ csrf_field() }}
                            <fieldset class="container">
                                <div class="form-group row is-empty">
                                    <label for="name" autocomplete="false" class="col-lg-2 control-label">Имя</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="form-group row is-empty">
                                    <label for="message" class="col-lg-2 control-label">Сообщение</label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" rows="3" id="message" name="message"></textarea>
                                    </div>
                                </div>
                                {{--<div class="row mt-2">--}}
                                    {{--<div class="offset-lg-2 col-lg-10">--}}
                                        {{--<div class="checkbox">--}}
                                            {{--<label>--}}
                                                {{--<input type="checkbox" checked name="confirmation" value="1">--}}
                                                {{--<span class="ml-2">Подтвержаю согласие на модерацию и публикацию отзыва.</span>--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
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
        <br>
        <p>Вы можете рассказать свои впечатления от обучения на независимых сайтах, а также <a href="https://yandex.ru/maps/org/moscowdrive/151697196428/?ll=37.633931%2C55.679996&z=17" target="_blank">Яндекс.Картах</a></p>
        <div class="row mb-4">
            <div class="col-md-2 col-sm-6"><a href="https://zoon.ru/msk/trainings/avtoshkola_moscowdrive_na_nagatinskoj_ulitse_6/" class="btn btn-block btn-raised btn-info" target="_blank">Zoon</a></div>
            <div class="col-md-2 col-sm-6"><a href="https://otzovik.com/reviews/avtoshkola_moscow_drive_russia_moscow/" class="btn btn-block btn-raised btn-info" target="_blank">Отзовик</a></div>
            <div class="col-md-2 col-sm-6"><a href="http://avtotochki.ru/poi/view/8443321146859/" class="btn btn-block btn-raised btn-info" target="_blank">АвтоТочки</a></div>
            <div class="col-md-2 col-sm-6"><a href="https://www.avtogai.ru/info/avtoshkoly-zhaloby-otzyvy-obzory-reiting/moscowdrive-94853" class="btn btn-block btn-raised btn-info" target="_blank">АвтоГаи</a></div>
            <div class="col-md-2 col-sm-6"><a href="https://www.yell.ru/moscow/com/driving-school-moscowdrive_11940812/" class="btn btn-block btn-raised btn-info" target="_blank">Yell</a></div>
            <div class="col-md-2 col-sm-6"><a href="https://www.spr.ru/nagatino-sadovniki/moscowdrive.html" class="btn btn-block btn-raised btn-info" target="_blank">Spr</a></div>
        </div>
        @foreach($comments as $comment)
            <div class="card card-light">
                <div class="card-header pt-1 pb-1">
                    <p class="m-0 p-0"><strong>{{ $comment->name }}</strong> <small class="text-muted">{{ $comment->created_at }}</small></p>
                </div>
                <div class="card-body pt-1 pb-1">
                    <p class="mb-1 p-0">{{ $comment->message }}</p>
                </div>
            </div>
        @endforeach


    </div>
@endsection