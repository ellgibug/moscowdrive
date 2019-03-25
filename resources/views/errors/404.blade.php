<!DOCTYPE html>
<html lang="ru">
<head>
    @include('partials.head')
</head>
<body>
@include('partials.preload')


    <div class="bg-full-page back-fixed">
        <div class="mw-500 absolute-center">
            <div class="card color-primary">
                <div class="card-body">
                    <div class="text-center color-dark">
                        <h1 class="color-primary text-big">Ошибка 404</h1>
                        <p>Страница с адресом "{{ Request::fullUrl() }}" не найдена.</p>
                        <p class="lead lead-sm">Вы можете вернуться назад или перейти на главную страницу.</p>
                        <a href="{{ route('landing') }}" class="btn btn-primary btn-raised">
                            <i class="zmdi zmdi-home"></i> Главная</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
            <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
    </div>


@include('partials.scripts')

</body>
</html>