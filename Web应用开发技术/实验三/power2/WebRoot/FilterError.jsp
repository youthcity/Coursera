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
 		<% response.setHeader("refresh","3;url=login.jsp"); %>
 		<h1>Error!您还未登录，请先进行登录 <span class="glyphicon glyphicon-remove" style="color:#DC143C;"  aria-hidden="true"></span></h1>
  	 	<p class="lead">三秒后跳转到登录页面</p>
 		<h3>如何没有跳转,请按这里</h3>
 		<a class="btn btn-lg btn-primary" href="login.jsp">Login In »</a>    
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
