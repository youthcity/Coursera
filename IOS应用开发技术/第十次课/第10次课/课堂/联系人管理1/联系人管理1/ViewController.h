//
//  ViewController.h
//  联系人管理1
//
//  Created by xuhui on 16/6/8.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController

- (IBAction)add:(UIBarButtonItem *)sender;
- (IBAction)remove:(UIBarButtonItem *)sender;
@property (weak, nonatomic) IBOutlet UIBarButtonItem *removeItem;

@end

