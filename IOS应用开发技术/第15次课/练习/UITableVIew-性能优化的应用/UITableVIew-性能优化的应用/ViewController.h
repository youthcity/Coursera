//
//  ViewController.h
//  UITableVIew-性能优化的应用
//
//  Created by xuhui on 16/6/23.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController

@property (weak, nonatomic) IBOutlet UILabel *titleLabel;

@property (weak, nonatomic) IBOutlet UIBarButtonItem *removeItem;
@property (weak, nonatomic) IBOutlet UITableView *tableView;

-(IBAction)remove;

@end

