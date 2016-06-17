//
//  ViewController.m
//  01 联系人管理
//
//  Created by xuhui on 16/5/31.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view, typically from a nib.
}

#pragma mark 添加一行
- (IBAction)add:(UIBarButtonItem *)sender {
    //0、取出最后一个子控件
    UIView *last = [self.view.subviews lastObject];
    //这行的Y值=最后一个子控件的Y值 + 最后一个子控件的高度 + 间距
    //NSLog(@"%@",last);
    CGFloat rowY = last.frame.origin.y + last.frame.size.height + 1;
    
    //1、创建一行
    UIView *rowView = [[UIView alloc] init];
    //rowView.Frame = CGRectMake(0, rowY, 320, 50);
    rowView.backgroundColor = [UIColor redColor];
    
    //2、添加一行到控制器的view中
    [self.view addSubview:rowView];
    
    //3、让删除Item有效
    _removeItem.enabled = YES;
    
    //4、执行动画
    rowView.frame = CGRectMake(320, rowY, 320, 50);
    rowView.alpha = 0;
    //4.1 开始动画
//    [UIView beginAnimations:nil context:nil];
//    [UIView setAnimationDuration:1.0];
    
//    [UIView animateWithDuration:1.0 animations:^{
//        rowView.frame = CGRectMake(0, rowY, 320, 50);
//        rowView.alpha = 1;
//    }];
    
    [UIView animateWithDuration:1.0 animations:^{
        rowView.frame = CGRectMake(0, rowY, 320, 50);
        rowView.alpha = 1;
    } completion:^(BOOL finished) {//动画执行完毕系统会自动调用
        //NSLog(@"移动完毕");
    }];
    
//    [UIView commitAnimations];
}

#pragma mark 删除一行
- (IBAction)remove:(UIBarButtonItem *)sender {
    //1、取出最后一个控件
    UIView *last = [self.view.subviews lastObject];
    
    //2、移除子控件
    //[last removeFromSuperview];
    
    [UIView animateWithDuration:1.0 animations:^{
        CGRect tempF = last.frame;
        tempF.origin.x = 320;
        last.frame = tempF;
        
        last.alpha = 0;
    } completion:^(BOOL finished) {
        [last removeFromSuperview];
        //3、判断剩下的子控件个数
        if (self.view.subviews.count == 1) {
            _removeItem.enabled = NO;
        }
    }];
    
//    //3、判断剩下的子控件个数
//    if (self.view.subviews.count == 1) {
//        _removeItem.enabled = NO;
//    }
}
@end
