@extends('home.layouts.app')

@section('content')
    @foreach($links as $link)
    <div class="col-sm-4">
        <div class="contact-box text-center">
            <a href="{{ $link->url }}">
                <h2>{{ $link->title }}</h2>
                <p>
                    {{ $link->description }}
                </p>
            </a>
        </div>
    </div>
    @endforeach
@endsection