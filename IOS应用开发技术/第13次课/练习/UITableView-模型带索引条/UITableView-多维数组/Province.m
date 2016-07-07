//
//  Province.m
//  UITableView-多维数组
//
//  Created by xuhui on 16/6/20.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "Province.h"

@implementation Province

+(id)provinceWithHeader:(NSString *)header footer:(NSString *)footer cities:(NSArray *)cities
{
    Province *p = [[Province alloc] init];
    p.header = header;
    p.footer = footer;
    p.cities = cities;
    
    return p;
}


@end
