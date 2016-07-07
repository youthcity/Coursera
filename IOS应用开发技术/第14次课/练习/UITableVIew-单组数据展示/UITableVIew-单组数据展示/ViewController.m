//
//  ViewController.m
//  UITableVIew-单组数据展示
//
//  Created by xuhui on 16/6/21.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()<UITableViewDataSource,UITableViewDelegate>

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];

}

#pragma mark 一共1组
-(NSInteger)numberOfSectionsInTableView:(UITableView *)tableView
{
    return 1;
}

#pragma mark 这一组里面有多少行
-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    return 9;
}

#pragma mark 返回第indexPath这行对应的内容
-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    /*
     Default:不显示detailTextLabet
     Value1:在右边显示detailTextLabet
     Value2:不显示图片，显示detailTextLabet
     Subtitle:在底部显示detailTextLabet
     */
    UITableViewCell *cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleSubtitle reuseIdentifier:nil];
    
    cell.textLabel.text = [NSString stringWithFormat:@"产品-%ld",indexPath.row];
    
    NSString *imgName = [NSString stringWithFormat:@"01%ld.png",indexPath.row];
    cell.imageView.image = [UIImage imageNamed:imgName];
    //设置详情文字
    cell.detailTextLabel.text = [NSString stringWithFormat:@"产品%ld非常好",indexPath.row];
    
    //设置右边的小图标
    //cell.accessoryType = UITableViewCellAccessoryDisclosureIndicator;
    
    //设置最右边显示什么控件
    cell.accessoryView = [UIButton buttonWithType:UIButtonTypeContactAdd];
    
    return cell;
}

#pragma mark - 代理方法
#pragma mark 返回indexPath这行cell的高度
-(CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath
{
    return 70;
}

@end
