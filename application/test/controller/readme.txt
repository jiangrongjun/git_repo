#Controller负责进行数据的接收、传递、与跳转页面
#Controller的划分采用导航栏，与页面能够更好的贴合，能快速定位
#总控制器，可在调用其他控制器之前进行拦截，并做一些统一的操作
顶级页面：首页                 Index.php
    一级页面：产品                 Product.php
    一级页面：新闻                   News.php
    一级页面：关于我们               AboutUs.php
    辅助一级页面：用户状态栏        UserInfo.php
    【暂定】辅助一级页面(系统)：搜索引擎优化关键字等的设定    System.php
        产品下的分类Category
            景品-King Of Good
            人偶-Doll
            手办(PVC Figure)-Figure
            GK(GARAGE KIT)-Garage Kit
            扭蛋/食玩-Gashapon
            黏土-Clay
            国产精品-Domestic Boutique
        产品下的风格style
            全部
            科幻战争
            美少女
            校园
            悬疑推理
            神魔
            其他-Other
        新闻下的分类
            资讯-Information
            企业情报-Enterprise Information
            店铺-Store
        关于我们的分类
            联系我们-constact us
            网站合作-friends
            用户协议-agreement
            版权说明-copyright





