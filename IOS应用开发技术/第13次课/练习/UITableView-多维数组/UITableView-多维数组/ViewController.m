//
//  ViewController.m
//  UITableView-多维数组
//
//  Created by xuhui on 16/6/16.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()<UITableViewDataSource>
{
    //所有的城市
    NSArray *_allCities;
}
@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    UITableView *tableView = [[UITableView alloc] initWithFrame:self.view.bounds style:UITableViewStyleGrouped];
    tableView.dataSource = self;
    [self.view addSubview:tableView];
    
    _allCities = @[
      @[@"广州",@"深圳",@"梅州",@"东莞"],
      @[@"长沙",@"益阳",@"岳阳"],
      @[@"武汉",@"黄冈"],
      @[@"桂林"]
      ];
    
}

#pragma mark - 数据源方法

#pragma mark 一共有多少组
-(NSInteger)numberOfSectionsInTableView:(UITableView *)tableView
{
    return _allCities.count;
}

#pragma mark 第section组有多少行
-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    //取得第section组的所有城市
    NSArray *sectionCities = _allCities[section];
    
    //第section组城市的个数
    return sectionCities.count;
}

#pragma mark 返回每一行显示的内容（每行显示怎样的cell）
-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    UITableViewCell *cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleDefault reuseIdentifier:nil];
    
    //indexPath标识唯一的一行，第section组的第row行
    cell.textLabel.text = _allCities[indexPath.section][indexPath.row];
    
    return cell;
}

#pragma mark 第section组显示的头部标题
-(NSString *)tableView:(UITableView *)tableView titleForHeaderInSection:(NSInteger)section
{
    if (section == 0) return @"广东";
    if (section == 1) return @"湖南";
    if (section == 2) return @"湖北";
    if (section == 3) return @"广西";
    return nil;
}

#pragma mark 第section组显示的尾部标题
-(NSString *)tableView:(UITableView *)tableView titleForFooterInSection:(NSInteger)section
{
    if (section == 0) return @"广东省会是广州";
    if (section == 1) return @"湖南省会是长沙";
    if (section == 2) return @"湖北省会是武汉";
    if (section == 3) return @"广西省会是南宁";
    return nil;
}


@end
