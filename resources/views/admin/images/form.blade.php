@extends('admin.adminForm')

@section('title', $image->exists ? 'Editer une image' : 'Enregistrer une nouvelle image')

@section('content')

    <section class="les-formulaires">
        <div class="formulaire new-edit">
            
        @if($image->exists)
            <h1>Editer une image</h1>
        @else
            <h1>Enregistrer une nouvelle image</h1>
        @endif
        <form action="{{ route($image->exists ? 'adminimage.update' : 'adminimage.store', $image) }}" class="form-group" enctype="multipart/form-data" method="post">
            @csrf
            @method($image->exists ? 'put' : 'post')
            @include('shared.input', ['type' => 'file', 'class' => 'input', 'label' => 'Image', 'name' => 'image', 'value' => $image->image_path])
            <button type="submit" class="submit">
                    @if($image->exists)
                        Modifier
                    @else
                        Créer
                    @endif
            </button>
        </form>
        @if ($errors->any())
            <div>
                {{ $errors }}
            </div>
        @endif
    </section>

@endsection