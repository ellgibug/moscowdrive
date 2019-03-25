@extends('layouts.master')

@section('title', 'Цены на обучение в автошколе MoscowDrive в Москве в 2019 году')
@section('description', 'Цены на обучение на автомобилях с МКПП, АКПП, внедорожнике, курсы парковки в Москве в 2019 году. Цены фиксированы и не повышаются в процессе обучения. Доплаты не производятся.')

@section('content')
    <div class="container mt-6 mb-6">
        <h1 class="right-line">Цены</h1>
        <p>Цены в автошколе являются фиксированными и не повышаются в процессе обучения.</p>
        <p>1 час, указанный в таблице, является астрономическим и равен 60 минутам.</p>
        <p>Топливный сбор и горюче-смазочные материалы уже включены в стоимость, никаких дополнительных денежных вложений не проводится.</p>
        <p>Цены указаны без учета акций и могут быть ниже. По любым вопросам обращайтесь к администратору автошколы.</p>
        <p>После заключения договора Вы платите не всю сумму сразу, а по частям. Теоритеские занятия оплачиваются полностью, а оплата за практические занятия производиться после занятия в тот же день.</p>
        <br>
        <div class="row pricing-table-container">
            <div class="col-md-4 col-lg-6 d-none d-lg-block pricing-col">
                <div class="pricing-table pricing-table-description">
                    <div class="pricing-table-head">
                        <h2> Наименование услуги
                        </h2>
                    </div>
                    <ul class="pricing-table-content">
                        <li>Теоретические занятия</li>
                        <li>МКПП Практические занятия (1 час)</li>
                        <li>АКПП Практические занятия (1 час) </li>
                        <li>Практические занятия на внедорожнике МКПП (1 час)</li>
                        <li>Практические занятия на внедорожнике АКПП (1 час) </li>
                        <li>Практические занятия на автомобиле ученика</li>
                        <li>Занятия по уличной парковке МКПП (5 часов)</li>
                        <li>Занятия по уличной парковке АКПП (5 часов)</li>
                        <li>Занятия по уличной парковке МКПП (10 часов)</li>
                        <li>Занятия по уличной парковке АКПП (10 часов)</li>
                        <li>Изменение расписания практических занятий</li>
                        <li>Поддержка на протяжении обучения</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pricing-col">
                <div class="pricing-table">
                    <div class="pricing-table-head">
                        <h2> Для ученика,
                            <span>который ЗАКЛЮЧИЛ договор на обучение в автошколе</span>
                        </h2>
                    </div>
                    <ul class="pricing-table-content">
                        <li> 17 000 р.
                            <span class="d-block d-lg-none">Теоретические занятия</span>
                        </li>
                        <li> 800 р.
                            <span class="d-block d-lg-none">МКПП Практические занятия (1 час)</span>
                        </li>
                        <li> 1 000 р.
                            <span class="d-block d-lg-none">АКПП Практические занятия (1 час)</span>
                        </li>
                        <li>
                            1 200 р.
                            <span class="d-block d-lg-none">Практические занятия на внедорожнике МКПП (1 час)</span>
                        </li>
                        <li> 1 500 р.
                            <span class="d-block d-lg-none">Практические занятия на внедорожнике АКПП (1 час)</span>
                        </li>
                        <li> по запросу
                            <span class="d-block d-lg-none">Практические занятия на автомобиле ученика</span>
                        </li>
                        <li>
                            5 000 р.
                            <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (5 часов)</span>
                        </li>
                        <li>
                            6 000 р.
                            <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (5 часов)</span>
                        </li>
                        <li>
                            10 000 р.
                            <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (10 часов)</span>
                        </li>
                        <li>
                            12 000 р.
                            <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (10 часов)</span>
                        </li>
                        <li>
                            бесплатно
                            <span class="d-block d-lg-none">Изменение расписания практических занятий</span>
                        </li>
                        <li>
                            бесплатно
                            <span class="d-block d-lg-none">Поддержка на протяжении обучения</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pricing-col">
                <div class="pricing-table">
                    <div class="pricing-table-head">
                        <h2> Для ученика,
                            <span>который НЕ ЗАКЛЮЧИЛ договор на обучение в автошколе</span>
                        </h2>
                    </div>
                    <ul class="pricing-table-content">
                        <li>
                            <i class="fa fa-times"></i>
                            <span class="d-block d-lg-none">Теоретические занятия</span>
                        </li>
                        <li> 1 000 р.
                            <span class="d-block d-lg-none">МКПП Практические занятия (1 час)</span>
                        </li>
                        <li> 1 200 р.
                            <span class="d-block d-lg-none">АКПП Практические занятия (1 час)</span>
                        </li>
                        <li>
                            1 500 p.
                            <span class="d-block d-lg-none">Практические занятия на внедорожнике МКПП (1 час)</span>
                        </li>
                        <li> 1 700 р.
                            <span class="d-block d-lg-none">Практические занятия на внедорожнике АКПП (1 час)</span>
                        </li>
                        <li>
                            <i class="fa fa-times"></i>
                            <span class="d-block d-lg-none">Практические занятия на автомобиле ученика</span>
                        </li>
                        <li>
                            5 000 р.
                            <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (5 часов)</span>
                        </li>
                        <li>
                            6 000 р.
                            <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (5 часов)</span>
                        </li>
                        <li>
                            10 000 р.
                            <span class="d-block d-lg-none">Занятия по уличной парковке МКПП (10 часов)</span>
                        </li>
                        <li>
                            12 000 р.
                            <span class="d-block d-lg-none">Занятия по уличной парковке АКПП (10 часов)</span>
                        </li>
                        <li>
                            бесплатно
                            <span class="d-block d-lg-none">Изменение расписания практических занятий</span>
                        </li>
                        <li>
                            <i class="fa fa-times"></i>
                            <span class="d-block d-lg-none">Поддержка на протяжении обучения</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <p>На пробное занятия не распространяются скидки. Его стоимость составляет 800 рублей и длится оно 1 час (60 минут).</p>
    </div>
@endsection