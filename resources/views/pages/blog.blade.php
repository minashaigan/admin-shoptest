<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #top {
            margin: 30px;
        }
    </style>
</head>
<body>
<header id="top">
    <div class="row">
        <div class="col-lg-12">
            <button><a href="{{URL::route('home')}}">Back</a></button>
        </div>
    </div>
</header>
<div class="container">
    <h2>Posts</h2>
    <p></p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Created at</th>
        </tr>
        </thead>
        <tbody>
        {{--@foreach()--}}
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        {{--@endforeach--}}
        </tbody>
    </table>
</div>

</body>
</html>
