//
//  ViewController.m
//  UITableView-多维数组
//
//  Created by xuhui on 16/6/16.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"
#import "Province.h"

//省份字典中用到的key
//#define kHeader @"header" //头部标题对应的key
//#define kFooter @"footer" //尾部标题对应的key
//#define kCities @"cities" //城市数组对应的key
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
    
    //2、初始化数据(模型对象，数据模型，Model，仅仅是用来存放数据的)
//    Province *gd = [[Province alloc] init];
//    gd.header = @"广东";
//    gd.footer = @"广东的省会是广州";
//    gd.cities = @[@"广州",@"深圳",@"梅州",@"东莞"];
//    
//    Province *hn = [[Province alloc] init];
//    hn.header = @"湖南";
//    hn.footer = @"湖南的省会是长沙";
//    hn.cities = @[@"长沙",@"益阳",@"岳阳"];
//    
//    Province *hb = [[Province alloc] init];
//    hb.header = @"湖北";
//    hb.footer = @"湖北的省会是武汉";
//    hb.cities = @[@"武汉",@"黄冈"];
    Province *gd = [Province provinceWithHeader:@"广东" footer:@"广东的省会是广州" cities:@[@"广州",@"深圳",@"梅州",@"东莞"]];
    
    Province *hn = [Province provinceWithHeader:@"湖南" footer:@"湖南的省会是长沙" cities:@[@"长沙",@"益阳",@"岳阳"]];
    
    _allProvinces = @[gd,hn];
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
    Province *province = _allProvinces[section];
    
    //2、取得省份里面的城市数组
    NSArray *cities = province.cities;
    
    return cities.count;
}

#pragma mark 返回每一行显示的内容（每行显示怎样的cell）
-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    UITableViewCell *cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleDefault reuseIdentifier:nil];
    
    //indexPath标识唯一的一行，第section组的第row行
    //取出第section组的省份中城市数组里面第row行的数据
    Province *province = _allProvinces[indexPath.section];
    NSArray *cities = province.cities;
    cell.textLabel.text = cities[indexPath.row];
    
    return cell;
}

#pragma mark 第section组显示的头部标题
-(NSString *)tableView:(UITableView *)tableView titleForHeaderInSection:(NSInteger)section
{
    Province *province = _allProvinces[section];
    return province.header;
    //return _allProvinces[section].header; id类型不用调用点语法
}

#pragma mark 第section组显示的尾部标题
-(NSString *)tableView:(UITableView *)tableView titleForFooterInSection:(NSInteger)section
{
    Province *province = _allProvinces[section];
    return province.footer;
}


@end
