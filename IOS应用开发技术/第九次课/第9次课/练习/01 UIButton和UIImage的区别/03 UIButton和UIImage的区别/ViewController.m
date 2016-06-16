//
//  ViewController.m
//  03 UIButton和UIImage的区别
//
//  Created by xuhui on 16/5/26.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"
/*
 1、显示图片
 1）UIImageView默认只能一种图片（图片默认会填充整个UIImageView）
 2）UIButton能显示2种图片
  *背景（背景会填充整个UIButton）
  *前置（覆盖在背景上的图片，按之前的尺寸显示）
 
 2、点击事件
 1）UIImageView默认是不能响应点击事件
 2）UIButton能响应点击事件
 
 3、使用场合
 1）UIImageView：只显示图片，不监听点击，点击了图片后不做任何反应
 2）UIButton：既显示图片，又监听点击，点击了图片后做一些其他事件
 
 4、UIButton可以显示文字
 */

@interface ViewController ()

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    //1、添加ImageView
    UIImageView *imageView = [[UIImageView alloc] init];
    imageView.image = [UIImage imageNamed:@"014.png"];
    imageView.frame = CGRectMake(0, 0, 50, 50);
    [self.view addSubview:imageView];
    
    //2、UIButton
    UIButton *btn = [[UIButton alloc] init];
    //设置背景图片
    [btn setBackgroundImage:[UIImage imageNamed:@"bgpic.png"] forState:UIControlStateNormal];
    [btn setImage:[UIImage imageNamed:@"016.png"] forState:UIControlStateNormal];
    btn.frame = CGRectMake(0, 100, 150, 150);
    
    [btn addTarget:self action:@selector(btnClick) forControlEvents:UIControlEventTouchUpInside];
    
    [btn setTitle:@"我是按钮" forState:UIControlStateNormal];
    [self.view addSubview:btn];
}

-(void)btnClick:(UIButton *)mybtn
{
    NSLog(@"%@",mybtn);
}

@end
