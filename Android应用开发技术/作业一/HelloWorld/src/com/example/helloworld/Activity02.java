package com.example.helloworld;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Toast;

public class Activity02 extends Activity {
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onCreate(savedInstanceState);
		setContentView(R.layout.user_login);
	}
	
	public void click(View v) {
		// TODO Auto-generated method stub
		Toast.makeText(this, "��¼�ɹ�", 0).show();
	}
	
}
