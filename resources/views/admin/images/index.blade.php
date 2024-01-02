@extends('admin.admin')

@section('title', 'Images | Knalson Music')

@section('content')
<section class="display-flex-center partieAdmin">
    <div class="card-content-for-image-admin">

        <div class="btn-save-image">
            <a href="{{ route('adminimage.create') }}" class="button-a">Enregistrer une nouvelle image</a>
        </div>

        <div class="card-image">
            @foreach($images as $image)
                <div class="card-image-content">
                    <img src="{{ asset('storage/app/public/' . $image->image_path) }}" alt="{{ $image->image_path }}">
                    <div class='btn-edit-supp-image'>
                        <a href="{{ route('adminimage.edit', $image->id) }}" class="btn-admin editer">Editer</a>
                        <form action="{{ route('adminimage.destroy', $image->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment effectuer cette action?')" style="display:inline">
                            @csrf
                            @method("delete")    
                            <button type="submit" class="supprimer">Supprimer</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
