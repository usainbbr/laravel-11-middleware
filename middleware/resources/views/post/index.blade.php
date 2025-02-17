<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Middle Ware</title>
</head>
<body>
    
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="2">
        <input type="text" name="title" placeholder="tittle here"><br>
        <textarea name="description" placeholder="description here"></textarea><br>
        <button type="submit"> submit</button>

    </form>

</body>
</html>