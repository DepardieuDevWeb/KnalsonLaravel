@extends('base')

@section('title', 'Nos vidéos')
@section('title_page', 'Knalson Music')
@section('paragraph', 'Enregistrements de nos performances à saint-herblain et aù dela des frontières')

@php

$apiKey ="AIzaSyDQWAR4v0KXcqz253YIYqZ3RjdTh4G9c2w";
$channelID = "UCF--8scTrQP5JiN5u1HBlrw";
$maxResults = 20;
// ?part=snippet&channelId=UCF--8scTrQP5JiN5u1HBlrw&maxResults=20&key=[YOUR_API_KEY] HTTP/1.1

$baseUrl = "https://youtube.googleapis.com/youtube/v3/search";
// $url = "$baseUrl?part=snippet&order=date&channelID=".$channelID."&maxResults=".$maxResults."&key=".$apiKey."";
$url = "$baseUrl?part=snippet&order=date&channelId=".$channelID."&maxResults=".$maxResults."&key=".$apiKey."";

$url1 = file_get_contents($url);
$videoList = json_decode($url1);

@endphp

@section('content')
<section class="img-video">
    <div class="à-propos1">
        <p>
            De lieu en lieu et au fil des jours, Knalson Music propose à des publics d'horizons divers et variés des prestations musicales et chorégraphiques porteuses d'une ambiance chaleureuse, dansante et colorée. 
        </p>
    </div>
    <div class="videoId">
            @foreach ((array)$videoList->items as $item)
                <div class="videoId-content">
                    <a href="//www.youtube.com/watch?v=<?= $item->id->videoId ?>" data-lity><img src="" alt="" >
                    <img src="<?= $item->snippet->thumbnails->medium->url ?>" alt="">
                    <h3><?= $item->snippet->title ?></h3>
                    <!-- <p><= $item->snippet->description ?></p> -->
                        <!-- <i class="fa-solid fa-circle-play icon-play-lity" style="color: #1e95c8;"></i> -->
                    </a>
                </div>
            @endforeach
    </div>  
</section>
@endsection

