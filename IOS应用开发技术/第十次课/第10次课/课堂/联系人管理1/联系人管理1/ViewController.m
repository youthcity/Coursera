//
//  ViewController.m
//  联系人管理1
//
//  Created by xuhui on 16/6/8.
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

- (IBAction)add:(UIBarButtonItem *)sender {
    UIView *lastView = [self.view.subviews lastObject];
    CGFloat rowY = lastView.frame.origin.y + lastView.frame.size.height + 1;
    
    UIView *rowView = [[UIView alloc] init];
    rowView.backgroundColor = [UIColor redColor];
    rowView.frame = CGRectMake(320, rowY, 320, 50);
    rowView.alpha = 0;
    
    [self.view addSubview:rowView];
    _removeItem.enabled = TRUE;
    
    [UIView animateWithDuration:1.0 animations:^{
        rowView.frame = CGRectMake(0, rowY, 320, 50);
        rowView.alpha = 1;
    } completion:^(BOOL finished) {
        NSLog(@"OK");
    }];
    
    
    
}

- (IBAction)remove:(UIBarButtonItem *)sender {
    UIView *lastView = [self.view.subviews lastObject];
    
    [UIView animateWithDuration:1.0 animations:^{
        CGRect tempF = lastView.frame;
        tempF.origin.x = 320;
        lastView.frame = tempF;
        
        lastView.alpha = 0;
    } completion:^(BOOL finished) {
        [lastView removeFromSuperview];
        _removeItem.enabled = self.view.subviews.count > 1;
    }];
}
@end
