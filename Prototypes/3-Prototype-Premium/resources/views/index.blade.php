<h1>Table promotion</h1>
<a href="create">Ajouter promotion</a>
<div>

    <input type="text" id="search">

</div>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name promotion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="tbody">
        @foreach ($promotion as $value)

        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name_promotion}}</td>
            <td>
                <a href="edit/{{$value->id}}">Modifier</a>
                <a href="supprimer/{{$value->id}}">Supprimer</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="{{asset('js/search.js')}}"></script> --}}


<script >


$('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
        type : 'get',
        url : 'search',
        // url : '{{URL::to('search')}}',
        data:{'key':$value},
        success:function(data){
        $('#tbody').html(data);
        }
        });
        })

</script>
