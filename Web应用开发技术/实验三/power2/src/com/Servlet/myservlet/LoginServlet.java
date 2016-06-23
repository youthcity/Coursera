package com.Servlet.myservlet;

import java.io.IOException;
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import com.JDBC.myjdbc.DBHelper;

public class LoginServlet extends HttpServlet {
    static String sql = null;  
    static DBHelper db1 = null;  
    static ResultSet ret = null; 
    
	public LoginServlet() {
		super();
		// TODO Auto-generated constructor stub
	}
	
    /** 
     * 初始化 
     */  
    public void init() throws ServletException  
    {} 
	
	@Override
	public void doGet(HttpServletRequest req, HttpServletResponse resp)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		doPost(req, resp);
	}
	
	/*
	@Override
	public void doPost(HttpServletRequest req, HttpServletResponse resp)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		String name =req.getParameter("userName");
		String pwd = req.getParameter("userPwd");
		String userType = req.getParameter("usertype");
		if((name!=null && !name.equals("")) && (pwd!=null && !pwd.equals(""))){  
            if(name.equals("397731024@qq.com")&&pwd.equals("123456"))  
            {  
            	
            	 if ("1".equals(userType)) { //common user
            		 HttpSession session = req.getSession();  
            		 session.setAttribute("username", name);  //用户登录加入到session中 
            		 session.setAttribute("userid",name);
            		 req.getRequestDispatcher("index.html").forward(req, resp);
            	   } else if ("2".equals(userType)) { //admin
	        		 HttpSession session = req.getSession();  
	        		 session.setAttribute("username", name);  //用户登录加入到session中 
	        		 session.setAttribute("userid",name);
	        		 req.getRequestDispatcher("welcome.jsp").forward(req, resp);
            	   } else {
            	       //return error.
            		   System.out.println(userType);
            		   System.out.println("error");
            	   }      
            }  
            else  
            {  
                req.getRequestDispatcher("LoginError.jsp").forward(req, resp);  
            }  
        }  
	}    */
	
	public void doPost(HttpServletRequest req, HttpServletResponse resp)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		String name =req.getParameter("userName");
		String pwd = req.getParameter("userPwd");
//		String userType = req.getParameter("usertype");
		
		//SQL查询
		 String sql = "select * from user where name='"+name+"' and password='"+pwd+"'";  
		 db1 = new DBHelper(sql);//创建DBHelper对象 
		 try {
            ret = db1.pst.executeQuery();//执行语句，得到结果集  
            if (ret.next()){  
            	 String userType = ret.getString(4);
            	 if ("1".equals(userType)) { //common user
            		 HttpSession session = req.getSession();  
            		 session.setAttribute("username", name);  //用户登录加入到session中 
            		 session.setAttribute("userid",name);
            		 req.getRequestDispatcher("index.html").forward(req, resp);
            	   } else if ("2".equals(userType)) { //admin
	        		 HttpSession session = req.getSession();  
	        		 session.setAttribute("username", name);  //用户登录加入到session中 
	        		 session.setAttribute("userid",name);
	        		 req.getRequestDispatcher("welcome.jsp").forward(req, resp);
            	   } else {
            	       //return error.
            		   System.out.println(userType);
            		   System.out.println("error");
            	   }    
            	 
            	 
            }else{  
            	 req.getRequestDispatcher("LoginError.jsp").forward(req, resp);   
            } 
            ret.close();  
            db1.close();//关闭连接  
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}//执行语句，得到结果集  
		 
	}
	
    /** 
     * 销毁 
     */  
    public void destroy()  
    {  
        super.destroy();  
    } 
	
}
