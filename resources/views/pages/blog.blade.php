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
        /*td>button>a {*/
            /*color: #fff;*/
        /*}*/
        /*td>button>a:focus ,td>button>a:active, td>button>a:hover {*/
            /*opacity: 0.6;*/
            /*text-decoration: none;*/
            /*color: #fff;*/
        /*}*/
        th{
            text-align: center;
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
    <table class="table table-hover text-center">
        <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Created at</th>
            <th style="color: #2a88bd">Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->post_name}}</td>
            <td>{{$post->categories->category_name}}</td>
            <td><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($post -> created_at))->diffForHumans() ?></td>
            <td >
                <a class="btn btn-info btn-md" >View</a>
                <a class="btn btn-warning btn-md">Edit</a>
                <a class="btn btn-danger btn-md">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-success btn-md"><span class="glyphicon glyphicon-plus"></span> Add Post</a>
</div>
</body>
</html>
