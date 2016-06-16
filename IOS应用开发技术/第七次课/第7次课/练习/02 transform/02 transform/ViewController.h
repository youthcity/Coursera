//
//  ViewController.h
//  02 transform
//
//  Created by xuhui on 16/5/23.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController

@property (weak, nonatomic) IBOutlet UIButton *btn;

//- (IBAction)up:(id)sender;
- (IBAction)run:(id)sender;
- (IBAction)Rotate:(id)sender;
- (IBAction)scale:(id)sender;
//重置
- (IBAction)reset:(id)sender;
@end

