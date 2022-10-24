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
            <td>{{$value->id_promotion}}</td>
            <td>{{$value->Name_promotion}}</td>
            <td>
                <a href="edit/{{$value->id_promotion}}">Modifier</a>
                <a href="suprimer/{{$value->id_promotion}}">Supprimer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
