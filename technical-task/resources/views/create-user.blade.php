<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="{{ asset('css/create-user.css') }}">
</head>
<body>
    <div class="form-container">
        <h2>Create User</h2>
        <form action="/users" method="POST">
            @csrf
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="date" name="date_of_birth" required>
            <button type="submit">Create</button>
        </form>
    </div>
</body>
</html>