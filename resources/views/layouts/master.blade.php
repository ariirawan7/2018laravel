
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>My Panda</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>

  @include('layouts.nav')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">MyPanda Blog</h1>
        <p class="lead blog-description">Let's explore your creativity by writting content this apps</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

      @yield('content')
      @include('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('layouts.footer')


  </body>
</html>
