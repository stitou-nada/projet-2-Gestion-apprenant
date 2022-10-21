<a href="create">Ajouter une promotion</a>
<form>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom promotion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promotion as $value)
                
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name_promotion}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</form>