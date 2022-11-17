<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor_company</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm ">
        <h1 class="mb-4">Outdoor T-shirt Company</h1>
        <form action="{{route('saveTodo')}}" method="post">
        @csrf
            <input type="text" name="batch" placeholder="Enter Batch Number" class="form-control"><br>
            <input type="number" name="qty" placeholder="Quantity" class="form-control"><br>
            <select name="option_value" class="form-select" aria-label="Default select example">
                <option value="Bad">Bad</option>
                <option value="Average">Average</option>
                <option value="Good">Good</option>
            </select><br>
            <textarea name="comment" placeholder="text some remarks" class="form-control"></textarea><br>
            <button type="submit" value="submit" class="btn btn-primary">ADD</button>
        </form>
        <div>
        <h2 class="mt-5">Outdoor tshirt production list</h2>

            <table class="table table-striped mt-4">
                <tr>
                    <th>Id</th>
                    <th>BatchNO</th>
                    <th>Quantity</th>
                    <th>Manufacture_Date</th>
                    <th>Status</th>
                    <th>Remarks</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                @foreach($list as $values)
                <tr>
                    <td>{{$values->id}}</td>
                    <td>{{$values->batch_no}}</td>
                    <td>{{$values->quantity}}</td>
                    <td>{{$values->created_at}}</td>
                    <td>{{$values->status}}</td>
                    <td>{{$values->remarks}}</td>
                    <td>
                <form action="{{route('delete', $values->id)}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</a></button>
                </form>
                    </td>
                    <td><a href="{{url('/edit/'.$values->id)}}"><button type="submit" class="btn btn-success">Edit</button></a></td>
                </tr>
                @endforeach
                {{count($list)}}
            </table>
    </div>
</div>
</body>
</html>