# 01
    学习第一天知识
## HTML初步
    下载并安装editplus，配置软件的参数设置和编码
    了解HTML（百度百科）：
        HTML之父：蒂姆·伯纳斯·李
        是什么：HyperText Markup Language（超文本标记语言）
            什么是超文本：能够表达更丰富的内容（图片、表格、视频、音频等）
            什么是标记：标识符号（标签）
            语言：
                HTML不是编程语言，只是一种描述超文本标签的语言
                浏览器翻译HTML代码
        网页扩展文件名：.html .htm
        常见文件扩展名：
            音频：mp3、wav
            视频：mp4、wmv
            图片：jpg、png
### 01.html
        新建并打开一个页面
### 02.html
        使用标签和标签属性改变字体颜色
### HTML规范
    配置网站站点（百度使用的编辑器配置站点方法）
    标签分类：
        单标签：
            <br />
        双标签：闭合标签
            <font></font>
    标签书写规范：
        所有的标签都在<>中
        所有的标签都有开始和结束
        所有的标签和属性及值小写
        标签和属性、属性和属性之间有空格
        属性值必须加引号
        属性可写不可写
        标签与标签之间正确嵌套
    标签格式
        <标签名 属性1='值1' 属性2='值2' ……>标签内的超文本</标签名>
## HTML结构
```html
    // 文档结构：
    <html lang="en">
        <head>
            <title></title>
        </head>cc
        <body></body>
    </html>
```
        解释：
            html：指明当前的文档类型
            head：网页的头部，包括网页的基本设置信息，title标题也在里面
            body：在浏览器中看到的内容
    HTML注释：
        <!-- 注释内容 -->
## font_body标签
    HTML标签按功能分类：
        文本的修饰
        文字排版
        图片
        链接
        表格
        列表
        表单
        框架
## 文本修饰
    HTML文本修饰标记：
        <big>：相对默认文字大一些
        <small>：相对默认文字小一些
        <b>\<strong>：加粗\加强
        <i>\<em>：斜体
        <u>：下划线
        <s>：删除线
        <ins>\<del>：
        <sup>\<sub>：上标\下标
## editplus设置
    看视频就可以
## HTML排版标记
    <p></p>：表示一个段落
        常用属性：align：水平对齐方式
    <br/>：换行标记
    <hr/>：水平线标记
        size：粗细
        color：颜色
        width：宽度
        noshade：去掉水平线的阴影
    <pre></pre>：预排版标记（将保留所有的空白字符（空格、换行符））
    标题标记：
        <h1></h1>
        <h2></h2>
        <h3></h3>
        <h4></h4>
        <h5></h5>
        <h6></h6>
    <div></div>：块元素
    <span></span>：行元素
## 项目符号和编号
    <div></div>：
        是没有任何意义的标记，但是又是使用最多的标记；
        div一般要与CSS配合使用；
        div是一个块级元素
    <span></span>：
        同样是没有任何意义的标记，但是也是使用最多的标记
        span要与CSS配合使用
        span是一个行内元素
    块级元素：
        一般是单独占一行
        <p>、<h1>、<pre>等也是块级元素
    行内元素：
        不会单独占一行
        多个行内元素会排在同一行
        <font>、<b>、<i>、<u>、<sub>、<sup>等都是行内元素
    HTML字符实体：
        空格：&nbsp
        <：&lt
        >：&gt
        &：&amp
        ￥：&yen
        ✖：&times
        ➗：&divide
    HTML项目符号
        <ul></ul>：无序列表
            type：disc默认黑色的点、circle圆圈、square方块
        <ol></ol>：有序列表
            type：编号类型：取值：1、A、a、I、i
            start：从第几个开始编号
        <li></li>
        自定义列表：
            <dl>
                <dt>定义标题</dt>
                <dd>对上面的标题进行描述</dd>
            </dl>
        在HTML标记中，内容应该放在最底层标记中
    滚动字幕标记
        <marquee></marquee>
            direction：滚动方向
            width：宽度
            height：高度
            bgColor：背景色
            scrollAmount：滚动步长值，值越大，滚动越快
            scrollDelay：两步之间的停留时间
            loop：循环滚动的次数
### 03.html
        了解div是块级元素
### 04.html
        了解span是行内元素
### 05.html
        了解HTML字符实体
### 06.html
        了解滚动字幕标记
# 02
    学习第二天的知识
## html实例
    复习第一天的知识
## bgsound
    火狐安装插件使用，声音文件标签
    src：路径
    loop：循环次数，-1是无限循环
## 关于颜色
    看视频就可以
## meta
    meta标记：针对当前页面的设置
        字符编码设置
        关键字设置
        描述设置
        版权设置
        htpp-equiv：服务器通知浏览器用什么字符来显示页面
        content：文本文件下的html文件
        charset：设置字符编码
        name：设置名称
            keywords：关键字
    DTD文档类型定义：
        strict：严格性
        transitional：过度
        frameset：框架
## img
    图片标记：
        img
        对于图片的宽高，只设置一个，另一个会自适应
        可以缩小，但不可以放大
        alt：替换文本
## 关于路径
    绝对路径：
    相对路径：
# 03
    学习第三天的知识
## 关于链接
    <a></a>超链接标签
        target：打开的方式
            _blank：打开新的窗口标签页
            _self：在本页面打开新的页面
    下载链接，在herf属性中放文件路径
    空连接
    电子邮件链接：email地址
    锚点链接：
        先定义锚点：<a name="top"></a>
        使用：<a href="#top"></a>
## 表格初步
    <table>：表格标签
        <tr>：行标签
            <td></td>：单元格标签
        </tr>
    </table>
## 关于表格
    width：表格宽度，单位像素
    height：表格高度，一般不设置，让表格中内容撑开
    align：对齐方式
    border：表格的边框
    bordercolor：表格边框的颜色
    background：表格的背景图
        单元格的宽高一定与图片的宽高相适应
    bgcolor：表格背景色
    cellpadding：单元格的填充，单元格中内容到边框的距离
    cellspacing：单元格的间距，单元格与单元格之间的距离
    rules：边框的显示方式
        rows：显示行边线
        cols：显示列边线
        all：合并连线
    <td>属性：
        colspan：向右合并
        rowspan：向下合并
## 透明flash实例
    看视频就可以
## 表格布局
    看视频就可以
## 表单布局
    <form></form>：表单标记
        属性：
            name
            method：提交方式，get，post
            action：提交的页面
            enctype：数据类型
    表单元素：
        <input type='text' name='username' />：文本框
        <input type='password' name='password' />：密码框
    表单提交：
        <input type='submit' name='提交'>：提交
    表单重置：
        <input type='reset' name='重置'>：重置
# 04
    学习第四天的知识
## 表单radio
    get提交方式：
        通过gei方式传值，名称和值以“?”的跟在action处理页面的后面
        如果有多个传递值，用“&”号连接
        这个方式传值，名称和值都在地址栏中显示（不安全）
        地址栏的容量有限，小于2KB
        一般用在安全要求不高，并且简单的数据
        通常用在查询
    post提交方式： 
        不在地址栏中显示
        相对安全
        一般用在数据库方面，写操作
        在上传一些复杂的数据的时候用post
        enctype是表单的编码方式
## 表单fieldset
    看看就好
## from与服务器
    安装phpstudy，启动apache服务
### 02.html 03.php
    表单实践
## map
    map：图像热区标签
        将一个图片分割成多块并设置不同的点击事件、效果、访问页面
        通过name属性与img标签的usemap绑定
## frameset
    frameset：框架集标签
        在body标签之外
        设置frameset标签后，需要在body标签之外再包一个noframes标签，当浏览器不支持框架集时则显示noframes内的内容
        frameset中通过一个又一个的frames标签引入不同的页面文件
        通过cols或rows分割浏览器页面
## frame_name
    看视频就可以
## 关于模板
    iframe：浮动框架
        src：要显示的页面
        name：浮动框架名称
        scrolling：是否滚动，yes，no，auto
        align：位置
# 05
    学习第五天的知识
## css初步
    CSS：cascading style sheets，层叠样式表，级联式样式表，简称：样式表
        扩展名：.css
    样式表的位置：
        内联样式表：在head标签中的style标签中
            <style type='text/css'></style>
```html
    <!--内联样式表-->
    <head>
        <title></title>
        <style type="text/css">
        
        </style>
    </head>
```
    CSS语法格式：
        声明方法：
            选择器 {属性1：值1，属性2：值2，属性3：值3}
            什么是选择器？
                就是通过名称指定对哪些标签进行样式设置
        CSS注释：
            HTML注释：<!-- 注释内容 -->
            CSS注释：/* 注释内容 */
## 基本选择器
    基本选择器：
        style属性（行内样式）：
            直接写在标签内
            如：
```html
                <p style="font-size: 12px;color: red;">文字内容</p>
```
        标签选择器：
            针对HTML的标签，直接在内联样式表中写样式
        id选择器：
            通过#号绑定标签的属性id的值
        类选择器：
            通过.号绑定标签的属性class的值
        通配符选择器：
            *号，针对当前页面所用的标签应用同样的样式（对标签的初始化）
        标签和类结合：
            如：p.test {}
            针对p标签中的类名为test的标签的样式
## 组合选择器
    多元素选择器：
        多个标签或者选择器一起声明
        如：h1,ul,a,img {}
        定义的方法，注意：
            选择器之间用逗号隔开
    后代选择器
        父选择器与父选择器类的其它选择器用空格隔开，样式效果最终落实在最后一个标签里面
        如：p span {}，针对p标签中所有的span标签定义样式
    子元素选择器
        父选择器与直接的子辈选择器之间用>号隔开
        如：p>span {}
## CSS单位与字体
    伪类选择器：
        不存在的选择器
        链接（a标签）常用
        :link 标签的正常状态
        :visited 鼠标单机过的标签状态
        :hover 鼠标放（悬停）在标签上的状态
        :active 鼠标按住标签的状态
    CSS尺寸属性：px、em、%（相对单位）
        px：像素，相对单位，和屏幕的分辨率有关
        em：一个字提高（1倍子提高），2em =》 当前默认字体的2倍
        %：百分比，相对单位，相对于当前默认值的百分比
        浏览器默认的字体大小是16px
    CSS字体属性：
        font-family：设置字体种类
        font-size：字体的大小
        font-weight：设置字体的加粗方式，100-900，bold（700），normal（不加粗）
        font-style：设置字体样式，italic（斜体）
## 新闻属性
    CSS文本属性：
        color：设置文本的颜色，用单词或16进制
            可以简写
        text-align：文本的对齐方式，left，right，center
        line-height：行高
            垂直方向居中，所在容器，所在元素的高度与line-height保持一致
        text-indent：文本的缩进
        letter-spacing：字间距
        text-decoration：文本的描述，修饰
            underline：下划线
            line-through：删除线
            none：没有修饰
    CSS列表属性：
        list-style：none
        list-style-type：none
        把列表项前面的项目符号去掉
        ul,li {list-style-type:none}
## 边框及案例
    CSS细线表格：
```html
        <table rules="all"></table>
    
        <table bgcolor="" cellspacing="2">
            <tr>
                <td bgcolor="white"></td>
            </tr>
        </table>
    
        <table style="border-collapse: collapse"></table>
```
# 06
    学习第六天的知识
## padding_margin
    CSS内边距属性：
        padding：填充，填料
            四位数字：上，右，下，左
            三个数字：上，左右，下
            两位数字：上下，左右
            一个数字：上下左右
            padding-top
            padding-right
            padding-bottom
            padding-left
    CSS外边距属性：margin
    CSS背景：
        background
            background-color：背景色
            background-image：背景图
            background-repeat：重复
            background-position：定位
            background-attachment：依附方式，是否固定，fiexd
## CSS_sprite
    看视频就可以
## backgroundfixed
    看视频就可以
## 背景案例
    看视频就可以
## 导航
    CSS浮动和清除：
        float：
        浮动的元素可以理解为该元素已经脱离了文档流
        浮动只有两个方向：right，left
        浮动的位置：浮动到包含元素的边界或具有浮动属性元素的边上
        浮动元素的层级高于普通元素的层级
        凡是浮动的元素都是块元素
            如果浮动前行内元素，浮动后自动转为块元素
            行内元素没有宽高，只有块元素才有宽高
        关于浮动，我们通常用在将块元素在一行内显示
        只要应用于排序（div+css）
        清除浮动：clear：right，left，both（清除全部，独占一行）
## 关于浮动more的位置
    看视频就可以
# 07
    学习第七天的知识
## 关于浮动
    看视频就可以
## 导航案例
    看视频就可以    
## 样式表链接方式
    overflow属性：
        hidden（超出隐藏）
        scroll（超出有滚动条）
        auto（自动）
    display属性：
        block（块显示）
        inline（按行内显示）
        inline-block（双重作用，既有行的特点又有块的特点）
        none（不显示）
    CSS引入方式
        行内
        内联
        外联
## important
    CSS优先级：
        就近原则：行内 > 内联 > 外联
        行内 > ID选择器 > 类名选择器 > 标签选择器
            权重值，特性值
                标签：1
                类名：10
                ID：100
                行内：1000
    CSS继承
        和文本相关的一般都会继承
        边框、宽高、margin、padding、背景等都不继承
        继承的权重为0
## 关于定位
    定位属性：
        position（配合着定位坐标，left，top，right，bottom）
            static：静态，不定位
            fixed：固定，脱离正常的文档流，比普通元素层级要高，相对于浏览器窗口
            relative：相对定位，相对于自己原来的位置
            absolute：绝对定位，相对于最近的具有定位属性的元素进行定位
                相对于它的祖先，有定位属性的祖先
                如果没有，相对于body定位
    相对定位与绝对定位
        外层元素通常设置相对定位，不用坐标
        内层元素设置绝对定位，配合着定位坐标
## 关于布局
    盒子模型：边框线，内填充，外边距
        border
        padding
        margin
    总宽度问题
        加DTD（IE）
    外边距合并问题
        margin，上下合并（大吃小），左右叠加
## 个人主页案例
    看视频就可以
## html5
    看视频就可以
# 08
    学习第八天的知识
## JS变量名
    JS：
        Javascript，基于浏览器的脚本语言
    变量：
        语法：var 变量名 = 值
        作用：用来保存数据的
        注意：
            变量名不能和系统内部关键字相同
            变量名不能以数字开头
            变量名只能包括数字、字母、下划线
            用比较有意义的名字
            每行代码以分号结束
    alert：
        弹出窗口
    数据类型：
        数字类型：number
        字符串类型：string
        布尔类型：boolean
        空类型：null
        未定义类型：undefined
        复合数据类型：
            数组类型：array
            对象类型：object
## 数据类型
    数字类型：
        一般只是表示数字，可以参与运算
    字符串类型：
        一般只是表示字母、汉字，用引号包含（单引号、双引号都一样）
    布尔类型：
        只有两个值，true和false
    空类型：
        表示没有值，null
    未定义类型：
        表示没有定义，undefined
    复合类型：
        表示很多数据的集合
    注释方法：
        单行注释：// 内容
        多行注释：/* 内容 */
    运算符：
        赋值运算符：=
            把符号的右边的数据赋值给左边
        算术运算符：+ - * / % ++ --
            %：得到两个数相除的余数
            ++：自增1
            --：自减1
            前++（--）：先执行++或者--，再执行其它
            后++（--）：先执行其它，再执行++或者--
        逻辑运算符
        比较运算符
        复合赋值运算符
        位运算符
## 逻辑运算符
    看视频就可以
## 运算符1
    逻辑运算符：
        &&：逻辑与
            真真为真，真假为假，假假为假，假真为假
        ||：逻辑或
            真真为真，真假为真，假假为假，假真为真
        !：逻辑非
            非真为假，非假为真
## 运算符2
    比较运算符：
        >：大于
        <：小于
        >=：大于等于
        <=：小于等于
        ==：相等，将两个数据类型转为字符串后比较值
        ===：绝对相等，不转换两个数据的类型，判断是否值、类型都相等
        !=：不相等
        !==：绝对不相等
    复合赋值运算符：
        +=：符号左边的与右边的相加
        -=：符号左边的与右边的相减
        *=：符号左边的与右边的相乘
        /=：符号左边除右边
    document.write()：在文档中输出
    字符串运算符：
        +：将左右字符串拼接在一起
## 位运算符
    &：按位与
    |：按位或
    ^：按位异或
# 09
    学习第九天的知识
## 昨日回顾
    看视频就可以
## 流程控制之if语句
    看视频就可以
## 流程控制之switch语句
    看视频就可以
## 流程控制之do while和for循环
    看视频就可以
## 循环案例
    看视频就可以
# 10
    学习第十天的知识
## 复习
    看视频就可以
## 函数
    语法：function 函数名() {}
    调用：函数名();
## 函数return
## 函数调用
## 递归函数
## 数组