# 项目介绍
使用Docker搭建php5.6，php7.2，nginx，redis4.0，mysql5.6，elasticsearch等环境

#### 目录说明
目录 | 说明
---|---
--- conf | docker手动安装配置文件
--- --- nginx | nginx配置
--- --- redis | redis配置
--- --- mysql | redis配置
--- --- php56 | php5.6配置
--- --- php72 | php7.2配置
--- --- es | elasticsearch配置
--- data | 数据文件夹
--- --- redis
--- --- mysql
--- ext.tools | PHP扩展包文件
--- --- redis.tar.gz
--- logs | 程序运行日志文件夹
--- --- php56
--- --- php72
--- --- mysql
--- --- nginx
--- --- redis
--- --- es
--- --- es02
--- --- es03
--- wwwroot | 代码文件夹
--- --- index.html
--- --- index.php
--- --- phpinfo.php
--- --- l.php
--- --- redis.php
--- --- mysql.php

# 一 、手动安装容器 （推荐使用此方法）
````
一,设置docker环境相关信息

1，下载到本地
git clone https://code.aliyun.com/csboge/docker_files.git docker
cd docker
pwd #获得 docker目录 绝对路径

2，Docker_Run.txt

3，安装扩展.txt


# 二 、其他方法
````
参考：https://github.com/duzhenxun/dockerfiles-lnmp
感谢博主，我也是参考这个，完全笔记下来，稍稍改造完成的 docker命令。