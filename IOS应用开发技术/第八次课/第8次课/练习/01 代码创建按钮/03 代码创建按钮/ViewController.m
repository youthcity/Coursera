//
//  ViewController.m
//  03 代码创建按钮
//
//  Created by xuhui on 16/5/24.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()

@end

@implementation ViewController

#pragma mark 控制器的view加载完毕的时候会调用一次
- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view, typically from a nib.
    
    //1、创建按钮
    //1.1 创建
    UIButton *btn = [[UIButton alloc] init];
    //1.2 设置按钮的尺寸和位置
    btn.frame = CGRectMake(0, 0, 100, 100);
    //1.3 设置按钮普通状态下的属性
    //1.3.1 设置背景图片
    UIImage *normal = [UIImage imageNamed:@"icon1.jpg"];
    [btn setBackgroundImage:normal forState:UIControlStateNormal];
    //1.3.2 设置文字
    [btn setTitle:@"hello" forState:UIControlStateNormal];
    //1.3.3 设置文字颜色
    [btn setTitleColor:[UIColor greenColor] forState:UIControlStateNormal];
    
    
    //1.4 设置按钮高亮状态下的属性
    //1.4.1 设置背景图片
    UIImage *highlighted = [UIImage imageNamed:@"icon2.jpg"];
    [btn setBackgroundImage:highlighted forState:UIControlStateHighlighted];
    //1.4.2 设置文字
    [btn setTitle:@"world" forState:UIControlStateHighlighted];
    //1.4.3 设置文字颜色
    [btn setTitleColor:[UIColor redColor] forState:UIControlStateHighlighted];
    
    //1.5 监听按钮
    [btn addTarget:self action:@selector(btnClick) forControlEvents:UIControlEventTouchUpInside];
    
    //2、添加按钮到控制器的view中
    [self.view addSubview:btn];
    
    //3、添加文本输入框
    UITextField *field = [[UITextField alloc] init];
    field.frame = CGRectMake(100, 100, 100, 50);
    field.backgroundColor = [UIColor redColor];
    
    //设置文本框在屏幕的中心
    CGFloat centerX = self.view.frame.size.width * 0.5;
    CGFloat centerY = self.view.frame.size.height *0.5;
    field.center = CGPointMake(centerX, centerY);
    
    //设置字体
    field.font = [UIFont systemFontOfSize:25];
    
    [self.view addSubview:field];
}

#pragma mark 监听按钮点击事件
-(void)btnClick
{
    NSLog(@"点击了按钮！");
}


@end
