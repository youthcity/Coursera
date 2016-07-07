//
//  ViewController.m
//  UITableVIew-性能优化的应用
//
//  Created by xuhui on 16/6/23.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"
#import "Shop.h"

@interface ViewController ()<UITableViewDataSource,UITableViewDelegate>
{
    NSMutableArray *_shops;
    NSMutableArray *_deleteShops;  //存放即将被删除的模型数据
}
@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    //1、加载Plist，array中装的都是NSDictionary对象
    NSString *path = [[NSBundle mainBundle] pathForResource:@"shops" ofType:@"plist"];
    NSArray *array = [NSArray arrayWithContentsOfFile:path];
    
    //2、将array中的字典对象转成Shop模型对象
    _shops = [NSMutableArray array];
    for (NSDictionary *dict in array) {
        //2.1 创建模型
        Shop *s = [[Shop alloc] initWithDict:dict];
//        Shop *s = [[Shop alloc] init];
        //2.2 将字典的键值对（key-value）转成对应的模型属性
//        s.name = dict[@"name"];
//        s.icon = dict[@"icon"];
//        s.desc = dict[@"desc"];
        //2.3 将模型对象放进数组中
        [_shops addObject:s];
    }
    
    _deleteShops = [NSMutableArray array];
}

-(void)remove
{
    //1、删除模型数据
    [_shops removeObjectsInArray:_deleteShops];
    
    //2、刷新表格
    [self.tableView reloadData];
    
    //3、更改标题
    _titleLabel.text = @"淘宝";
    
    //4、清空_deleteShops(清空已经删除的数据)
    [_deleteShops removeAllObjects];
    
    //5、让删除item不能被点击
    _removeItem.enabled = NO;
}

#pragma mark - 数据源方法
#pragma mark 多少行数据
-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    return _shops.count;
}

-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    //1、定义一个标识
    static NSString *ID = @"cell";
    
    //2、去缓存池中取出可循环利用的cell
    UITableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:ID];
    
    //3、如果缓存中没有可循环利用的cell
    if (cell == nil) {
        cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleSubtitle reuseIdentifier:ID];
    }
    
    //4、显示商品数据
    // 4.0 取出indexPath这行对应的商品模型对象
    Shop *s = _shops[indexPath.row];
   
    //4.1 商品名称
    cell.textLabel.text = s.name;
    
    //4.2 商品描述
    cell.detailTextLabel.text = s.desc;
    
    //4.3 商品图片
    cell.imageView.image = [UIImage imageNamed:s.icon];
    
    //4.4 检测打钩状态
    if ([_deleteShops containsObject:s]) { //需要打钩
        cell.accessoryType = UITableViewCellAccessoryCheckmark;
    }else{  //不需要打钩
        cell.accessoryType = UITableViewCellAccessoryNone;
    }
    
    return cell;
}

#pragma mark - 代理方法
#pragma mark 每一行的高度
-(CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath
{
    return 80;
}

#pragma mark 监听cell的点击
#pragma mark 选中了某一行就会调用
-(void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath
{
    //每个cell都有选中状态（selected）
    NSLog(@"---select---%ld",indexPath.row);
    
    //0、取消选中这一行（去掉cell默认的蓝色背景）
    [tableView deselectRowAtIndexPath:indexPath animated:YES];
    
    //1、取出indexPath这行对应的cell
//    UITableViewCell *selectedCell = [tableView cellForRowAtIndexPath:indexPath];
//    
//    selectedCell.accessoryType = UITableViewCellAccessoryCheckmark;
    
    
    //1、控制当前行的数据是否需要选中
    Shop *s = _shops[indexPath.row];
    
    if ([_deleteShops containsObject:s]) { //之前是选中，现在取消选中
        [_deleteShops removeObject:s];
    }else{  //之前没有选中，现在选中
        [_deleteShops addObject:s];
    }
    
    //2、刷新表格
    //[tableView reloadData];
    [tableView reloadRowsAtIndexPaths:@[indexPath] withRowAnimation:UITableViewRowAnimationMiddle];
    
//    for (Shop *shop in _deleteShops) {
//        NSLog(@"%@",shop.name);
//    }
    
    //3、显示标题
    if (_deleteShops.count == 0) {
        _titleLabel.text = @"淘宝";
        _removeItem.enabled = NO;
    }else{
        _titleLabel.text = [NSString stringWithFormat:@"淘宝（%ld）",_deleteShops.count];
        _removeItem.enabled = YES;
    }
}

//#pragma mark 取消选中某一行会调用
//-(void)tableView:(UITableView *)tableView didDeselectRowAtIndexPath:(NSIndexPath *)indexPath
//{
//    NSLog(@"---deselect---%ld",indexPath.row);
//}

@end
