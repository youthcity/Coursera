//
//  RowView.h
//  联系人管理1
//
//  Created by xuhui on 16/6/16.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface RowView : UIView

+(id)rowViewWithIcon:(NSString *)icon name:(NSString *)name;
@property (weak, nonatomic) IBOutlet UIButton *iconBtn;
@property (weak, nonatomic) IBOutlet UILabel *nameLabel;

@end
