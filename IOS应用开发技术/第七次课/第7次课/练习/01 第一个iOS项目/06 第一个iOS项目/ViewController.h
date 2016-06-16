//
//  ViewController.h
//  06 第一个iOS项目
//
//  Created by xuhui on 16/5/19.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController

//声明一个方法来监听按钮点击IBAction  IBAction==void,能否让方法显示到storyboard的右击列表中
-(IBAction)btnClick;

//声明2个属性来保存2个文本输入框，IBOutlet能否让方法显示到storyboard的右击列表中
@property(nonatomic,weak) IBOutlet UITextField *num1;
@property(nonatomic,weak) IBOutlet UITextField *num2;

@property(nonatomic,weak) IBOutlet UILabel *result;

@end

