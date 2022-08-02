# phpboot框架使用demo

[phpboot框架官方地址](https://phpboot.readthedocs.io/zh/latest/)

# apache伪静态
```$xslt
<IfModule mod_rewrite.c>
    RewriteEngine On
    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

# 项目步骤

## index.php里面引入框架
```$xslt
<?php

require __DIR__.'/vendor/autoload.php';

$app = \PhpBoot\Application::createByDefault(__DIR__.'/config/config.php');
$app->loadRoutesFromPath(__DIR__.'/App/Controllers', 'App\\Controllers'); //

$app->dispatch();

```

## composer.json定义app位置
```$xslt
{
    "require": {
        "caoym/phpboot": "^2.1"
    },
    "autoload": {
        "psr-4": {
            "App\\": "App/"
        },
        "files": [

        ]
    }
}
```

## 控制器用注解定义路由
```$xslt
<?php

namespace App\Controllers;

/**
 * @path /books
 */
class Books
{
    /**
     * @route GET /{id}
     */
    public function getBook($id)
    {
        var_dump(55555);
        var_dump($id);exit;
    }
}
```

