## 简介

PHP BE 双驱框架（Beyond Exception）新建项目专用

be/new 本身未提供功能，仅用来新建一个空的 be 项目。




## 拉取项目代码

> composer create-project be/new

## 部署方式

### 普通模式

普通模式下入口文件为 index.php

php标准环境， apache+php 或 nginx+php，根目录指向 index.php 所在目录


### Swoole模式

Swoole模式下入口文件为 server.php

#### Swoole模式方案一：php标准环境下，安装swoole

> php server.php start


#### Swoole模式方案二：Docker容器

> 示例(PHP7.4)： docker run -d --name=be -v /your_code_path:/var/www -p 80:80 liu12/swoole:4.8.5-php7.4 php /var/www/server.php start


> 示例(PHP8.1)： docker run -d --name=be -v /your_code_path:/var/www -p 80:80 liu12/swoole:4.8.5-php8.1 php /var/www/server.php start


        
## 访问系统，自动跳转到安装界面
            
> http://localhost