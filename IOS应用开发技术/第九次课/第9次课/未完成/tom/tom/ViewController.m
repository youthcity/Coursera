//
//  ViewController.m
//  tom
//
//  Created by xuhui on 16/6/3.
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


//- (IBAction)drinkMilk:(UIButton *)sender {
//    [self playAnim:81 filename:@"drink"];
//}
//
//- (IBAction)eat:(id)sender {
//    [self playAnim:24 filename:@"pie"];
//}

-(void)playAnim:(int)count filename:(NSString *)filename
{
    NSMutableArray *images = [NSMutableArray array];
    
    for (int i =0; i < count; i++) {
        NSString *name = [NSString stringWithFormat:@"%@_%02d.jpg",filename,i];
        NSLog(@"%@",name);
        UIImage *img = [UIImage imageNamed:name];
        [images addObject:img];
    }
    
    _tom.animationImages = images;
    
    _tom.animationRepeatCount = 1;
    
    [_tom startAnimating];

}
- (IBAction)btnClick:(UIButton *)sender{
    }
@end
