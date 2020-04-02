
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Area | Posts</title>
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ url('https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

</head>

<body>

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style=" font-family: 'Black Ops One', cursive;color: white;"><i class="fa fa-comments" aria-hidden="true" style="color:#ff5c33; font-size:23px;"></i>&nbsp;Blogg<span style="color: #ff5c33;">W</span>eb</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Welcome!  </a></li>
          <li><a href="/userHomePage"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp; Articles</a></li>
          <li><a href="/login"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Posts <small>Create</small></h1>
        </div>
      </div>
    </div>
  </header>

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          

        </div>
        <div class="col-md-9">
          <!-- Website Overview -->
          <form method="POST" action="userPostInsert" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">New Post</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Post Title</label>
                <input type="text" class="form-control" placeholder="Page Title" name="title">
              </div>
              @error('title')
                  <div class="alert alert-danger">{{$message}}</div>
              @enderror
              <div class="form-group">
                <label>Post Image</label>
                <input type="file" class="form-control" placeholder="Page Image" name="image">
              </div>
              @error('image')
                  <div class="alert alert-danger">{{$message}}</div>
              @enderror
              <div class="form-group">
                <label>Post Description</label>
                <textarea name="editor1" class="form-control" placeholder="Post Description"></textarea>
              </div>
              @error('editor1')
                  <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" name="publish">Publish</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

  <footer id="footer">
    <p>Copyright BlogggWeb, &copy; 2020</p>
  </footer>

  <script>
    CKEDITOR.replace('editor1');
  </script>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>