<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="{{ asset('css/user-table.css') }}">
</head>
<body>
    <div class="container">
        <h2>USER PAGE</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
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
                    <td>{{ $user->age }}</td>
                </tr>
                
                @endforeach
                
                <div class="pagination-container">
                    @if ($users->hasPages())
                        <div class="pagination-links">
                            {{ $users->links('pagination::bootstrap-4') }}
                        </div>
                    @endif
                </div>
            </tbody>
        </table>
    </div>
</body>
</html>
