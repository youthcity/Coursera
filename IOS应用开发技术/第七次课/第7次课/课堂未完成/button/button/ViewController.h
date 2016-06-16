//
//  ViewController.h
//  button
//
//  Created by xuhui on 16/5/25.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController
- (IBAction)move:(id)sender;

@property (weak, nonatomic) IBOutlet UIButton *btn;

- (IBAction)rotate:(id)sender;
- (IBAction)scale:(id)sender;

@end

