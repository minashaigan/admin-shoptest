<!-- Header -->
<style>
    #user {
        background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("/img/02.png") no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        margin: 10px 15px;
        width: 300px;
        padding-bottom: 30px;
    }
    #user h4,#user p {
        color: #fff;
    }
    .fa-circle{
        color:rgba(0, 0, 0, 0.5);
        opacity: 0.8;
    }
    #post {
        background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("/img/03.png") no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        color:white;
        width: 300px;
        margin: 10px 15px;
        padding-bottom: 30px;
    }
    #post h4,#post p {
        color: #fff;
    }
    #image {
        background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("/img/04.png") no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        color:white;
        margin: 10px 15px;
        width: 300px;
        padding-bottom: 30px;
    }
    #image h4,#image p {
        color: #fff;
    }
    .fa-stack-1x {
        color:#fff;
    }
    .btn-light {
        border-radius: 0;
        color: #337ab7;
        background-color: rgb(255,255,255);
    }

    .btn-light:hover,
    .btn-light:focus,
    .btn-light:active {
        color: #fff;
        background-color: #fed136;
    }
</style>
<!-- Theme CSS -->
<header>
<div class="container">
    <div class="row text-center">
            <div class="col-md-4 col-sm-6">
                <div class="service-item" id="user">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-users fa-stack-1x text-primary"></i>
                    </span>
                    <h4>
                        <strong>1 User</strong>
                    </h4>
                    <p>You have 1 users that active in your website.</p>
                    <p>Click on 'View More' to view amount of users of your websire</p>
                    <a href="{{URL::route('home')}}" class="btn btn-light">View More</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-item" id="post">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-newspaper-o fa-stack-1x text-primary"></i>
                    </span>
                    <h4>
                        <strong>1 Post</strong>
                    </h4>
                    <p>You have 1 posts that active in your website.</p>
                    <p>Click on 'View All Posts' to view all your current posts</p>
                    <a href="{{URL::route('home')}}" class="btn btn-light">View All Posts</a>
                </div>

            </div>
            <div class="col-md-4 col-sm-6" >
                <div class="service-item" id="image">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="	fa fa-image fa-stack-1x text-primary"></i>
                    </span>
                    <h4>
                        <strong>1 Image</strong>
                    </h4>
                    <p>You have 1 images that active in your website.</p>
                    <p>Click on 'View All Images' to view all your current users</p>
                    <a href="{{URL::route('home')}}" class="btn btn-light">View All Images</a>
                </div>

            </div>
    </div>
</div>
</header>