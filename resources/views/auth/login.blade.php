@extends('baseContact')

@section('title', 'Se connecter')

@section('content')
<section class="connexion">

    <div class="formulaire">
        <h1 class="se-connecter">Se connecter</h1>

        <form action="{{ route('login') }}" method="post" onsubmit="validateLogin(event)">
            @csrf
            @include('shared.input', ['type' => 'email', 'class' => 'input', 'label' => 'Email', 'name' => 'email'])
            @include('shared.input', ['type' => 'password', 'class' => 'input', 'label' => 'Mot de passe', 'name' => 'password'])
            <button type="submit">Se connecter</button>
        </form>

    </div> 
</section>
@endsection