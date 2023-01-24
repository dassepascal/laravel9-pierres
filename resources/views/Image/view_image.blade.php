<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3>View all image</h3>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image id</th>
                    <th scope="col">name</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach($imageData as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        <img src="{{ url('Images/'.$data->image) }}" style="height: 100px; width: 150px;">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
