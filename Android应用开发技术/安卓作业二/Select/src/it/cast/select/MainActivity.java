package it.cast.select;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.ProgressBar;
import android.widget.TextView;
import domain.ItemInfo;

public class MainActivity extends Activity {
	private ProgressBar mProgressBar1;
	private ProgressBar mProgressBar2;
	private ProgressBar mProgressBar3;
	private TextView mLifeTV;
	private TextView mAttackTV;
	private TextView mSpeedTV;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		mLifeTV = (TextView) findViewById(R.id.tv_life_progress);
		mAttackTV = (TextView) findViewById(R.id.tv_attack_progress);
		mSpeedTV = (TextView) findViewById(R.id.tv_speed_progress);
		initProgress(); 		
	}
	
	private void initProgress() {
		mProgressBar1 = (ProgressBar) findViewById(R.id.progressBar1);
		mProgressBar2 = (ProgressBar) findViewById(R.id.progressBar2);
		mProgressBar3 = (ProgressBar) findViewById(R.id.progressBar3);
		mProgressBar1.setMax(1000);        //�������ֵ1000
		mProgressBar2.setMax(1000);
		mProgressBar3.setMax(1000);
	}
	
	public void click(View view) {
		Intent intent = new Intent(this, ShopActivity.class);
		startActivityForResult(intent, 1); // ����������,������Ϊ1
	}
	
	public void click2(View view) {
		Intent intent = new Intent(this, ShopActivity.class);
		startActivityForResult(intent, 1); 
	}
	
	protected void onActivityResult(int requestCode, int resultCode, Intent data) {
		super.onActivityResult(requestCode, resultCode, data);
		if (data != null) {
              // �жϽ�����Ƿ����1,����1Ϊ�������װ��,����2Ϊ�������װ��
			if (resultCode == 1) {
				if (requestCode == 1) {
					ItemInfo info= (ItemInfo) data.getSerializableExtra("equipment");
					//����ProgressBar��ֵ
					updateProgress(info);
				}
			} 
		}
	}
	
	private void updateProgress(ItemInfo info) {
		int progress1 = mProgressBar1.getProgress();
		int progress2 = mProgressBar2.getProgress();
		int progress3 = mProgressBar3.getProgress();
		mProgressBar1.setProgress(progress1+info.getLife());
		mProgressBar2.setProgress(progress2+info.getAcctack());
		mProgressBar3.setProgress(progress3+info.getSpeed());
		mLifeTV.setText(mProgressBar1.getProgress()+"");
		mAttackTV.setText(mProgressBar2.getProgress()+"");
		mSpeedTV.setText(mProgressBar3.getProgress()+"");
	}
	

//	@Override
//	public boolean onCreateOptionsMenu(Menu menu) {
//		// Inflate the menu; this adds items to the action bar if it is present.
//		getMenuInflater().inflate(R.menu.main, menu);
//		return true;
//	}
//
//	@Override
//	public boolean onOptionsItemSelected(MenuItem item) {
//		// Handle action bar item clicks here. The action bar will
//		// automatically handle clicks on the Home/Up button, so long
//		// as you specify a parent activity in AndroidManifest.xml.
//		int id = item.getItemId();
//		if (id == R.id.action_settings) {
//			return true;
//		}
//		return super.onOptionsItemSelected(item);
//	}
}
