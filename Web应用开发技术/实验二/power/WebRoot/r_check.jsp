<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>
<%@ page import="com.power.Bean.*"%>
<jsp:useBean id="r_user" class="com.power.Bean.UserBean" scope="page"></jsp:useBean>  
 <jsp:setProperty name="r_user" property="*" /> 
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>注册效验</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<!--
	<meta http-equiv="refresh" content="5;url=要跳转的页面"> 
	-->
	<!--
	<link rel="stylesheet" type="text/css" href="styles.css">
	-->

  </head>
  
  <body>
       	<%
     //获取username
     String userName =  r_user.getUserName();
     String userPwd =   r_user.getUserPwd();
     String userRpwd = r_user.getUserRpwd();
     out.println(userName);
     out.println(userPwd);
     out.println(userRpwd);
     
     List<String> list = new ArrayList<String>();
     if(null == userName || "".equals(userName))
     {
         list.add("username can't be blank!");
     }
     
     if(null == userPwd || userPwd.length()<6 || userPwd.length()>10)
     {
         list.add("password should be between 6 and 10");
     }
     
     if(null == userRpwd || userRpwd.length()<6 || userRpwd.length()>10)
     {
         list.add("repassword  should be between 6 and 10");
     }
     
     if(null != userPwd && null != userRpwd && !userPwd.equals(userRpwd))
     {
         list.add("password and repassword don't match!");
     }
     
     //结果通过和不通过
     if(list.isEmpty())
      {
    	 request.setAttribute("username", userName);
    	 request.setAttribute("password", userPwd);
    	 //服务器端跳转
    	 request.getRequestDispatcher("success.jsp").forward(request, response);
          
      }
      else 
      {
    	  request.setAttribute("error", list);
    	  request.getRequestDispatcher("error.jsp").forward(request,response);
      }
     
     
     %>
     
  </body>
</html>
