package com.example.helloworld;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.widget.TextView;

public class Activity04 extends Activity {
	private TextView tv_name;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity04);
		
		//获取Intent
		Intent intent = getIntent();
		String name = intent.getStringExtra("name");
		String age = intent.getStringExtra("age");
		tv_name = (TextView) findViewById(R.id.textdata);
		
		tv_name.setText("恭喜你！来到这个世界"+age+"年！");
	}
}
