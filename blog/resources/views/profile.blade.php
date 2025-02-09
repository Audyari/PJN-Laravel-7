
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Profile</title>
</head>
<body>
    <h1>Profile {{ $name}}</h1>
    <p>Umur Kamu : {{ $age ?? 'No Age' }}</p>
</body>
</html>