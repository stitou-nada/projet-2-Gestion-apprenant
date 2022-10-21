@foreach ($promotion as $valuee)
<h1>Modifier promotion</h1>
<form action="{{url("modifier")}}/{{$valuee->id}}" method="Post">
    @csrf
    <input type="text" value="{{$valuee->name_promotion}}" name="name" >
    <button>Modifier</button>
</form>

@endforeach
