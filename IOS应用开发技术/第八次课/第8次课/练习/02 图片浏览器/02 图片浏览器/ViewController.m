//
//  ViewController.m
//  02 图片浏览器
//
//  Created by xuhui on 16/5/25.
//  Copyright © 2016年 xuhui. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()
{
    NSArray *_allDescs;
}
@end

@implementation ViewController

#pragma mark 控制器的view加载完毕后会调用一次
-(void)viewDidLoad
{
    [super viewDidLoad];
    //1、获得所有的描述（通过解析plist文件来创建数组对象，必须传入文件全路径）
    //如果要访问项目中资源包里面的所有资源，应该用mainbundle
    NSBundle *bundle = [NSBundle mainBundle];
    //获得文件的全路径
    NSString *path = [bundle pathForResource:@"descs" ofType:@"plist"];
    //NSLog(@"%@",path);
    //加载path对应的文件来创建数组
    _allDescs = [NSArray arrayWithContentsOfFile:path];
    
    //2、设置默认的描述
    _imageDesc.text = _allDescs[0];
}

#pragma mark slider值改变
- (IBAction)sliderValueChange:(UISlider *)sender {
    //NSLog(@"change-------%f",sender.value);
    
    //1、设置中间的图片
    //获得图片名称，%.f代表不保留任何小数
    NSString *imageName = [NSString stringWithFormat:@"%.f.jpg",sender.value];
    _imageView.image = [UIImage imageNamed:imageName];
    
    //2、设置序号（第几张）
    _imageNo.text = [NSString stringWithFormat:@"%.f/8",sender.value];
    
    //3、设置描述
    
    //获得所有的描述（通过解析plist文件来创建数组对象，必须传入文件全路径）
//    //如果要访问项目中资源包里面的所有资源，应该用mainbundle
//    NSBundle *bundle = [NSBundle mainBundle];
//    //获得文件的全路径
//    NSString *path = [bundle pathForResource:@"descs" ofType:@"plist"];
//    //NSLog(@"%@",path);
//    //加载path对应的文件来创建数组
//    NSArray *alldescs = [NSArray arrayWithContentsOfFile:path];
    
    //label有个属性lines设为0，即不限制行
    int no = (int)(sender.value+0.5);
    _imageDesc.text = _allDescs[no-1];
}

#pragma mark 点击了设置方法
- (IBAction)setting:(id)sender {
    [UIView beginAnimations:nil context:nil];
    [UIView setAnimationDuration:0.5];
    
    //1、取出中点
    CGPoint tempCenter = _settingView.center;
    
    //2、修改y值
    //如果条件为真，设置界面目前看不见
    if (_settingView.frame.origin.y == self.view.frame.size.height) {
        tempCenter.y -= _settingView.frame.size.height;
    }else{
        tempCenter.y += _settingView.frame.size.height;
    }
    
    
    //3、重新赋值
    _settingView.center = tempCenter;
    
    [UIView commitAnimations];
}

#pragma mark 改变图片尺寸
- (IBAction)imageSizeChanged:(UISlider *)sender {
    _imageView.transform =  CGAffineTransformMakeScale(sender.value, sender.value);
}

#pragma mark 夜间模式
- (IBAction)nightMode:(UISwitch *)sender {
    if (sender.on) {
         self.view.backgroundColor = [UIColor darkGrayColor];
    }else{
        self.view.backgroundColor = [UIColor whiteColor];
    }
   
}
@end
