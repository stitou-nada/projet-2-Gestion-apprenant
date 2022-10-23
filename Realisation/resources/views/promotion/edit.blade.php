    
@foreach ($promotion as $value)
    
<form action="{{url('modifier')}}/{{$value->id}}"  method="POST">
    @csrf
    <input type="text" value="{{$value->Name_promotion}}"  name="name">
    <button>modifier</button>
</form>
@endforeach
