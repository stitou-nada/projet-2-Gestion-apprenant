@foreach ($promotion as $valuee)

@endforeach
<form action="{{url('modifier')}}/{{$valuee->id}}" method="POST">
    @csrf
<input type="text" value="{{$valuee->name_promotion}}" name="name">
<button>Ajouter</button>
</form>
