package com.example.helloworld;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;

public class Activity03 extends Activity {
	private EditText et_name;
	private EditText et_age;
	private Button btn_send;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity03);
		et_name = (EditText) findViewById(R.id.editName);
		et_age = (EditText) findViewById(R.id.editAge);
		btn_send = (Button) findViewById(R.id.btndata);
		
		btn_send.setOnClickListener(new OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				passData();
			}
		});
	}
	
	public void passData(){
		Intent intent = new Intent(this, Activity04.class);
		intent.putExtra("name", et_name.getText().toString().trim());
		intent.putExtra("age", et_age.getText().toString().trim());
		startActivity(intent);
	}
	
}
