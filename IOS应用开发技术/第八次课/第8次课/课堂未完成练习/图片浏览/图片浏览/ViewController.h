//
//  ViewController.h
//  图片浏览
//
//  Created by xuhui on 16/5/27.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController
@property (weak, nonatomic) IBOutlet UILabel *imageNumber;

@property (weak, nonatomic) IBOutlet UIImageView *imageView;
@property (weak, nonatomic) IBOutlet UILabel *imageDescription;
- (IBAction)sliderValueChange:(UISlider *)sender;

@end

