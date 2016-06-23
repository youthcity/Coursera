package com.Filte.myfilte;

import java.io.IOException;

import javax.servlet.Filter;
import javax.servlet.FilterChain;
import javax.servlet.FilterConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

public class MyFilter implements Filter {

	@Override
	public void destroy() {
		// TODO Auto-generated method stub
		
	}

	public void doFilter(ServletRequest servletRequest,  
            ServletResponse servletResponse, FilterChain filterChain)  
            throws IOException, ServletException {  
  
        HttpServletRequest req = (HttpServletRequest) servletRequest;  
        HttpSession session = req.getSession();  
          
        String username = (String)session.getAttribute("username");  
          
        if (username != null&&username!="") {  
            // 如果现在存在了session，则请求向下继续传递  
            filterChain.doFilter(servletRequest, servletResponse);  
        } else {  
            // 跳转到提示登陆页面  
            servletRequest.getRequestDispatcher("FilterError.jsp").forward(servletRequest, servletResponse);  
        }  
    } 

	@Override
	public void init(FilterConfig filterConfig) throws ServletException {
		// TODO Auto-generated method stub
		
	}

}
