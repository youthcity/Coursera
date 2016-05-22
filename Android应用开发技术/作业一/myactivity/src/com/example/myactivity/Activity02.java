package com.example.myactivity;

import android.app.Activity;

import android.os.Bundle;
import android.util.Log;

public class Activity02 extends Activity {
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_life01);
		Log.i("Activity02", "onCreate()");
	}
	
	protected void onStrat() {
		super.onStart();
		Log.i("Activity02", "onStart()");
	}
	
	protected void onRestart() {
		super.onRestart();
		Log.i("Activity02", "onRestart()");
	}
	
	protected void onResume() {
		super.onResume();
		Log.i("Activity02", "onResume()");
	}
	
	protected void onPause() {
		super.onPause();
		Log.i("Activity02", "onPause()");
	}
	
	protected void onStop() {
		super.onStop();
		Log.i("Activity02", "onStop()");
	}
	
	protected void onDestroy() {
		super.onStop();
		Log.i("Activity02", "onDestroy()");
	}
	
	
}
