@extends('admin.adminForm')

@section('title', 'Administration Groupe Knalson Music')

@section('content')


<section class="admin-page-accueil">
    <div>
        <h1 class="title-animation">Bienvenue sur la page administration de Knalson Music</h1>
        <p class="paragraphe-animation">Vous êtes connectés en tant que </p>
    </div>
    <div>
        <a href="{{ route('adminevent.index') }}" class="lien-animation">Concerts & evenements</a>
        <span class="baton"></span>
        <a href="{{ route('adminalbum.index') }}" class="lien-animation">Sortie musicales</a>
        <span class="baton"></span>
        <a href="{{ route('adminimage.index') }}" class="lien-animation">Images</a>
    </div>
</section>

@endsection