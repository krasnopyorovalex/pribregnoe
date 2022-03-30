@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)
@push('og')
<meta property="og:title" content="{{ $page->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($page->image ? $page->image->path : 'img/logo.jpg') }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:site_name" content="Гостевой дом «Счастье вам»">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')

    @includeWhen($page->slider, 'layouts.sections.slider', ['slider' => $page->slider])

    @include('layouts.sections.advantages')

    @includeWhen($services->count(), 'layouts.sections.services')

    @includeWhen($ourServicesInMain->count(), 'layouts.sections.our_services')

    @includeWhen($guestbookLast->count(), 'layouts.sections.guestbook')

    @include('layouts.sections.booking')

    <main class="main__text">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $page->name }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="seo__text content">
                        {!! $page->text !!}
                    </div>
                </div>
            </div>
        </div>
    </main>

    @includeWhen($page->gallery, 'layouts.sections.gallery', ['gallery' => $page->gallery])

@endsection
