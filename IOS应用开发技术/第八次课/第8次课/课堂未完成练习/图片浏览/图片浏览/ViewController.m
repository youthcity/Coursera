//
//  ViewController.m
//  图片浏览
//
//  Created by xuhui on 16/5/27.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view, typically from a nib.
}


- (IBAction)sliderValueChange:(UISlider *)sender {
    //NSLog(@"%f",sender.value);
    _imageNumber.text = [NSString stringWithFormat:@"%.f/8",sender.value];
    
    NSString *imageName = [NSString stringWithFormat:@"%.f.jpg",sender.value];
    _imageView.image = [UIImage imageNamed:imageName];
    
    NSBundle *bundle = [NSBundle mainBundle];
    NSString *path = [bundle pathForResource:@"description" ofType:@"plist"];
    NSArray *allDescription = [NSArray arrayWithContentsOfFile:path];
    int no = (int)(sender.value + 0.5);
    _imageDescription.text = allDescription[no - 1];
}
@end
