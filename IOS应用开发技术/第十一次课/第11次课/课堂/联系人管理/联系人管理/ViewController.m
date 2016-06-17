//
//  ViewController.m
//  联系人管理
//
//  Created by xuhui on 16/6/7.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()
{
    NSArray *_allNames;
}

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    _allNames = @[@"Lily",@"Mary",@"Tom",@"Mark",@"Anna",@"Jessica"];
    
    // Do any additional setup after loading the view, typically from a nib.
}

- (IBAction)add:(UIBarButtonItem *)sender {
    UIView *rowView = [self creatRowView];
    
    UIView *lastView = [self.view.subviews lastObject];
    CGFloat rowY = lastView.frame.origin.y + lastView.frame.size.height + 1;
    
    rowView.frame = CGRectMake(320, rowY, 320, 50);
    rowView.alpha = 0;
    
    [self.view addSubview:rowView];
    
    [UIView animateWithDuration:1.0 animations:^{
        rowView.frame = CGRectMake(0, rowY,320, 50);
        rowView.alpha = 1;
    } completion:^(BOOL finished) {
        NSLog(@"ok");
    }];
    _removeItem.enabled = TRUE;
}

- (IBAction)remove:(UIBarButtonItem *)sender {
    UIView *lastview = [self.view.subviews lastObject];
    
    [UIView animateWithDuration:1.0 animations:^{
        CGRect tempF = lastview.frame;
        tempF.origin.x = 320;
        lastview.frame = tempF;
        lastview.alpha = 0;
    } completion:^(BOOL finished) {
        [lastview removeFromSuperview];
        if (self.view.subviews.count > 1){
            _removeItem.enabled = TRUE;
        }else{
            _removeItem.enabled = FALSE;
        }
    }];
}

-(UIView *)creatRowView
{
    NSArray *views = [[NSBundle mainBundle] loadNibNamed:@"rowView" owner:nil options:nil];
    UIView *rowView = views[0];
    
    UIButton *icon = (UIButton *)[rowView viewWithTag:1];
    NSString *iconName = [NSString stringWithFormat:@"01%d.png",arc4random_uniform(9)];
    [icon setImage:[UIImage imageNamed:iconName] forState:UIControlStateNormal];
    
    UILabel *name = (UILabel *)[rowView viewWithTag:2];
    name.text = _allNames[arc4random_uniform(_allNames.count)];
    
    UIButton *delete = (UIButton *)[rowView viewWithTag:3];
    [delete addTarget:self action:@selector(deleteClick:) forControlEvents:UIControlEventTouchUpInside];
    
    return rowView;
}

-(void)iconClick:(UIButton *)btn
{
    UILabel *label = (UILabel *)[btn.superview viewWithTag:10];
    NSLog(@"名字是%@",label.text);
}

-(void)deleteClick:(UIButton *)btn
{
    [UIView animateWithDuration:1.0 animations:^{
        CGRect tempF = btn.superview.frame;
        tempF.origin.x = 320;
        btn.superview.frame = tempF;
        
        btn.superview.alpha = 0;
    } completion:^(BOOL finished) {
        int startIndex = [self.view.subviews indexOfObject:btn.superview];
        [btn.superview removeFromSuperview];
        [UIView animateWithDuration:1.0 animations:^{
            for (int i = startIndex; i<self.view.subviews.count; i++) {
                UIView *child = self.view.subviews[i];
                CGRect temF = child.frame;
                temF.origin.y -= 50 + 1;
                child.frame = temF;
            }
        }];
    }];
    _removeItem.enabled = self.view.subviews.count > 1;
}
@end
