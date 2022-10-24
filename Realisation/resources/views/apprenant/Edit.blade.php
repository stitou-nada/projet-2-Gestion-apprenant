
@foreach ($apprenant as $value)

<form action="{{url('Modifier')}}/{{$value->id}}"  method="POST">
    @csrf
    <input type="text" value="{{$value->Name_apprenant}}"  name="name">
    <input type="text" value="{{$value->Prenom_apprenant}}"  name="prenom">
    <input type="text" value="{{$value->Email_apprenant}}"  name="email">
    <input type="hidden" value="{{$value->PromotionID}}"  name="PromotionID">
    <button>modifier</button>
</form>
@endforeach
