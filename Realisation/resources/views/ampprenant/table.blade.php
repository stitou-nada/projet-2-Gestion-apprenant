<a href="Create">Ajouter ampprenant</a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name </th>
            <th>Prenom </th>
            <th>Email </th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ampprenant as $value)


        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->Name_ampprenant}}</td>
            <td>{{$value->Prenom_ampprenant}}</td>
            <td>{{$value->Email_ampprenant}}</td>
            <td>
                <a href="Edit/{{$value->id}}">Modifier</a>
                <a href="Suprimer/{{$value->id}}">Supprimer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
