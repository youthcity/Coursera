//
//  ViewController.m
//  02 transform
//
//  Created by xuhui on 16/5/23.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

#define kDelta 50

@interface ViewController ()

@end

@implementation ViewController

//- (IBAction)up:(id)sender {
//    //OC语法规定不允许直接修改某个对象结构体属性的成员
//    //_btn.frame.origin.y -= 10;
//    
//    //0 动画（头部-开始动画）
//    [UIView beginAnimations:nil context:nil];
//    //设置动画的执行时间
//    [UIView setAnimationDuration:1.0];
//    
//    //1、先取出frame
//    CGRect tempFrame = _btn.frame;
//    //2、修改y值
//    tempFrame.origin.y -= 50;
//    //3、重新赋值按钮的frame
//    _btn.frame = tempFrame;
//    
//    //4 动画（尾部-提交动画-执行动画）
//    [UIView commitAnimations];
//    
//}

-(void)btnClickWithblock:(void(^)())block
{
    [UIView beginAnimations:nil context:nil];
    [UIView setAnimationDuration:1.0];
   
    block();
    
    [UIView commitAnimations];

}

#pragma mark - 按钮控制走动（上下左右）
- (IBAction)run:(id)sender {
    //NSLog(@"%@",sender);
    
        //0 动画（头部-开始动画）
        //[UIView beginAnimations:nil context:nil];
        //设置动画的执行时间
        //[UIView setAnimationDuration:1.0];
    
        //1、先取出frame
        //CGRect tempFrame = _btn.frame;
        //2、取出按钮的tag标记，根据tag值修改x或y值
//    switch ([sender tag]) {
//        case 1:
//             tempFrame.origin.y -= kDelta;
//            break;
//        case 2:
//            tempFrame.origin.x += kDelta;
//            break;
//        case 3:
//            tempFrame.origin.y += kDelta;
//            break;
//        case 4:
//            tempFrame.origin.x -= kDelta;
//            break;
//        default:
//            break;
//    }
        //3、重新赋值按钮的frame
        //_btn.frame = tempFrame;
    
        //4 动画（尾部-提交动画-执行动画）
        //[UIView commitAnimations];
    [self btnClickWithblock:^{
        CGRect tempFrame = _btn.frame;
            switch ([sender tag]) {
                case 1:
                     tempFrame.origin.y -= kDelta;
                    break;
                case 2:
                    tempFrame.origin.x += kDelta;
                    break;
                case 3:
                    tempFrame.origin.y += kDelta;
                    break;
                case 4:
                    tempFrame.origin.x -= kDelta;
                    break;
                default:
                    break;
            }
        _btn.frame = tempFrame;
    }];
}


#pragma mark - 左旋转\右旋转
- (IBAction)Rotate:(id)sender
{
    [UIView beginAnimations:nil context:nil];
    [UIView setAnimationDuration:1.0];
    
    
    //向左旋转45°
    //_btn.transform = CGAffineTransformMakeRotation(- M_PI_4);
//    if (10 == [sender tag]) {
//        _btn.transform = CGAffineTransformRotate(_btn.transform, -M_PI_4);
//    }
//    else {
//        _btn.transform = CGAffineTransformRotate(_btn.transform, M_PI_4);
//    }
    
    _btn.transform = CGAffineTransformRotate(_btn.transform, M_PI_4 * (10 == [sender tag]?-1:1));
    [UIView commitAnimations];
    
}

- (IBAction)scale:(id)sender
{
    [UIView beginAnimations:nil context:nil];
    [UIView setAnimationDuration:1.0];
    CGFloat scale = [sender tag] == 20?1.2:0.8;
    _btn.transform = CGAffineTransformScale(_btn.transform,scale, scale);
    [UIView commitAnimations];
}

- (IBAction)reset:(id)sender {
    //清空之前所有的形变状态（消除以前的旋转、缩放等状态）
    //_btn.transform = CGAffineTransformIdentity;
    [self btnClickWithblock:^{
        _btn.transform = CGAffineTransformIdentity;
    }];
}
@end
