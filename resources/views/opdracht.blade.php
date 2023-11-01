<!DOCTYPE html>
<html>

<h2>Lijst van Fruits:</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Afkomst</th>
            <th>Prijs</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fruits as $fruit)
        <tr>
            <td>{{ $fruit->id }}</td>
            <td>{{ $fruit->name }}</td>
            <td>{{ $fruit->orgin }}</td>
            <td>{{ $fruit->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


</html>