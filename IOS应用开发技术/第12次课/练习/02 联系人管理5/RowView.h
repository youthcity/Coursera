//
//  RowView.h
//  01 联系人管理
//
//  Created by xuhui on 16/6/6.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface RowView : UIView

+(id)rowViewWithIcon:(NSString *)icon name:(NSString *)name;

@property(nonatomic,weak) IBOutlet UIButton *iconBtn;
@property(nonatomic,weak) IBOutlet UILabel *nameLabel;

@end
