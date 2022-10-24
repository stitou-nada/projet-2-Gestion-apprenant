

<form action="{{url('Ajouter')}}"  method="POST">
    @csrf
   Name : <input type="text"  name="name">
   Prenom : <input type="text"  name="prenom">
   Email : <input type="text"  name="email">
   <input type="hidden" value="{{$id}}" name="PromotionID">
    <button>Ajouter</button>
</form>

