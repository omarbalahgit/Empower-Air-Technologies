<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Show Posts</h1>
    <table border=5>
        <th>id</th>
        <th>Nmae</th>
        <th>Description</th>
        <th> Image</th>
        <th> Price</th>
        @foreach ($product as $pos)
          <tr>
            <td>{{$pos->id}}</td>
            <td>{{$pos->Name}}</td>
            <td>{{$pos->Description}}</td>
            <td>{{$pos->Image}}</td>
            <td>{{$pos->Price}}</td>
            <td>
                <a href="{{route('Products.edit',$pos->id)}}" role="button">edit</a>
                <form action="{{route('posts.destroy',$pos->id)}}" method="POST">
                    @method('Delete')
                    @csrf
                    <button type="submit">SoftDelete </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table><br>
{{-- <a href="{{route('posts.create')}}">Add Data</a> --}}
{{-- <form action="{{route('Protucts.create')}}">
    <button type="submit">Add Data </button>
</form> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>