package com.example.myactivity;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;

public class Activity01 extends Activity {
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_life01);
		Log.i("Activity01", "onCreate()");
	}
	
	protected void onStrat() {
		super.onStart();
		Log.i("Activity01", "onStart()");
	}
	
	protected void onRestart() {
		super.onRestart();
		Log.i("Activity01", "onRestart()");
	}
	
	protected void onResume() {
		super.onResume();
		Log.i("Activity01", "onResume()");
	}
	
	protected void onPause() {
		super.onPause();
		Log.i("Activity01", "onPause()");
	}
	
	protected void onStop() {
		super.onStop();
		Log.i("Activity01", "onStop()");
	}
	
	protected void onDestroy() {
		super.onStop();
		Log.i("Activity01", "onDestroy()");
	}
	
	public void click(View view) {
		Intent intent = new Intent(this, Activity02.class);
		startActivity(intent);
	}
}
