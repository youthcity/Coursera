//
//  RowView.m
//  联系人管理1
//
//  Created by xuhui on 16/6/16.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "RowView.h"

@implementation RowView

+(id)rowViewWithIcon:(NSString *)icon name:(NSString *)name
{
    RowView *view = [[NSBundle mainBundle] loadNibNamed:@"rowView" owner:nil options:nil][0];
    
    //UIButton *iconBtn = (UIButton *)[view viewWithTag:1];
    [view.iconBtn setImage:[UIImage imageNamed:icon] forState:UIControlStateNormal];
    
    //UILabel *nameLabel = (UILabel *)[view viewWithTag:2];
    view.nameLabel.text = name;
    
    return view;
}
@end
