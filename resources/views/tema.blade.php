
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AESYSTEM</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.css" rel="stylesheet">

    <!-- Template style -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse z-depth-2">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="#">LOL</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" class="waves-effect waves-light">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#" class="waves-effect waves-light">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right waves-effect waves-light" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </div>
    </div>
</nav>


<!-- carousel -->
<div id="carousel-example-generic" class="carousel slide carousel-fade">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
        </li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="item active">
            <div class="carousel-caption hidden-xs">
                <div data-animation="animated fadeInRightBig">
                    <h2>This is the caption for slide 1</h2>
                    <h4>This is the caption for slide 1</h4>
                </div>
            </div>
        </div>
        <!-- /.item -->

        <!-- Second slide -->
        <div class="item">
            <div class="carousel-caption hidden-xs">
                <div data-animation="animated fadeInDownBig">
                    <h2>This is the caption for slide 2</h2>
                    <h4>This is the caption for slide 2</h4>
                </div>
            </div>
        </div>
        <!-- /.item -->

        <!-- Third slide -->
        <div class="item">
            <div class="carousel-caption hidden-xs">
                <div data-animation="animated fadeInLeftBig">
                    <h2>This is the caption for slide 3</h2>
                    <h4>This is the caption for slide 3</h4>
                </div>
            </div>
        </div>
        <!-- /.item -->

    </div>
    <!-- /.carousel-inner -->

    <!-- Controls -->
    <a class="left carousel-control new-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="fa fa fa-angle-left waves-effect waves-light"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control new-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="fa fa fa-angle-right waves-effect waves-light"></span>
        <span class="sr-only">Previous</span>
    </a>

</div>
<!-- /.carousel -->

<!-- Page content -->
<div class="container page-content">
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="http://brandflow.pl/wp-content/uploads/2015/08/k2.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis.</p>
                </div>
                <div class="card-action">
                    <button type="button" class="btn btn-primary waves-effect waves-light">Read more</button>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="http://brandflow.pl/wp-content/uploads/2015/08/k5.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis.</p>
                </div>
                <div class="card-action">
                    <button type="button" class="btn btn-primary waves-effect waves-light">Read more</button>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="http://brandflow.pl/wp-content/uploads/2015/08/k6.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis.</p>
                </div>
                <div class="card-action">
                    <button type="button" class="btn btn-primary waves-effect waves-light">Read more</button>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
</div>
<!--/. Page content -->

<!-- Footer -->
<footer class="page-footer indigo darken-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col-md-6">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2015 Copyright AE-SYSTEM
            <a class=white-text text-lighten-4 right" href="#!">Veja link</a>
        </div>
    </div>
</footer>

@yield('content')



<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="/js/jquery.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>

<!-- Material Design Bootstrap -->
<script type="text/javascript" src="/js/mdb.js"></script>


</body>

</html>