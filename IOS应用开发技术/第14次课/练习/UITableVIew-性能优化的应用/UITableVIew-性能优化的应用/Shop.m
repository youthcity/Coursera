//
//  Shop.m
//  UITableVIew-性能优化的应用
//
//  Created by xuhui on 16/6/23.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "Shop.h"

@implementation Shop

-(id)initWithDict:(NSDictionary *)dict
{
    if (self = [super init]) {
        //将字典中的键值对转换成模型属性
        self.name = dict[@"name"];
        self.icon = dict[@"icon"];
        self.desc = dict[@"desc"];
    }
    return self;
}

+(id)shopWithDict:(NSDictionary *)dict
{
    Shop *s = [[self alloc] initWithDict:dict];
    return s;
}

@end
