<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container mt-4">  
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif  
    <table class = "table table-bordered table-striped table-hover table-dark">
        <tr class="success">
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>action</th>
        </tr>
        @foreach ($data as $anjay)
        <tr class ="success">
            <td>{{$anjay->id}}</td>
            <td>{{$anjay->title}}</td>
            <td>{{$anjay->description}}</td>
            <td>
                <a href="/delete/{{$anjay->id}}">
                <button type="button" class="btn btn-danger badge-pill">Hapus</button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>