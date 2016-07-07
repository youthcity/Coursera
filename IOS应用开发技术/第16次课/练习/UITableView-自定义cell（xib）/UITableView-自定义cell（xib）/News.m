//
//  News.m
//  UITableView-自定义cell（xib）
//
//  Created by xuhui on 16/6/28.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "News.h"

@implementation News

-(id)initWithDict:(NSDictionary *)dict
{
    if (self = [super init]) {
        //解析字典属性
        self.title = dict[@"title"];
        self.icon = dict[@"icon"];
        self.author = dict[@"author"];
        self.comments = [dict[@"comments"] intValue];
    }
    return self;
}

+(id)newsWithDict:(NSDictionary *)dict
{
    return [[self alloc] initWithDict:dict];
}

@end
