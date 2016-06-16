//
//  ViewController.m
//  06 第一个iOS项目
//
//  Created by xuhui on 16/5/19.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()

@end

@implementation ViewController

#pragma mark 监听按钮点击
-(void)btnClick
{
    //1、获得文本输入框
    NSString *text1 = self.num1.text;
    NSString *text2 = self.num2.text;
    
    //2、将字符串转为整数
    int i1 = [text1 intValue];
    int i2 = [text2 intValue];
    
    //3、将结果显示到右边的标签中
    self.result.text = [NSString stringWithFormat:@"%d",i1 + i2];
    
    //NSLog(@"%d",i1 + i2);
    //NSLog(@"按钮被点击了");
}

@end
