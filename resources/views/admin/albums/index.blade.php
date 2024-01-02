@extends('admin.admin')

@section('title', 'Sorties musicales | Knalson Music')

@section('content')


<section class="color-black">
    @if(session('success'))
        <div class="alert alert-succes">
            {{ session('success') }}
        </div>
    @endif
    <table>
        <thead>
            <th>#</th>
            <th>Titre de l'album</th>
            <th>Date de sortie</th>
            <th>Details sur l'album</th>
            <th>
                <a href="{{ route('adminalbum.create') }}" class="button-a">Enregistrer</a>
            </th>
        </thead>
        <tbody>
            @foreach($albums as $album)
                <tr>
                    <td>{{ $album->id }}</td>
                    <td class="table-A">{{ $album->title }}</td>
                    <td class="table-A">{{ $album->created_at }}</td> 
                    <td class="table-A">{{ $album->details_album }}</td>
                    <td class="td-btn-center">
                        <a href="{{ route('adminalbum.edit', $album) }}" class="btn-admin editer">Editer</a>
                        <form action="{{ route('adminalbum.destroy', $album) }}"  method="POST" onsubmit ="return confirm('Voulez-vous vraiment effectuer cette action?')" style="display:inline">
                            @csrf
                            @method("delete")    
                            <button type="submit" class="supprimer">Supprimer</button>
                        </form>                
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection