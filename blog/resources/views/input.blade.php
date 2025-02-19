
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input</title>
</head>
<body>
    
    <h1>Input</h1>
    <form action="{{ route('hello.input') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Submit</button>
    </form>

    <h1>Output</h1>
        <h1>{{ $name ?? 'Name not found' }}</h1>
        <h1>{{ $email ?? 'Email not found' }}</h1>
        <h1>{{ $password ?? 'Password not found' }}</h1>


</body> 
</html>