<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor_Company</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm">
        <h1 class="mb-4">Edit list data from here</h1>
        <form action="{{route('update')}}" method="post">
        @csrf
        <input type="text" name="batch" value="{{$data->batch_no}}" class="form-control">
        <input type="hidden" name="id" value="{{$data->id}}"><br>
        <input type="number" name="qty" value="{{$data->quantity}}" class="form-control"><br>
        <select name="option_value" class="form-select">
            <option value="{{$data->status}}">Bad</option>
            <option value="{{$data->status}}">Average</option>
            <option value="{{$data->status}}">Good</option>
        </select><br>
        <textarea name="comment" placeholder="{{$data->remarks}}" class="form-control"></textarea><br>
        <button type="submit" value="submit" class="btn btn-success">Update</button>
        <a href="{{url('/')}}"<button type="close" class="btn btn-info">Close</button></a>
        </form>
    </div>
</body>
</html>