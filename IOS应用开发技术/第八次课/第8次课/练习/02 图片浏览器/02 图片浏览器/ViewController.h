//
//  ViewController.h
//  02 图片浏览器
//
//  Created by xuhui on 16/5/25.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController

- (IBAction)sliderValueChange:(UISlider *)sender;
@property (weak, nonatomic) IBOutlet UIImageView *imageView;
@property (weak, nonatomic) IBOutlet UILabel *imageNo;
@property (weak, nonatomic) IBOutlet UILabel *imageDesc;
@property (weak, nonatomic) IBOutlet UIView *settingView;
- (IBAction)setting:(id)sender;
- (IBAction)imageSizeChanged:(UISlider *)sender;
- (IBAction)nightMode:(UISwitch *)sender;

@end

