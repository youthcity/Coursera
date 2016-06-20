<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
 <!-- 导航栏 -->
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img id="brand" alt="Brand" src="img/logo.png" width="32" height="32" ></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">APP</a></li>
        <li class="dropdown">
          <a href="xingge.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">型格 <span class="caret"></span></a>
      <ul class="dropdown-menu">
              <li><a href="product/productBoy.html">男神</a></li>
              <li><a href="#">上装</a></li>
              <li><a href="#">下装</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="product/productGirl.html">女神</a></li>
              <li><a href="#">上装</a></li>
              <li><a href="#">下装</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="xingge.html">态度</a></li>
            </ul>
        </li>
          <li><a href="us.html">我们</a></li>
          <li><a href="xingge.html">新品</a></li>
      </ul>
      <!-- eyes center -->
       <a href="us.html" id="center-logo" ><img src="img/eyes32.png" alt="eye-logo"></a>
       <!-- eyes end -->
       <ul class="nav navbar-nav navbar-right">
         <li><a href="login.jsp">登录</a></li>
         <li><a href="register.jsp">注册</a></li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!-- end nav -->

  
