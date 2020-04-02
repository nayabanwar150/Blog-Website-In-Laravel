
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BloggWeb</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<body>
    <!-- Navbar -->
<div>
    <nav class="navbar navbar-default homeNav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style=" font-family: 'Black Ops One', cursive;color: white;"><i class="fa fa-comments" aria-hidden="true" style="color:#ff5c33; font-size:23px;"></i>&nbsp;Blogg<span style="color: #ff5c33;">W</span>eb</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Welcome! </a></li>
                    <li><a href="/userPost"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp; Manage</a></li>
                    <li><a href="/login"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<br>
    <!-- Blog Section -->
    <section id="main">
    <div class="container">
      <div class="row">
      <div class="col-md-9">
          <!-- Website Overview -->
          @foreach ($postTable as $item)
          <div class="panel panel-default">
            <div class="panel-body">
              <div>
                  <img src="{{ $item->image}}" alt="" class="img-fluid" width="100%" height="300px">
              </div>
              <div>
                <h1>{{ $item->title}}</h1>
                  <p>{{ $item->author}}, {{ date('d-m-Y', strtotime($item->created)) }}</p>
              </div>
              <div>
                  <p>{{ $item->description}}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        <div class="col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item active main-color-bg">
             Popular Posts
            </a>
            @foreach ($postTable as $item)
            <a href="pages.html" class="list-group-item"> 
                <img src="{{ $item->image}}" alt="" class="img img-fluid" height="50px" width="60px">
                 <span>
                    {{ substr($item->title,0,23)."..."}}
                 </span>
            </a>
            @endforeach
          </div>

        </div>
        
      </div>
    </div>
  </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }} "></script>
</body>

</html>