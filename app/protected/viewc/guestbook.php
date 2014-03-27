
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <link href="global/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="global/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">
      
      <p>
         <a class="btn btn-lg btn-primary" href="/app/list" role="button">查看留言列表 &raquo;</a> 
      </p>
      <form class="form-signin" method="post"  action="/app/post" role="form">
        <h2 class="form-signin-heading">发布留言</h2>
        </br>
        <div class="control-group">
          
          <label class="control-label">输入您的名字</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="Your Name" name="username" required autofocus>
          </div>
        </div>
        </br>
        <div class="control-group">
          
          <label class="control-label" >输入您的留言</label>
          <div class="controls">
            <textarea class="form-control" placeholder="Your Message" name="message" rows="6" cols="200" required></textarea>
          </div>
        </div>
        </br></br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">发布</button>
        
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
