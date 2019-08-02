<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       <nav class="navbar navbar-inverse navbar-static-top">
           <div class="container">
               <a class="navbar-brand" href="#">Title</a>
               <ul class="nav navbar-nav">
                   <li class="active"><a href="#">{{__('Home')}}</a></li>
                   <li><a href="#">{{__('About')}}</a></li>
                   <li><a href="#">{{__('Product')}}</a></li>
                   <li><a href="#">{{__('Blog')}}</a></li>
                   <li><a href="#">{{__('Contact')}}</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                   <li class="active">
                       <a href="{{route('lang',['lang' => 'en'])}}">English</a>
                   </li>
                   <li>
                       <a href="{{route('lang',['lang' => 'vi'])}}">Viet Nam</a>
                   </li>
               </ul>
           </div>
       </nav>
       <div class="container">
            @yield('site')
       </div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script src="Hello World"></script>
    </body>
</html>