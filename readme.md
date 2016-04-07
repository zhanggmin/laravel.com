
## 项目概述

http://laravel-china.org/ 源代码。

## 开发环境部署/安装

本项目代码使用 [Laravel Framework](http://laravel.com/) 进行开发,本地开发环境使用 [Laravel Homestead](http://laravel-china.org/docs/5.1/homestead) 进行快速部署.

下文将在假定读者已经安装好了 Homestead 的情况下进行说明. 如果您还未安装 Homestead, 可以参照 [Laravel Homestead Installation & Setup](http://laravel-china.org/docs/5.1/homestead#installation-and-setup) 进行安装配置.

### 基本安装

1. 克隆源代码

    将源代码克隆到 `laravel-china` 文件夹下

    > git clone git@git.coding.net:devservice/laravel-china.git

2. 配置本地的 Homestead 环境

    1). 编辑 Homestead.yaml 文件

    ```shell
    homestead edit
    ```

    2). 加入对应修改,如下所示:

    ```
    folders:
        - map: ~/Projects/laravel-china/ # 你本地的项目目录地址
          to: /home/vagrant/laravel-china

    sites:
        - map: laravel-china.app
          to: /home/vagrant/laravel-china/public

    databases:
        - laravel-china
    ```

    3). 应用修改

    ```shell
    homestead provision
    ```

3. 安装依赖
    > composer install

4. 生成配置文件
    > cp .env.example .env

5. 配置 hosts 文件
    > sudo vi /etc/hosts

    添加如下内容
    > 192.168.10.10 laravel-china.app

### 样式修改须知

请使用 `gulp` 更新样式文件，或者 `gulp watch` 做开发时候自动编译。

完成以上步骤后浏览器访问 http://laravel-china.app/ 即可.

至此, 安装完成 ^_^.

## 预览文档

根目录下

    cd resources/docs
    git clone https://github.com/laravel-china/docs.git 5.1

访问 http://laravel-china.app/docs/

