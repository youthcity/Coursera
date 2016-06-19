<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>登录效验</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<!--
	<link rel="stylesheet" type="text/css" href="styles.css">
	-->

  </head>
  
  <body>
   	<%
     //获取username
	String name=request.getParameter("uname");
   	String password=request.getParameter("upass");
 	if(!(name==null||"".equals(name)||password==null||"".equals(password))){
 	if("397731024@qq.com".equals(name)&&"123456".equals(password)){
 	response.setHeader("refresh","2;url=welcome.jsp");
 	session.setAttribute("userid",name);
 	%>
 	<h3>用户登录成功,两秒后跳转到欢迎页面</h3>
 	<h3>如何没有跳转,请按<a href="welcome.jsp">这里</a></h3>
 	<%
 	 }
 	}
 	%>


     
  </body>
</html>
