
@foreach ($promotion as $value)

<form action="{{url('modifier')}}/{{$value->id_promotion}}"  method="POST">
    @csrf
    <input type="text" value="{{$value->Name_promotion}}"  name="name">
    <button>modifier</button>
</form>
<a href="{{url('Create')}}/{{$value->id_promotion}}">Ajouter ampprenant</a>
@endforeach

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name </th>
            <th>Prenom </th>
            <th>Email </th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ampprenant as $value)


        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->Name_ampprenant}}</td>
            <td>{{$value->Prenom_ampprenant}}</td>
            <td>{{$value->Email_ampprenant}}</td>
            <td>
                <a href="{{url('Edit')}}/{{$value->id}}">Modifier</a>
                <a href="{{url('Suprimer')}}/{{$value->id}}">Supprimer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

