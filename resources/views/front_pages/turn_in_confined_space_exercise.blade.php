@extends('layouts.master')

@section('title', 'Упражнение разворот в ограниченном пространстве в ГИБДД в 2019 году')
@section('description', 'Порядок выполнения и штрафные баллы при выполнении упражнения разворот в ограниченном пространстве при сдаче экзамена в ГИБДД Марьино в 2019 году. Подготовка к сдаче упражнения разворот в ограниченном пространстве.')

@section('content')
    <div class="container mt-6 mb-6">
        <h1 class="right-line">Упражнение разворот в ограниченном пространстве</h1>
        <p>После сдачи упражнения эстакада Вы приступаете к выполнению упражнения разворот в ограниченном пространстве. Будьте внимательнее: заезжать на упражнее надо справа, чтобы разделительный конус был от вас слева! Если вы заедете не с той стороны, т.е. нарушите заданную на экзамене траекторию движения, то экзамен будет не сдан.</p>
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="{{ asset('public/images/площдка-03.png') }}" target="_blank">
                    <img src="{{ asset('public/images/площдка-03.png') }}" alt="упражнение разворот в ограниченном пространстве" class="img-fluid">
                </a>
                <a href="{{ asset('public/images/площдка-03.png') }}" download="">Скачать изображение</a>
            </div>
            <div class="col-md-6">
                <p>Порядок выполнения упражнения:</p>
                <ol>
                    <li>Подъезжате к линии начала выполнения упражнения, держитесь правее;</li>
                    <li>Медленно двигайтесь вперед, остановитесь около конуса, который находится в середине границы упражнения;</li>
                    <li>Выверните руль до упора влево и отпустив сцепление двигатейсь к противоположной стороне как можно ближе. При этом нельзя каснуться конуса;</li>
                    <li>Остановитесь, включите заднюю передачу, выверните руль до упора вправо и начните движение назад ориентируясь по зеркалам заднего. Остановитесь как только впереди будет достаточно места для выезда;</li>
                    <li>Включите первую передачу, поверните руль влево и двигайтесь к линии окончания выполнения упражнения. Разделительный конус должен быть от вас справа.</li>
                </ol>
            </div>
        </div>
        <h2 class="right-line color-primary">Штрафные баллы</h2>
        <div class="card table-responsive">
            <table class="table table-bordered table-striped table-error-container">
                <tbody>
                <tr>
                    <td class="fw-500">Ошибка</td>
                </tr>
                <tr>
                    <td>Сбил разметочное оборудование</td>
                </tr>
                <tr>
                    <td>Выехал за пределы участка выполнения упражнения</td>
                </tr>
                <tr>
                    <td>Наехал колесом на линию разметки, обозначающие границы выполнения упражнения</td>
                </tr>
                <tr>
                    <td>Отлонился от заданной траектории движения</td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>

    </div>
@endsection