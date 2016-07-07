//
//  Shop.m
//  bbb
//
//  Created by xuhui on 16/6/24.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "Shop.h"

@implementation Shop

-(id)initWithDict:(NSDictionary *)dict
{
    if (self = [super init]) {
        self.name = dict[@"name"];
        self.icon = dict[@"icon"];
        self.desc = dict[@"desc"];
    }
    return self;
}

+(id)shopWithDict:(NSDictionary *)dict
{
    Shop *s = [[Shop alloc] initWithDict:dict];
    return s;
}

@end
