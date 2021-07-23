## 简介

PHP BE 双驱框架（Beyond Exception）新建项目专用

be/new 本身未提供功能，仅用来新建一个空的 be 项目。




## 拉取项目代码

    composer create-project be/new
    
    
    
    
## 常见部署方式

* 普通模式： php标准环境， apache+php 或 nginx+php


* Swoole模式： Docker容器


    示例： docker run -d --name=be -v /your_code_path:/var/www -p 80:80 liu12/swoole:4.5.10-php7.4 php /var/www/server.php start
       
       
* Swoole模式：  php标准环境下，安装swoole相关扩展


    php server.php start

        
## 初始化系统数据
            
    http://localhost/?admin=1&route=System.Installer.index