//
//  ViewController.h
//  01 联系人管理
//
//  Created by xuhui on 16/5/31.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController

//添加
- (IBAction)add:(UIBarButtonItem *)sender;

//删除
- (IBAction)remove:(UIBarButtonItem *)sender;

-(IBAction)deleteClick:(UIButton *)btn;

@property (weak, nonatomic) IBOutlet UIBarButtonItem *removeItem;

@end

