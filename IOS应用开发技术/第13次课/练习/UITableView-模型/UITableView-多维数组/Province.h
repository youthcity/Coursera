//
//  Province.h
//  UITableView-多维数组
//
//  Created by xuhui on 16/6/20.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface Province : NSObject

//UI控件用weak,NSString用copy,其他对象一般用strong
@property(nonatomic,copy) NSString *header;
@property(nonatomic,copy) NSString *footer;
@property(nonatomic,strong) NSArray *cities;

+(id)provinceWithHeader:(NSString *)header footer:(NSString *)footer cities:(NSArray *)cities;

@end
