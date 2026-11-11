<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách SV</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $s)
            <tr>
                <td>{{ $s['id'] }}</td>
                <td>{{ $s['name'] }}</td>
                <td>{{ $s['code'] }}</td>
                <td>{{ $s['email'] }}</td>
                <td>{{ $s['dob'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>