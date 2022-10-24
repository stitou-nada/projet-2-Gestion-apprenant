<input type="text" id="search">
<input type="text" hidden value="{{$id}}" id="IdKey">

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
    <tbody id="tbody">
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
<a href="{{url('index')}}">Retour</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/searchAp.js')}}"></script>


