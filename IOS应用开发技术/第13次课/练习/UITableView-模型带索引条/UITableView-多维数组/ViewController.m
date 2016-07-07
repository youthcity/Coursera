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

    Province *gd = [Province provinceWithHeader:@"广东" footer:@"广东的省会是广州" cities:@[@"广州",@"深圳",@"梅州",@"东莞"]];
    
    Province *hn = [Province provinceWithHeader:@"湖南" footer:@"湖南的省会是长沙" cities:@[@"长沙",@"益阳",@"岳阳"]];
    
    Province *gd2 = [Province provinceWithHeader:@"广东2" footer:@"广东的省会是广州" cities:@[@"广州",@"深圳",@"梅州",@"东莞"]];
    
    Province *hn2 = [Province provinceWithHeader:@"湖南2" footer:@"湖南的省会是长沙" cities:@[@"长沙",@"益阳",@"岳阳"]];
    
    Province *gd3 = [Province provinceWithHeader:@"广东3" footer:@"广东的省会是广州" cities:@[@"广州",@"深圳",@"梅州",@"东莞"]];
    
    Province *hn3 = [Province provinceWithHeader:@"湖南3" footer:@"湖南的省会是长沙" cities:@[@"长沙",@"益阳",@"岳阳"]];
    
    _allProvinces = @[gd,hn,gd2,hn2,gd3,hn3];
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

#pragma mark 返回表格右边显示的索引条
-(NSArray<NSString *> *)sectionIndexTitlesForTableView:(UITableView *)tableView
{
    //return @[@"广东",@"湖南",@"广东2",@"湖南2",@"广东3",@"湖南3"];
    NSMutableArray *titles = [NSMutableArray array];
    
    for (Province *p in _allProvinces) {
        [titles addObject:p.header];
    }
    
    return titles;
}

@end
