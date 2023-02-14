# Centos7下安装php-redis扩展

#### 下载安装包

```shell
cd /usr/local/src
wget https://pecl.php.net/get/redis-5.3.7.tgz
tar -zxvf redis-5.3.7.tgz
cd redis-5.3.7
```

#### 使用phpize生成configure配置文件
用 whereis phpize 来查看路径

```shell
/usr/bin/phpize
./configure --with-php-config=/usr/local/php/bin/php-config
make && make install
```

#### 配置php支持
```shell
vim /etc/php.ini
```

```ini
extension="redis.so"
```

```shell
service php-fpm restart
```

重启完之后，检查是否安装完成php-redis扩展，通过phpinfo查看是否有以下内容
