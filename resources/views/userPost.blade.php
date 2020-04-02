
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
        <div class="col-md-10">
          <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Posts <small>Manage Blog Posts</small></h1>
        </div>
        <div class="col-md-2">
          <div class="postCreate pt-3">
            <button class="btn"><a href="/userInsert">Create Post</a></button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
            </a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">
                {{ $pages}}
              </span></a>
            <a href="/userPost" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">
                {{ $pages}}
              </span></a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">
                {{ $user + 1 }}
              </span></a>
          </div>

        </div>
        <div class="col-md-9">
          <!-- Website Overview -->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Posts</h3>
            </div>
            <div class="panel-body">
              </table>
              <br>
              <table class="table table-striped table-hover">
                <tr>
                  <th>Sr. No</th>
                  <th>Pos Id</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
                <tr>
                @foreach ($userPost as $item)
                    <td>{{ $serial = $serial + 1 }}</td>
                    <td>{{ $item->posid }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ substr($item->description,0,30) }}</td>
                    <td>{{ date('d-m-Y', strtotime($item->created)) }}</td>
                    <td><a class="btn btn-danger btn-sm" href="/deleteUserPost/{{ $item->posid }}">Delete</a></td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>

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