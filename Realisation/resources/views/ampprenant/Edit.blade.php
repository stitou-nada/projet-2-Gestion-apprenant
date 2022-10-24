
@foreach ($ampprenant as $value)

<form action="{{url('Modifier')}}/{{$value->id}}"  method="POST">
    @csrf
    <input type="text" value="{{$value->Name_ampprenant}}"  name="name">
    <input type="text" value="{{$value->Prenom_ampprenant}}"  name="prenom">
    <input type="text" value="{{$value->Email_ampprenant}}"  name="email">
    {{-- <input type="text" value="{{$value->name_promotion}}"  name="name_promotion"> --}}
    <button>modifier</button>
</form>
@endforeach
