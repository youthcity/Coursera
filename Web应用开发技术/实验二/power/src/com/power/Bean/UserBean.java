package com.power.Bean;


public class UserBean {
	 	String userName = null;  
	    String userPwd = null;
	    String userRpwd = null;
	    
		boolean logined = false;  
	    //无参数的构造方法  
	    public UserBean(){  
	        //读取userNmae属性  
	    }  
	      
	    public String getUserRpwd() {
			return userRpwd;
		}

		public void setUserRpwd(String userRpwd) {
			this.userRpwd = userRpwd;
		}
	    
	    public String getUserName() {  
	        return userName;  
	    }  
	    public void setUserName(String userName) {  
	        this.userName = userName;  
	    }  
	    public String getUserPwd() {  
	        return userPwd;  
	    }  
	    public void setUserPwd(String userPwd) {  
	        this.userPwd = userPwd;  
	    }  
	    public boolean isLogined() {  
	        return logined;  
	    }  
	    public void setLogined(boolean logined) {  
	        this.logined = logined;  
	    }  
}
