//
//  ViewController.m
//  UITableView-多组数组展示
//
//  Created by xuhui on 16/6/16.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()<UITableViewDataSource>
{
    NSArray *_gdcities;
    NSArray *_hncities;
    NSArray *_hbcities;
}
@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    //1、添加tableView
    UITableView *tableView = [[UITableView alloc] initWithFrame:self.view.bounds style:UITableViewStyleGrouped];
    tableView.dataSource = self;
    
    //2、初始化数据
    //广东
    _gdcities = @[@"广州",@"深圳",@"梅州",@"东莞"];
    _hncities = @[@"长沙",@"益阳",@"岳阳"];
    _hbcities = @[@"武汉",@"黄冈"];
    
    [self.view addSubview:tableView];
}

#pragma mark - 数据源方法

#pragma mark 一共有多少组
-(NSInteger)numberOfSectionsInTableView:(UITableView *)tableView
{
    return 3;
}

#pragma mark 第section组有多少行
-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    if(section == 0){
        return _gdcities.count;
    }else if(section == 1){
        return _hncities.count;
    }else{
        return _hbcities.count;
    }
}

#pragma mark 返回每一行显示的内容（每行显示怎样的cell）
-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    UITableViewCell *cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleDefault reuseIdentifier:nil];
    //indexPath标识唯一的一行，第section组的第row行
    
    NSString *text = nil;
    if (indexPath.section ==0) {
        text = _gdcities[indexPath.row];
    }else if(indexPath.section == 1){
        text = _hncities[indexPath.row];
    }else{
        text = _hbcities[indexPath.row];
    }
    
    cell.textLabel.text = text;
    //cell.textLabel.text = @"678";
    //NSLog(@"section = %d,row = %d",indexPath.section,indexPath.row);
    return cell;
}

@end
