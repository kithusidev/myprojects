<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASpirant registration</title>
</head>
<body>
    <form class="form-control" action="{{route('aspire')}}">
        @csrf
        <h2>Aspirant registration</h2>
        NAME:<input class="form-control" type="text" name="name">
        <br>
        Email:<input type="text" class="form-control" name="email">
        <br>
        position:<input type="text" class="form-control" name="position">
        <br>
        <input type="submit">
</form>
</body>
</html>