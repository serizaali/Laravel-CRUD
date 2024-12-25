<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>
<body>

    <table border="1">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Address</th>
        </thead>

        <tbody>
            @foreach ($users as $user)

            <tr>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->password}}</td>
                <td>{{ $user->gender}}</td>
                <td>{{ isset ($user->mobile) ? $user->mobile: '-'}}</td>
                <td>{{ $user->address}}</td>

            </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
