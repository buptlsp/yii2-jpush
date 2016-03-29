JPUSH Encapsulation for Yii 2
========================

这个扩展提供了一个基于yii2的极光推送封装。

本代码仅是对极光推送做了一层yii2的封装，并不会修改到其中的源码，具体的许可可以参照[极光推送](http://docs.jpush.cn/display/dev/Push-API-v3)。

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).  
推荐的方式是通过composer 进行下载安装[composer](http://getcomposer.org/download/)。  

Either run  
在命令行执行  
```
php composer.phar require --prefer-dist "lspbupt/yii2-jpush" "*"
```

or add  
或加入  

```
"lspbupt/yii2-jpush": "*"
```

to the require-dev section of your `composer.json` file.  
到你的`composer.json`文件中的require-dev段。  

Usage
-----
一旦你安装了这个插件，你就可以直接在配置文件中加入如下的代码：  

```php
return [
    'components' => [
        'jpush' => [
            'class' => 'lspbupt\push\Jpush',
            'app_key' => "", //极光推送的appkey
            'app_secret' => "", //极光推送的appsecret
        ],
    ],   
    // .... 
];
```

在配置好之后，你完全可以像之前使用jpush一样使用所有的方法 
```php
$result = Yii::$app->jpush->push()
    ->setPlatform('all')
    ->addAllAudience()
    ->setNotificationAlert('Hi, JPush')
    ->send();
```
具体的函数的方法可以访问[极光推送](http://docs.jpush.io/server/php_sdk/#composer)  

另外，也可以按传统的方式使用该插件

```php
$client = new \lspbupt\push\Jpush([
    'app_key' => $app_key,
    'app_secret' => $app_secret,
]);
$result = $client->push()
    ->setPlatform('all')
    ->addAllAudience()
    ->setNotificationAlert('Hi, JPush')
    ->send();
```
