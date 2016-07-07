//
//  ViewController.m
//  UITableView-多维数组
//
//  Created by xuhui on 16/6/16.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

//省份字典中用到的key
#define kHeader @"header" //头部标题对应的key
#define kFooter @"footer" //尾部标题对应的key
#define kCities @"cities" //城市数组对应的key
@interface ViewController ()<UITableViewDataSource>
{
    //所有的省份
    NSArray *_allProvinces;
}
@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    //1、添加tableView
    UITableView *tableView = [[UITableView alloc] initWithFrame:self.view.bounds style:UITableViewStyleGrouped];
    tableView.dataSource = self;
    [self.view addSubview:tableView];
    
    //2、初始化数据
    _allProvinces = @[
                      @{
                          kHeader:@"广东",
                          kFooter:@"广东的省会是广州",
                          kCities:@[@"广州",@"深圳",@"梅州",@"东莞"]
                          },
                      @{
                          kHeader:@"湖南",
                          kFooter:@"湖南的省会是长沙",
                          kCities:@[@"长沙",@"益阳",@"岳阳"],
                          },
                      @{
                          kHeader:@"湖北",
                          kFooter:@"湖北的省会是武汉",
                          kCities:@[@"武汉",@"黄冈"]
                          },
                      @{
                          kHeader:@"广西",
                          kFooter:@"广西的省会是南宁",
                          kCities: @[@"桂林"]
                          }
                      ];
}

#pragma mark - 数据源方法

#pragma mark 一共有多少组
-(NSInteger)numberOfSectionsInTableView:(UITableView *)tableView
{
    return _allProvinces.count;
}

#pragma mark 第section组有多少行
-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    //1、取得第section组的省份
    NSDictionary *province = _allProvinces[section];
    
    //2、取得省份里面的城市数组
    NSArray *cities = province[kCities];
    
    return cities.count;
}

#pragma mark 返回每一行显示的内容（每行显示怎样的cell）
-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    UITableViewCell *cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleDefault reuseIdentifier:nil];
    
    //indexPath标识唯一的一行，第section组的第row行
    //取出第section组的省份中城市数组里面第row行的数据
    NSDictionary *province = _allProvinces[indexPath.section];
    NSArray *cities = province[kCities];
    cell.textLabel.text = cities[indexPath.row];
    
    return cell;
}

#pragma mark 第section组显示的头部标题
-(NSString *)tableView:(UITableView *)tableView titleForHeaderInSection:(NSInteger)section
{
    return _allProvinces[section][kHeader];
}

#pragma mark 第section组显示的尾部标题
-(NSString *)tableView:(UITableView *)tableView titleForFooterInSection:(NSInteger)section
{
    return _allProvinces[section][kFooter];
}


@end
