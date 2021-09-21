<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Members form</title>
</head>
<body>
    <h3>Members Form</h3>
<br>
<br>
    <form action="{{route('member')}}" class="form-control" method="post">

    @if(Session::get('success'))
        <div class="alert" style="color:green;">
            {{Session::get('success')}}
        </div>
    
    @endif

    @if(Session::get('fail'))
        <div class="alert" style="color:red;">
            {{Session::get('fail')}}
        </div>
    
    @endif

    @csrf

NAME:<input type="text" class="form-control" name="name" value="{{old('name')}}">
<span style="color:red;">@error('name')
{{$message}}
@enderror
</span>
<br>
email:<input type="text" class="form-control" name="email" value="{{old('email')}}">
<span style="color:red;">@error('email')
{{$message}}
@enderror
</span>
<br>
Gender:<input type="text" class="form-control" name="gender" value="{{old('gender')}}">
<span style="color:red;">@error('gender')
{{$message}}
@enderror
</span>
<br>
position:<input type="text" class="form-control" name="position" value="{{old('position')}}">
<span style="color:red;">@error('position')
{{$message}}
@enderror
</span>
<br>
<br>
<input class="btn btn-info" type="submit" value="submit">
    </form>
    
    <a href="{{route('memberview')}}">View Members</a>

</body>
</html>