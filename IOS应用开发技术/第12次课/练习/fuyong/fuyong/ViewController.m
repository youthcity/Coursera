//
//  ViewController.m
//  fuyong
//
//  Created by xuhui on 16/6/17.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"
#import "RowView.h"

@interface ViewController ()

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    RowView *view = [RowView rowViewWithIcon:@"018.png" name:@"Hello"];
    [self.view addSubview:view];
}


@end
