//
//  News.h
//  UITableView-自定义cell（xib）
//
//  Created by xuhui on 16/6/28.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface News : NSObject

@property(nonatomic,copy)NSString *title;
@property(nonatomic,copy)NSString *author;
@property(nonatomic,copy)NSString *icon;
@property(nonatomic,assign) int comments;

-(id)initWithDict:(NSDictionary *)dict;
+(id)newsWithDict:(NSDictionary *)dict;

@end
