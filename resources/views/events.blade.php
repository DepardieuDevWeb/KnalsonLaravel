@extends('base')

@section('title', 'Nos dates à vénir')
@section('title_page', 'Nos dates à venir')
@section('paragraph', '')

@section('content')


<section class="concerts-evenements">
    <div>
        <p>
            Retrouvez sur cette page l'ensemble de nos représentations à vénir dans tous types de mileux,
        </p>
        <p>
            et d'événements. Pour ne manquer aucune opportunité de danserau rythme d'une musique 
        </p>
        <p>
            folkorique, moderne et envoutante, pensez à consulter régulièrement les mises à jour. 
        </p>
    </div>
    <div class="concerts-evenements-flex-center">
        <div class="concerts-evenements-flex-div">
            <h2 class="concerts-evenements-flex-center-title">Concerts et événements</h2>
            @foreach($events as $event)
                <div class="card-items reveal reveal-visible">
                    <div class="card-items-description reveal-2">
                        <h2>{{ $event->type_event }}</h2>
                        <p>Lieu: {{ $event->location }}</p><br>
                        <p>Date: {{ $event->created_at }}</p><br>
                        <p>{{ $event->details_event }}</p>
                    </div>

                </div>
            @endforeach
        </div>
        <div class="concerts-evenements-flex-div">
            <h2 class="concerts-evenements-flex-center-title">Sortie musicale</h2>
            @foreach($albums as $album)
                <div class="card-items reveal reveal-visible">
                    <div class="card-items-description reveal-2">
                        <h2>{{ $album->title }}</h2>
                        <p>{{ $album->details_album }}</p>
                        <p>{{ $album->created_at }}</p>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection