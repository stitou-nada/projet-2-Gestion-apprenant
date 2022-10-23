<a href="create">Ajouter promotion</a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name promotion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($promotion as $value)
            
    
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->Name_promotion}}</td>
            <td>
                <a href="edit/{{$value->id}}">Modifier</a> 
                <a href="suprimer/{{$value->id}}">Supprimer</a> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>