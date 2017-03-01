<!DOCTYPE html>
<html lang="en">
<head>
    <title>3D Mad Max</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <a href="{{URL::route('home')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</header>
<div class="container">
    <h2>Posts<span style="float: right;font-size: medium;">filter by:
            <div class="dropdown" style="display: inline">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Category
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    @foreach($categories as $category)
                        <li><a href="{{URL::route('blog', [$category->category_name])}}">{{$category->category_name}}</a></li>
                    @endforeach
                        <li role="presentation" class="divider"></li>
                        <li><a href="{{URL::route('blog', ['All'])}}">All</a></li>
                </ul>
            </div>
        </span></h2>
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
                <a href="#" class="btn btn-info btn-md" > View</a>
                <a href="#" class="btn btn-warning btn-md"> Edit</a>
                <a href="#" class="btn btn-danger btn-md"> Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{URL::route('add')}}" class="btn btn-success btn-md"><span class="glyphicon glyphicon-plus"></span> Add Post</a>
</div>
</body>
</html>
