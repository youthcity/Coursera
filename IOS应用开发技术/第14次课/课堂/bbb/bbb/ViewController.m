//
//  ViewController.m
//  bbb
//
//  Created by xuhui on 16/6/24.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"
#import "Shop.h"

@interface ViewController ()<UITableViewDataSource>
{
    NSMutableArray *_shops;
}
@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];

    NSString *path =[[NSBundle mainBundle] pathForResource:@"shops" ofType:@"plist"];
    NSArray *array = [NSArray arrayWithContentsOfFile:path];
    
    _shops = [NSMutableArray array];
    
    for (NSDictionary *dict in array) {
        //Shop *s = [[Shop alloc] initWithDict:dict];
        Shop *s = [Shop shopWithDict:dict];
        [_shops addObject:s];
    }
}

@end
