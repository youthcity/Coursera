//
//  Shop.h
//  bbb
//
//  Created by xuhui on 16/6/24.
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
