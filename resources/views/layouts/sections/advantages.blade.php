<section class="advantages">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">Наши преимущества</div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 flex-start">
                <div class="img">
                    <a href="{{ route('page.show', ['alias' => 'kontakty']) }}">
                        <img src="{{ asset('img/adv-01.png') }}" alt="">
                    </a>
                </div>
                <div class="name">Удобное расположение</div>
                <div class="text">
                    <p>Гостевой дом "Счастье вам" в курортном посёлке Прибрежное  в 500м от моря</p>
                </div>
            </div>
            <div class="col-3 flex-start">
                <div class="img">
                    <a href="{{ route('page.show', ['alias' => 'our-services']) }}">
                        <img src="{{ asset('img/beach.svg') }}" alt="">
                    </a>
                </div>
                <div class="name">Песчаный пляж</div>
                <div class="text">
                    <p>Широкие песчаные пляжи Западного побережья Крыма</p>
                </div>
            </div>
            <div class="col-3 flex-start">
                <div class="img">
                    <a href="{{ route('our_service.show', ['alias' => 'basseyn']) }}">
                        <img src="{{ asset('img/swimming-pool.svg') }}" alt="">
                    </a>
                </div>
                <div class="name">Бассейн</div>
                <div class="text">
                    <p>Детский каркасный бассейн на территории</p>
                </div>
            </div>
            <div class="col-3 flex-start">
                <div class="img">
                    <a href="{{ route('our_service.show', ['alias' => 'plaz']) }}">
                        <img src="{{ asset('img/family.svg') }}" alt="">
                    </a>
                </div>
                <div class="name">Семейный отдых</div>
                <div class="text">
                    <p>Мы расположены в оживленном курортном посёлке, взрослые и дети - каждый найдёт развлечение по душе</p>
                </div>
            </div>
        </div>
    </div>
</section>
