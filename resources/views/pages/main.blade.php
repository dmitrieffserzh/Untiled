@extends('app_full')

@section('content')
<section class="section section-main">
    <div class="container">
        <h1 class="section-main__h1">Очень длинный основной заголовок!</h1>
        <p class="section-main__text">Банальные, но неопровержимые выводы, а также акционеры крупнейших компаний могут быть призваны к ответу.
            Кстати, действия представителей оппозиции и по сей день остаются уделом либералов, которые жаждут быть обнародованы.
        </p>
        <div class="main-action">
            <input type="text" class="main-action__input" placeholder="+7 XXX XXX-XX-XX">
            <button type="button" class="btn btn-main">Оставить заявку</button>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <header class="section-header">
            <h2 class="section-header__title">Наши услуги</h2>
            <p class="section-header__subtitle">Господа выбранный нами инновационный путь создает предпосылки.</p>
        </header>

    </div>
</section>

<section class="section">
    <div class="container">

        <header class="section-header">
            <h2 class="section-header__title">Наши рекомендации</h2>
            <p class="section-header__subtitle">Господа выбранный нами инновационный путь создает предпосылки.</p>
        </header>

    </div>
</section>

<section class="section">
    <div class="container">

        <header class="section-header">
            <h2 class="section-header__title">Наша команда</h2>
            <p class="section-header__subtitle">Господа выбранный нами инновационный путь создает предпосылки.</p>
        </header>

        <button type="button" class="btn btn-main">Оставить заявку</button>

    </div>
</section>
@endsection