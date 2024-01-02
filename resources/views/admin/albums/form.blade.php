@extends('admin.adminForm')

@section('content')

<section class="les-formulaires">
    <div class="formulaire new-edit">
        <h1 class="les-formulaires-h1">Enregistrer un nouvel album</h1>
         @if ($errors->any())
            <div class="alert alert-error">Echec de l'enregistrement, merci de corriger vos erreurs</div> 
        @endif
        <form action="{{ route($album->exists ? 'adminalbum.update' : 'adminalbum.store', $album)}}" class="form-group" method="post" onsubmit="validateFormulaire(event)">
            @csrf
            @method($album->exists ? 'put' : 'post')
            @include('shared.input', ['class' => 'input', 'label' => 'Titre de l\'album', 'name' => 'title', 'value' => $album->title_album])
            @include('shared.input', ['type' => 'textarea', 'class' => 'textarea', 'label' => 'Details de l\'événement', 'name' => 'details_album', 'value' => $album->details_album])
            <button type="submit" class="submit">
                    @if($album->exists)
                        Modifier
                    @else
                        Créer
                    @endif
            </button>
        </form>
    </div>
</section>
@endsection