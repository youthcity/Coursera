//
//  NewsViewController.m
//  UITableView-自定义cell（xib）
//
//  Created by xuhui on 16/6/27.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "NewsViewController.h"
#import "News.h"

@interface NewsViewController()
{
    NSMutableArray *_newses;
}
@end

@implementation NewsViewController

-(void)viewDidLoad
{
    [super viewDidLoad];
    self.tableView.rowHeight = 80;  //每一行的高度是一样的
    
    //加载plist文件
    NSString *path = [[NSBundle mainBundle] pathForResource:@"news" ofType:@"plist"];
    NSArray *array = [NSArray arrayWithContentsOfFile:path];
    
    //字典转模型
    _newses = [NSMutableArray array];
    for (NSDictionary *dict in array) {
        [_newses addObject:[News newsWithDict:dict]];
    }
}

-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    return _newses.count;
}

-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    //0、定义循环标记
    static NSString *CellIdentifier = @"news";
    
    //1、从缓存池中取出cell
    UITableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:CellIdentifier];
    
    //2、缓存池中没有cell
    if (cell == nil) {
//        NSArray *objects = [[NSBundle mainBundle] loadNibNamed:@"NewsCell" owner:nil options:nil];
        UINib *nib = [UINib nibWithNibName:@"NewsCell" bundle:[NSBundle mainBundle]];
        NSArray *objects = [nib instantiateWithOwner:nil options:nil];
        cell = objects[0];
    }
    
    //3、取出新闻模型
    //News *news = _newses[indexPath.row];
    return cell;
}

//#pragma mark 通过代理方法返回cell的高度
//如果每一行的高度不一样，就用这个方法
//-(CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath
//{
//    return 80;
//}
@end
