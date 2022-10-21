@foreach ($promotion as $valuee)
<h1>Modifier promotion</h1>
<form action="" method="POST">
    @csrf
    <input type="text" value="{{$valuee->name_promotion}}" name="name" >
    <button>Ajouter</button>
</form>

@endforeach
