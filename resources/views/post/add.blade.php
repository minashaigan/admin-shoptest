<!DOCTYPE html>
<html lang="en">
<head>
    <title>3D Mad Max</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/Designcontest-Outline-3D.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <a href="{{URL::route('blog')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</header>
<div class="container">
    <h2>New Post</h2>
    <form>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" placeholder="Enter category">
        </div>
        <div class="form-group">
            <label for="name">Post Name:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter post name">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
