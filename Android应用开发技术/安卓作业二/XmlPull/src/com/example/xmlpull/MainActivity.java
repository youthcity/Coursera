package com.example.xmlpull;

import java.io.InputStream;
import java.util.List;

import android.app.Activity;
import android.content.res.AssetManager;
import android.os.Bundle;
import android.util.Log;

import android.widget.Toast;

public class MainActivity extends Activity {


	 public void onCreate(Bundle savedInstanceState) {
	        super.onCreate(savedInstanceState);
	        setContentView(R.layout.activity_main);
	        
	        AssetManager asset = getAssets();
	        try {
	            InputStream input = asset.open("student.xml");
	            List<Student> list = PullService.getStudents(input);
	            for (Student stu : list) {
	            	String str ="Person ID: " + stu.getId() + ","
	                         + stu.getName() + ", " + stu.getAge() + ", "
	                         + stu.getSex();
	            	Toast.makeText(MainActivity.this, str, Toast.LENGTH_LONG).show();
	                   Log.e("StudentInfo","Person ID: " + stu.getId() + ","
	                         + stu.getName() + ", " + stu.getAge() + ", "
	                         + stu.getSex());
	            }
	        } catch (Throwable e) {
	            e.printStackTrace();
	        }
	    }
	

}
