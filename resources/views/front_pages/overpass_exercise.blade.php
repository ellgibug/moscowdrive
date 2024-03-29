@extends('layouts.master')

@section('title', 'Упражнение эстакада / остановка и начало движения на подъеме в ГИБДД в 2019 году')
@section('description', 'Порядок выполнения и штрафные баллы при выполнении упражнения эстакада при сдаче экзамена в ГИБДД Марьино в 2019 году. Подготовка к сдаче упражнения эстакада.')

@section('content')
    <div class="container mt-6 mb-6">
        <h1 class="right-line">Упражнение эстакада</h1>
        <p>После сдачи упражнения гараж Вы приступаете к выполнению упражнения эстакада. Но иногда (если гараж занят другим сдающим) это упражнение становится первым при сдаче экзамена.</p>
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="{{ asset('public/images/площдка-01.png') }}" target="_blank">
                    <img src="{{ asset('public/images/площдка-01.png') }}" alt="упражнение эстакада" class="img-fluid">
                </a>
                <a href="{{ asset('public/images/площдка-01.png') }}" download="">Скачать изображение</a>
            </div>
            <div class="col-md-6">
                <p>Порядок выполнения упражнения:</p>
                <ol>
                    <li>Въезжаете на территорию выполнения упражнения, пересекая линию начала упражнения - старайтесь держаться как можно ближе к гаражу;</li>
                    <li>Как только правое зеркало ТС поравняется с правой стенкой гаража (конус А, на реальной парковке левая передняя или правая задняя фара ТС), то необходимо выкрутить руль до упора налево и направить ТС к дальнему угловому левому конусу (конус Б);</li>
                    <li>Как только Вы максимально близко приблизелись к конусу Б, необходимо остановиться, включить заднюю передачу, выкрутить руль направо и медленно сдавая назад установить ТС в гараж, смотря в зеркала заднего вида;</li>
                    <li>Внешние габариты ТС не должны пересекать контрольную линию и "стенки" гаража;</li>
                    <li>При выезде из гаража начинайте крутить руль влево, когда зеркала поравняются со линией въезда в гараж. При этом лучше выжать сцеплени и ехать медленно, чтобы не сбить конусы;</li>
                    <li>Двигайтесь к линии окончания выполнения упражнения.</li>
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
                    <td>Не приступил к выполнению упражнения за 30 секунд после начала экзамена</td>
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
                    <td>Не пересек контрольную линию</td>
                </tr>
                <tr>
                    <td>Отлонился от заданной траектории движения</td>
                </tr>
                <tr>
                    <td>Использовал движение задним ходом там, где это не предусмотрено</td>
                </tr>
                <tr>
                    <td>Допустил откат ТС на подъеме более чем на 0,3 м</td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>

    </div>
@endsection