@extends('admin.adminForm')

@section('content')

<section class="les-formulaires">
    <div class="formulaire new-edit">
        <h1 class="les-formulaires-h1">Enregistrer un nouvel événement</h1>
        @if ($errors->any())
            <div class="alert alert-error">Echec de l'enregistrement, merci de corriger vos erreurs</div> 
        @endif
        <form action="{{ route($event->exists ? 'adminevent.update' : 'adminevent.store', $event)}}" class="form-group" method="post" onsubmit="validateFormulaire(event)">
            @csrf
            @method($event->exists ? 'put' : 'post')
            @include('shared.input', ['class' => 'input', 'label' => 'Concert ou evenement', 'name' => 'type_event', 'value' => $event->type_event])
            @include('shared.input', ['class' => 'input', 'label' => 'Lieu', 'name' => 'location', 'value' => $event->location])
            @include('shared.input', ['type' => 'textarea', 'class' => 'textarea', 'label' => 'Details de l\'événement', 'name' => 'details_event', 'value' => $event->details_event])
            <button type="submit" class="submit">
                    @if($event->exists)
                        Modifier
                    @else
                        Créer
                    @endif
            </button>
        </form>
    </div>
</section>
@endsection