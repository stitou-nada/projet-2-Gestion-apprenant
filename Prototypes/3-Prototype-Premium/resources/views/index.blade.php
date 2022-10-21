<h1>Table promotion</h1>
<a href="create">Ajouter promotion</a>
<div>
    <form action="/recherche" method="GET">
        <input type="search" name="search">
        <button type="submit">search</button>
    </form>

</div>
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
            <td>{{$value->name_promotion}}</td>
            <td>
                <a href="edit/{{$value->id}}">Modifier</a>
                <a href="supprimer/{{$value->id}}">Supprimer</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
