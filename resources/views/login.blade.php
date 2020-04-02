<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Area | Account Login</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
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

      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"> Members Area <small>Account Login</small></h1>
        </div>
      </div>
    </div>
  </header>

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form method="POST" class="well" action="loginCheck">
            @csrf
            <div class="form-group">
              <label>User Name</label>
              <input type="text" class="form-control" placeholder="Enter User Name" name="uname">
            </div>
            @error('uname')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" name="pass">
            </div>
            @error('pass')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <button type="submit" class="btn btn-default btn-block" style="background: #013120; color:#fff;" onMouseOver="this.style.backgroundColor='red'" onMouseOut="this.style.backgroundColor='#013120'" name="login">Login</button>
            <br>
            <p style="text-align: center;">------------------------ or ------------------------</p>
            <button class="btn btn-default btn-block" style="background: #013120;" onMouseOver="this.style.backgroundColor='red'" onMouseOut="this.style.backgroundColor='#013120'"><a href="{{ url('adminLogin') }}" style="text-decoration: none; color: #fff;">Admin Login</a></button>
            <button class="btn btn-default btn-block" style="background: #013120;" onMouseOver="this.style.backgroundColor='red'" onMouseOut="this.style.backgroundColor='#013120'"><a href="/register" style="text-decoration: none; color: #fff;">Sign Up</a></button>
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
  <script src="js/bootstrap.min.js"></script>
</body>

</html>