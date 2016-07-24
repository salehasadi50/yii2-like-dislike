#Categories Management Yii2 Module
Complete like-dislike management module for Yii2 based web application, Ready to integrate

* Easy to install
* Create Unlimited Multilevel categories
* like-dislike tree structure to visualize like-dislike depth
* like-dislike Image
* like-dislike SEO Meta (Title, keywords, Description)

### 1. Download

Yii2-categories can be installed using composer. Run following command to download and
install Yii2-categories:

```bash
php composer.phar require salehasadi/yii2-like-dislike "dev-master"
```

### 2. Configure

Add following lines to your main configuration file to access this module via web URL:
> **NOTE:** Along with like-dislike module you also need to configure redactor Module which installed as dependency in like-dislike module as below to add wysiwyg editor in like-dislike description.

```php
'modules' => [
	'redactor' => 'yii\redactor\RedactorModule',
    'like-dislike' => [
        'class' => 'salehasadi\like-dislike\Module',
    ],
],
```

### 3. Update database schema

The last thing you need to do is updating your database schema by applying the
migrations. Make sure that you have properly configured `db` application component
and run the following command:

```bash
$ php yii migrate/up --migrationPath=@vendor/salehasadi/yii2-like-dislike/migrations
```

