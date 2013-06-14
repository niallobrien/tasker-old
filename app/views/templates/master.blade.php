
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tasker &middot; Niall O'Brien</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="/assets/css/bootstrap.css" rel="stylesheet">
  <link href="/assets/css/custom.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <![endif]-->

      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="../assets/ico/favicon.png">
    </head>

    <body>
      <div class="container-narrow">

        @include('templates._nav')
        @include('templates._tagline')
        @yield('content')

      </div>
      <hr />
      @include('templates._marketing')
      @include('templates._footer')

  </body>
  </html>