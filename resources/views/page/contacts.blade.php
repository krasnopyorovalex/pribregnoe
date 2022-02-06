@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)
@push('og')
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($page->image ? $page->image->path : 'img/logo.png') }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:site_name" content="Гостевой дом «Счастье вам»">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')
    @includeWhen($page->slider, 'layouts.sections.slider', ['slider' => $page->slider])

    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $page->name }}</h1>
                    <ul>
                        <li><a href="{{ route('page.show') }}">Главная</a></li>
                        <li>{{ $page->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 flex-start">
                    <div class="content page__content">
                        {!! $page->text !!}
                    </div>
                </div>
            </div>
        </div>
    </main>

    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afadb7049d30c1236c76df9c1791daa6b18d14b1c41dfe59ea34edb08f0adf822&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    @includeWhen($page->gallery, 'layouts.sections.gallery', ['gallery' => $page->gallery])

@endsection
