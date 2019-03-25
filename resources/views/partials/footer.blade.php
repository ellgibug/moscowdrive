<aside class="ms-footbar mt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 ms-footer-col">
                <div class="ms-footbar-block">
                    <div class="row no-gutters">
                        <div class="col-lg-3 col-sm-6">
                            <h4 class="color-light">Об автошколе</h4>
                            <p><a href="{{ route('admission') }}">Поступление</a></p>
                            <p><a href="{{ route('learning') }}">Обучение</a></p>
                            <p><a href="{{ route('schedule') }}">Расписание занятий</a></p>
                            <p><a href="{{ route('gallery') }}">Галерея</a></p>
                            <p><a href="{{ route('comments') }}">Отзывы</a></p>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <h4 class="color-light">Услуги</h4>
                            <p><a href="{{ route('driving') }}">Обучение вождению</a></p>
                            <p><a href="{{ route('exams') }}">Подготовка к экзаменам</a></p>
                            <p><a href="{{ route('parking') }}">Уроки городской парковки</a></p>
                            <p><a href="{{ route('student_auto') }}">Занятия на авто ученика</a></p>
                            <p><a href="{{ route('new_car') }}">Помощь с новой машиной</a></p>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <h4 class="color-light">Экзамены в ГИБДД</h4>
                            <p><a href="{{ route('pdd') }}">ПДД онлайн</a></p>
                            <p><a href="{{ route('theory') }}">Теория</a></p>
                            <p><a href="{{ route('autodrom') }}">Площадка + Упражнения</a></p>
                            <p><a href="{{ route('city') }}">Город</a></p>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div style="height: 56px"></div>
                            <p><a href="{{ route('prices') }}">Цены</a></p>
                            <p><a href="{{ route('addresses') }}">Адреса</a></p>
                            <p><a href="{{ route('contacts') }}">Контакты</a></p>
                            <p><a href="{{ route('landing') }}">Главная</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ms-footer-col">
                <div class="ms-footbar-block">
                    <div class="ms-footbar-title">
                        <img src="{{ asset('public/images/logo_grey.svg') }}" alt="logo" class="img-fluid mb-1 mt-1">
                    </div>
                    <address class="no-mb">
                        <p class="color-light"><i class="color-danger-light zmdi zmdi-pin mr-1"></i> Москва, Нагатинская ул., д.6</p>
                        <p class="color-light"><i class="color-info-light zmdi zmdi-email mr-1"></i><a href="mailto:info@moscow-drive.com">info@moscow-drive.com</a></p>
                        <p class="color-light"><i class="color-royal-light zmdi zmdi-phone mr-1"></i><a href="tel:84993914315">8 (499) 391 43 15</a> </p>
                    </address>
                </div>
            </div>
        </div>
    </div>
</aside>
<footer class="ms-footer">
    <div class="container">
        <p class="text-muted small">На сайте используются cookie для сбора информации технического характера и обрабатываем IP-адрес вашего местоположения. Продолжая использовать этот сайт, вы даете согласие на использование файлов cookies.</p>
        <p class="color-light">По всем интересующим Вас вопросам обращайтесь к администратору автошколы</p>
        <p class="color-light"> &copy; MoscowDrive 2018-2019</p>
        <div class="text-center">
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,lj"></div>
        </div>
        <div class="mt-5 text-center">
            <p class="color-info">Сделано в <a href="http://your-super.site" target="_blank"><img src="{{ asset('images/yss.svg') }}" alt="Сделано в YSS" class="img-fluid" width="10%"></a></p>
        </div>
    </div>
</footer>