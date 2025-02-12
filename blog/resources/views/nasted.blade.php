<form action="{{ route('hello.nastedPost') }}" method="POST">
    @csrf
    <input type="text" name="name[first]" placeholder="Name">
    <input type="text" name="name[last]" placeholder="Name">
    <button type="submit">Submit</button>
</form>

<h1>{{ $name ?? 'Name not found' }}</h1>
<h1>{{ $last ?? 'Name not found' }}</h1>