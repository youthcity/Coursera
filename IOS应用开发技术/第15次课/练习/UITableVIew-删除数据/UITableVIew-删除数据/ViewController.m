//
//  ViewController.m
//  UITableVIew-删除数据
//
//  Created by xuhui on 16/6/24.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"
#import "Person.h"

@interface ViewController ()<UITableViewDataSource,UITableViewDelegate>
{
    NSMutableArray *_persons;
}
@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    _persons = [NSMutableArray array];
    for (int i = 0; i < 30; i++) {
        Person *p = [[Person alloc] init];
        p.name = [NSString stringWithFormat:@"person--%d",i];
        p.phone = [NSString stringWithFormat:@"%d",10000 + arc4random_uniform(10000000)];
        [_persons addObject:p];
    }
    
}

-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    return _persons.count;
}


-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    static NSString *ID = @"cell";
    
    UITableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:ID];
    
    if (cell == nil) {
        cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleValue1 reuseIdentifier:ID];
    }
    
    //设置数据
    //1、取出数据模型
    Person *p = _persons[indexPath.row];
    
    //2、姓名
    cell.textLabel.text = p.name;
    
    //3、电话
    cell.detailTextLabel.text = p.phone;
    
    return cell;
}

#pragma mark 删除
- (IBAction)remove:(UIBarButtonItem *)sender {
    //1、进入编辑模式
    //self.tableView.editing = YES;
    BOOL result = !self.tableView.editing;
    [self.tableView setEditing:result animated:YES];
}

#pragma mark 排序 当移动了某一行cell就会调用
//只要实现了这个方法，就会默认添加排序功能
-(void)tableView:(UITableView *)tableView moveRowAtIndexPath:(NSIndexPath *)sourceIndexPath toIndexPath:(NSIndexPath *)destinationIndexPath
{
    NSLog(@"%ld------%ld",sourceIndexPath.row,destinationIndexPath.row);
    //1、取出要拖动的模型数据
    Person *p = _persons[sourceIndexPath.row];
    
    //2、删除之前行的数据
    [_persons removeObjectAtIndex:sourceIndexPath.row];
    
    //3、插入数据到新的位置
    [_persons insertObject:p atIndex:destinationIndexPath.row];
    
}

#pragma mark - 代理方法
#pragma mark 当用户提交了有一个编辑操作就会调用
//只要实现了这个方法，就会默认添加滑动删除
-(void)tableView:(UITableView *)tableView commitEditingStyle:(UITableViewCellEditingStyle)editingStyle forRowAtIndexPath:(NSIndexPath *)indexPath
{
    //如果不是删除操作，直接返回
    if(editingStyle != UITableViewCellEditingStyleDelete) return;
    //NSLog(@"-----%ld",indexPath.row);
    //1、删除模型数据
    [_persons removeObjectAtIndex:indexPath.row];
    
    //2、刷新表格
    //[tableView reloadData];
    [tableView deleteRowsAtIndexPaths:@[indexPath] withRowAnimation:UITableViewRowAnimationTop];
}

@end
