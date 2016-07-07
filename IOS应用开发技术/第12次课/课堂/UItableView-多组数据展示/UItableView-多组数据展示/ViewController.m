//
//  ViewController.m
//  UItableView-多组数据展示
//
//  Created by xuhui on 16/6/17.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()<UITableViewDataSource>
{
    NSArray *_gdCities;
    NSArray *_jsCities;
    NSArray *_sdCities;
}
@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    UITableView *tableView = [[UITableView alloc] initWithFrame:self.view.bounds style:UITableViewStyleGrouped];
    
    tableView.dataSource = self;
    [self.view addSubview:tableView];
    
    _gdCities = @[@"广州",@"深圳"];
    _jsCities = @[@"南京",@"徐州",@"苏州"];
    _sdCities = @[@"济南",@"枣庄",@"青岛",@"日照"];
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView
{
    NSLog(@"section");
    return 3;
}

-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    if (section == 0) {
        return _gdCities.count;
    }else if(section == 1){
        return _jsCities.count;
    }else{
        return _sdCities.count;
    }
}

-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    UITableViewCell *cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleDefault reuseIdentifier:nil];
    
    if (indexPath.section == 0) {
        cell.textLabel.text =_gdCities[indexPath.row];
    }else if(indexPath.section == 1){
        cell.textLabel.text = _jsCities[indexPath.row];
    }else{
        cell.textLabel.text = _sdCities[indexPath.row];
    }
    
    return cell;
}

@end
