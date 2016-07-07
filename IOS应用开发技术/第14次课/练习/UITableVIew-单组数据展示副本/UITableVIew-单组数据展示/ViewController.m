//
//  ViewController.m
//  UITableVIew-单组数据展示
//
//  Created by xuhui on 16/6/21.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"
#import "Shop.h"

@interface ViewController ()<UITableViewDataSource,UITableViewDelegate>
{
    NSMutableArray *_shops;
}

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    //创建数据
    _shops = [NSMutableArray array];
    
    //创建数据
    Shop *shop1 = [Shop shopWithName:@"图书/音像" icon:@"010.png" desc:@"小说、情感"];
    
    Shop *shop2 = [Shop shopWithName:@"母婴用品" icon:@"011.png" desc:@"奶粉、童装"];
    
    Shop *shop3 = [Shop shopWithName:@"玩具" icon:@"012.png" desc:@"小汽车、洋娃娃"];
    
   [_shops addObjectsFromArray:@[shop1,shop2,shop3]];
    
    //添加其他假数据
    for (int i = 0; i<20; i++) {
        NSString *name = [NSString stringWithFormat:@"随机产品-%d",i];
        NSString *desc = [NSString stringWithFormat:@"%@-好好好",name];
        NSString *icon = [NSString stringWithFormat:@"01%d.png",i % 9];
        Shop *shop = [Shop shopWithName:name icon:icon desc:desc];
        
        [_shops addObject:shop];
    }
}

#pragma mark 一共1组
//不实现此方法，默认就认为是1组

//-(NSInteger)numberOfSectionsInTableView:(UITableView *)tableView
//{
//    return 1;
//}

#pragma mark 这一组里面有多少行
-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    return _shops.count;
}

#pragma mark 返回第indexPath这行对应的内容
-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    UITableViewCell *cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleSubtitle reuseIdentifier:nil];
    
    //取出这行对应的产品
    Shop *shop = _shops[indexPath.row];
    
    //产品名称
    cell.textLabel.text = shop.name;
    
    //产品描述
    cell.detailTextLabel.text = shop.desc;
    
    //产品图片
    cell.imageView.image = [UIImage imageNamed:shop.icon];
    
    //设置右边的小图标
    cell.accessoryType = UITableViewCellAccessoryDisclosureIndicator;
    
    return cell;
}

#pragma mark - 代理方法
#pragma mark 返回indexPath这行cell的高度
-(CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath
{
    return 70;
}

@end
