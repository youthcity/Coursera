package com.example.helloworld;

import com.example.helloworld.Activity02;

import android.app.Activity;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;


public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
			
		//��ȡ���水ť
		Button button = (Button) findViewById(R.id.btnbrowser);
		//��button��ť��ӵ���¼�
		button.setOnClickListener(new OnClickListener() {
			
			public void onClick(View v) {
;
			 //��ͼ
	         Intent intent=new Intent();
	         //��ͼ����Ϊ����ʽ��ͼ
	         intent.setAction(Intent.ACTION_VIEW);
	         //��ͼ������
	         intent.setData(Uri.parse("http://www.baidu.com"));
	         //����
     	     startActivity(intent);
			}
		});
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		int id = item.getItemId();
		if (id == R.id.action_settings) {
			return true;
		}
		return super.onOptionsItemSelected(item);
	}
	
	public void click(View v) {
		// TODO Auto-generated method stub
		Intent intent = new Intent(this, Activity02.class);
		startActivity(intent);
	}
	
	public void click2(View v) {
		// TODO Auto-generated method stub
		Intent intent = new Intent(this, Activity03.class);
		startActivity(intent);
	}
}
