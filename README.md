<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="http://static.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
</p>

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)

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

For add the github button at the corner use:
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
    ]); ?>
```
    
SUPPORT
-----
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)
