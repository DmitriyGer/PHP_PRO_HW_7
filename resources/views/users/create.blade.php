<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <form method="POST" action="/store-user">
        @csrf
        <input type="text" name="name" placeholder="Name" required maxlength="50">
        <input type="text" name="surname" placeholder="Surname" required maxlength="50">
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>