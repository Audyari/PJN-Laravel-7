
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Profile</title>
</head>
<body>
    
        <p>ID: {{ $id }}</p>
        <p>Age: {{ $age }}</p>

        @if($id == '0' && $age == '0')
            <br>
            <p>No profile information available.</p>
        @else
            <p>
                @if($id != '0')
                    <br>
                    This is the profile for ID: {{ $id }}.
                @endif

                @if($age != '0')
                    <br>
                    This person's age is {{ $age }} years old.
                @endif
            </p>
        @endif

       
   
</body>
</html>