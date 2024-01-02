@extends('admin.admin')

@section('title', 'Concerts & evenements | Knalson Music')

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
            <th>Concert ou événement</th>
            <th>Lieu</th>
            <th>Details de l'événement</th>
            <th>Date de l'événement</th>
            <th>
                <a href="{{ route('adminevent.create') }}" class="button-a">Enregistrer</a>
            </th>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td class="table-A">{{ $event->type_event }}</td>
                    <td class="table-A">{{ $event->location }}</td>
                    <td class="table-A">{{ $event->details_event }}</td>
                    <td class="table-A">{{ $event->created_at }}</td> 
                    <td class="td-btn-center">
                        <a href="{{ route('adminevent.edit', $event) }}" class="btn-admin editer">Editer</a>
                        <form action="{{ route('adminevent.destroy', $event) }}"  method="POST" onsubmit ="return confirm('Voulez-vous vraiment effectuer cette action?')" style="display:inline">
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