package com.JDBC.myjdbc;

import java.sql.*;


public class DBHelper {  
	// URL指向要访问的数据库名power_db
    public static final String url = "jdbc:mysql://127.0.0.1/power_db";
	 // 驱动程序名
    public static final String name = "com.mysql.jdbc.Driver";  
    public static final String user = "root";  
    public static final String password = "";  
  
    public Connection conn = null;  
    public PreparedStatement pst = null;  
  
    public DBHelper(String sql) {  
        try {  
        	// 加载驱动程序
            Class.forName(name); 
            // 连续数据库
            conn = DriverManager.getConnection(url, user, password);//获取连接  
           
            pst = conn.prepareStatement(sql);//准备执行语句  
        } catch (Exception e) {  
            e.printStackTrace();  
        }  
    }  
  
    public void close() {  
        try {
        	this.conn.close();
        	this.pst.close();       
        } catch (SQLException e) {  
            e.printStackTrace();  
        }  
    }  
}  