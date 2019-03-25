@extends('layouts.master')

@section('title', 'Автопарк автошколы MoscowDrive в Москве')
@section('description', 'Практические занятия проходят на современных иномарках по Вашим личным и экзаменационным маршрутам ГИБДД. На площадке автошколы Вы сможете освоить в совершестве все экзаменационные упражнения.')

@section('content')
    <div class="container mt-6 mb-6">
        <h1 class="right-line">Галерея</h1>

        <div class="row masonry-container">
            @for($i=1; $i<10; $i++)
            <div class="col-md-4 col-sm-6 masonry-item">
                <div class="card">
                    <div class="ms-thumbnail card-body p-05 ">
                        <div class="withripple zoom-img">
                            <a href="public/images/{{$i}}new.png" data-lightbox="gallery" data-title="My caption">
                                <img src="public/images/{{$i}}new.png" alt="" class="img-fluid">
                            </a>
                        <div class="ripple-container"></div></div>
                    </div>
                </div>
            </div>
            @endfor
        </div>

    </div>
@endsection