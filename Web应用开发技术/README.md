#Web应用技术开发#

##实验一##
###1. 将JavaScript嵌入网页中的三种方法
>1.使用 <script>…</script> 标签将语句嵌入文档
```
<script type="text/javascript" >
	document.write("欢迎来到JavaScript世界");
</script>
```
2.将 外部JavaScript 源文件链接到 html 文档中
`<script src= "test.js"></script>`
可使多个网页共享一个脚本文件内的代码
一般在其中定义一系列在多个网页中都可能要用到的函数
3.作为网页元素的事件处理程序,当事件触发时自动运行
`<marquee  onmouseover="this.stop()">`

###2. JS 数据类型
JS五种基本数据类型
undefined,Null,Boolean,Number,String
复合数据类型
Object , Array

###3. 变量的定义
var 关键词声明变量
局部变量：函数内声明变量，必须要以 var 声明
全局变量：函数外声明的变量

###4. 函数的声明与调用
function 函数名([参数[,参数...]]){
	<语句组>
	[return <表达式>;]
}

###5. JavaScript 运算符
```
var a=3,b=2;
document.writeln("a=3,b=2");
document.writeln("");
document.write("a+=b = "); 
a += b; 
document.writeln(a);
document.write("a-=b = ");
a -= b;
document.writeln(a);
document.write("a*=b = ");
a *= b; document.writeln(a);
document.write("a/=b = ");
a /= b;
document.writeln(a);
document.write("a%=b = ");
a %= b; document.writeln(a); 
```

###6. 常用方法
##### eval() 将一个JavaScript代码字符串求值成特定的对象。
eval()是一个顶级函数并且跟任何对象无关。
```
<script type="text/javascript" >
	var calculate = prompt("请输入您需要计算的内容");
	var value =eval(prompt);
	alert(calculate+"的运算结果是"+value);
</script>
``` 

##### isNaN() 函数用来判断一个值是否为 NaN
```
<script type="text/javascript" >
	alert(isNaN("123"));
	alert(isNaN(NaN));
</script>
```

##### parseFloat() 函数可解析一个字符串，并返回一个浮点数