<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="能量，真正会玩运动">
    <meta name="author" content="youthcity">
    <!-- 浏览器地址Logo -->
    <link rel="icon" href="img/logo.png">

    <title>能量，真正会玩运动</title>
    <!-- css reset -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
<!-- NAVBAR
================================================== -->
  <body>
  <jsp:include page="header.jsp"/>    
    <div class="container">
      <div class="jumbotron">
        <h1>Congratulations !  <span class="glyphicon	 glyphicon-ok" style="color:	
#228B22;"  aria-hidden="true"></span></h1>
		<h3 class="leader">You have successfully registered.</h3>
       <div class="alert alert-success" role="alert"><strong>username:</strong>  <%= request.getAttribute("username") %></p> 
       </div>
       <div class="alert alert-success" role="alert"><strong>password:</strong>  <%= request.getAttribute("password") %><br></p> 
       </div> 	  
    	
        <p>
          <a class="btn btn-lg btn-primary" href="login.jsp" role="button">Return Login In »</a>
        </p>
      </div>

    </div> <!-- /container -->
  
	<jsp:include page="footer.jsp"/>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="js/xingge.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--     <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
