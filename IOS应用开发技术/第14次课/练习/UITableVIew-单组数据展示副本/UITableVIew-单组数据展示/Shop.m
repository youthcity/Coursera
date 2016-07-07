//
//  Shop.m
//  UITableVIew-单组数据展示
//
//  Created by xuhui on 16/6/22.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "Shop.h"

@implementation Shop

+(id)shopWithName:(NSString *)name icon:(NSString *)icon desc:(NSString *)desc
{
    Shop *shop = [[Shop alloc] init];
    shop.icon = icon;
    shop.name = name;
    shop.desc = desc;
    return shop;
}

@end
