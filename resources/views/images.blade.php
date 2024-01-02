@extends('base')

@section('title', 'Nos images')
@section('title_page', 'Knalson Music')
@section('paragraph', 'Enregistrements de nos performances à saint-herblain et aù dela des frontières')

@section('content')


<section class="display-flex-center partieAdmin">
    <div class="card-content-for-image">
        <div class="card-image reveal">
            @for($i = 0; $i <= 10; $i++)
                <div class="card-image-content">
                    <img src="img/KnalsonMusic-saint-herblain-020.jpg" alt="" class="reveal-1">
                    <p>Oui</p>
                </div>
            @endfor
        </div>
    </div>
</section>

@endsection