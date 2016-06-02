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
		// 解析文件输入流
		 parser.setInput(inStream, "UTF-8");
		// 产生第一个事件
		int eventType = parser.getEventType();
		// 只要不是文档结束事件，就一直循环
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
				// 获取解析器当前指向元素的下一个文本节点的值
					 mStudent.setName(parser.nextText());
					 }
				if ("age".equals(name)) {
					 // 获取解析器当前指向元素的下一个文本节点的值
						 mStudent.setAge(new Short(parser.nextText()));
				 }
				if ("sex".equals(name)) {
						 // 获取解析器当前指向元素的下一个文本节点的值
						 mStudent.setSex(parser.nextText());
					 }
				}
				break;
				// 触发结束元素事件
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
