//
//  RowView.m
//  01 联系人管理
//
//  Created by xuhui on 16/6/6.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "RowView.h"

@implementation RowView

+(id)rowViewWithIcon:(NSString *)icon name:(NSString *)name
{
    RowView *view = [[NSBundle mainBundle] loadNibNamed:@"RowView" owner:nil options:nil][0];
//    //1、设置图标
//    UIButton *iconBtn = (UIButton *)[view viewWithTag:1];
//    [iconBtn setImage:[UIImage imageNamed:icon] forState:UIControlStateNormal];
    [view.iconBtn setImage:[UIImage imageNamed:icon] forState:UIControlStateNormal];
//    
//    //2、设置姓名
//    UILabel *nameLabel = (UILabel *)[view viewWithTag:2];
//    nameLabel.text = name;
    view.nameLabel.text = name;
    
    return view;
}

@end
