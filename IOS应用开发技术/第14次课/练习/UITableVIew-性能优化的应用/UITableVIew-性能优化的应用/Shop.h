//
//  Shop.h
//  UITableVIew-性能优化的应用
//
//  Created by xuhui on 16/6/23.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface Shop : NSObject

@property(nonatomic,copy)NSString *name;
@property(nonatomic,copy)NSString *icon;
@property(nonatomic,copy)NSString *desc;

-(id)initWithDict:(NSDictionary *)dict;
+(id)shopWithDict:(NSDictionary *)dict;

@end
