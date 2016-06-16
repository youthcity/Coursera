//
//  ViewController.m
//  02 Tom
//
//  Created by xuhui on 16/5/30.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()
{
    //保存所有图片个数
    NSDictionary *_dict;
}
@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    //1、获得tom.plist的全路径
    NSBundle *bundle = [NSBundle mainBundle];
    NSString *path = [bundle pathForResource:@"tom" ofType:@"plist"];
    
    //2、根据文件路径加载字典
    _dict = [NSDictionary dictionaryWithContentsOfFile:path];
    
}

//- (IBAction)drinkMilk:(UIButton *)sender {
//    //1、创建可变数组
//    NSMutableArray *images = [NSMutableArray array];
//    
//    //2、添加图片
//    for (int i = 0; i < 81; i++) {
//        NSString *name  = [NSString stringWithFormat:@"drink_%02d.jpg",i];
//        UIImage *img = [UIImage imageNamed:name];
//        [images addObject:img];
//    }
//    
//    //3、设置动画图片
//    _tom.animationImages = images;
//    
//    //4、只播放一次（序列帧动画）
//    _tom.animationRepeatCount = 1;
//    
//    //5、开始动画
//    [_tom startAnimating];
//}

-(void)playAnim:(int)count filename:(NSString *)filename
{
    //1、创建可变数组
    NSMutableArray *images = [NSMutableArray array];
    
    //2、添加图片
    for (int i = 0; i <count; i++) {
        NSString *name  = [NSString stringWithFormat:@"%@_%02d.jpg",filename,i];

        //有缓存无法释放，参数传的是文件名
        //UIImage *img = [UIImage imageNamed:name];
        
        //无缓存（用完就会释放，参数传的是全路径）
        NSString *path = [[NSBundle mainBundle] pathForResource:name ofType:nil];
        UIImage *img = [[UIImage alloc] initWithContentsOfFile:path];
        [images addObject:img];
    }
    
    //3、设置动画图片
    _tom.animationImages = images;
    
    //4、只播放一次（序列帧动画）
    _tom.animationRepeatCount = 1;
    
    //5、设置动画的持续时间
    _tom.animationDuration = 0.1 * count;
    
    //6、开始动画
    [_tom startAnimating];
}

//-(IBAction)eat:(UIButton *)sender {
//    [self playAnim:24 filename:@"pie"];
//}

- (IBAction)btnClick:(UIButton *)sender {
    //如果正在播放动画，直接返回
    if (_tom.isAnimating) return;
    
    //取出按钮文字
    NSString *title = [sender titleForState:UIControlStateNormal];
    
    //获得图片数量
    int count = [_dict[title] intValue];
    
    //播放动画
    [self playAnim:count filename:title];
}
@end
