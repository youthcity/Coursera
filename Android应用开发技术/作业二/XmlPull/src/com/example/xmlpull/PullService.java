package com.example.xmlpull;

import java.io.InputStream;
import java.util.ArrayList;
import java.util.List;

import org.xmlpull.v1.XmlPullParser;

import android.util.Xml;

public class PullService {
	public static List<Student> getStudents(InputStream inStream)
			throws Throwable {
		List<Student> students = null;
		Student mStudent = null;

		XmlPullParser parser = Xml.newPullParser();
		// �����ļ�������
		 parser.setInput(inStream, "UTF-8");
		// ������һ���¼�
		int eventType = parser.getEventType();
		// ֻҪ�����ĵ������¼�����һֱѭ��
		while (eventType != XmlPullParser.END_DOCUMENT) {
			switch (eventType) {
			case XmlPullParser.START_DOCUMENT:
				 students = new ArrayList<Student>();
				break;
			case XmlPullParser.START_TAG:
				String name = parser.getName();
				if ("student".equals(name)) {
					mStudent = new Student();
					mStudent.setId(parser.getAttributeValue(0));
				}
				if (mStudent != null) {
				if ("name".equals(name)) {
				// ��ȡ��������ǰָ��Ԫ�ص���һ���ı��ڵ��ֵ
					 mStudent.setName(parser.nextText());
					 }
				if ("age".equals(name)) {
					 // ��ȡ��������ǰָ��Ԫ�ص���һ���ı��ڵ��ֵ
						 mStudent.setAge(new Short(parser.nextText()));
				 }
				if ("sex".equals(name)) {
						 // ��ȡ��������ǰָ��Ԫ�ص���һ���ı��ڵ��ֵ
						 mStudent.setSex(parser.nextText());
					 }
				}
				break;
				// ��������Ԫ���¼�
				case XmlPullParser.END_TAG:
				//
				if ("student".equals(parser.getName())) {
				students.add(mStudent);
				 mStudent = null;
				}
				break;
			default:
				break;
			}
			eventType = parser.next();
		}
		return students;
	}
	
	
	
	
}
