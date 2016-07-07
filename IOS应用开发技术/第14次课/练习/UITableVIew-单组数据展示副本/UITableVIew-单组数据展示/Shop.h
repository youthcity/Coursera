//
//  Shop.h
//  UITableVIew-单组数据展示
//
//  Created by xuhui on 16/6/22.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface Shop : NSObject

//图片
@property(nonatomic,copy)NSString *icon;
//名称
@property(nonatomic,copy)NSString *name;
//描述
@property(nonatomic,copy)NSString *desc;

+(id)shopWithName:(NSString *)name icon:(NSString *)icon desc:(NSString *)desc;

@end
