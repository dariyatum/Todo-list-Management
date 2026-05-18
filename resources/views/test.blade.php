<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test-edit</title>
</head>
<body>

<form action="{{ route('tests.store') }}" method="POST">

    @csrf

    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" required>
    </div>

    <div class="form-group">
        <label>Phone:</label>
        <input type="text" name="phone">
    </div>

    <button type="submit">Submit</button>
</form>

@foreach($tests as $test)
    <h1>{{ $test->name }}</h1>
    <h1>{{ $test->phone }}</h1>
@endforeach

</body>
</html>