Yii2 Collaborative
==================
Yii2 Collaborative tools for open source projects.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist inquid/yii2-collaborative "*"
```

or add

```
"inquid/yii2-collaborative": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \inquid\collaborative\GitHubRabito::widget(); ?>
```

Options:
```php
    <?= \inquid\collaborative\GitHubRabito::widget([
        'background_color'=>'#e65353',
        'logo_cat'=>'#FFF',
        'position_top'=>'0px',
        'url'=>'https://github.com/me/MyRepo',
        'label'=>'My Github Repo',
        'width'=>'250px',
        'height'=>'250px',
    ]); ?>```