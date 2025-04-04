<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="{{ asset('css/user-table.css') }}">
</head>
<body>
    <div class="container">
        <h2>USER LIST</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Mail To</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->fullName }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td> <a href="send-email/{{ $user->email }}"> Link</a> </td>
                    <td>{{ $user->age }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
