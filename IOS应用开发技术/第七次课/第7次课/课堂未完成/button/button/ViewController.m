//
//  ViewController.m
//  button
//
//  Created by xuhui on 16/5/25.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()

@end

@implementation ViewController

- (IBAction)move:(id)sender {
    //_btn.frame.origin.y -= 50;
    [UIView beginAnimations:nil context:nil];
    [UIView setAnimationDuration:1.0];
    
    CGRect tempFrame = _btn.frame;
    switch ([sender tag]) {
        case 1:
             tempFrame.origin.y -= 50;
            break;
            
        case 2:
            tempFrame.origin.x += 50;
            break;

        case 3:
            tempFrame.origin.y += 50;
            break;

        case 4:
            tempFrame.origin.x -= 50;
            break;

        default:
            break;
    }
    //tempFrame.origin.y -= 50;
    _btn.frame = tempFrame;
    
    [UIView commitAnimations];
}
- (IBAction)rotate:(id)sender {
    [UIView beginAnimations:nil context:nil];
    [UIView setAnimationDuration:1.0];
    
    int i = ([sender tag] == 11)? -1:1;
    
    _btn.transform = CGAffineTransformRotate(_btn.transform, M_PI_4 * i );
    
    [UIView beginAnimations:nil context:nil];
    [UIView setAnimationDuration:1.0];
   }

- (IBAction)scale:(id)sender {
    [UIView beginAnimations:nil context:nil];
    [UIView setAnimationDuration:1.0];
   
    CGFloat s =([sender tag] == 21)? 1.2:0.8;

    _btn.transform = CGAffineTransformScale(_btn.transform, s , s);
    [UIView beginAnimations:nil context:nil];
    [UIView setAnimationDuration:1.0];
}
@end
