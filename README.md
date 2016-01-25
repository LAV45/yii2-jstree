yii2-jstree
===========
Widget for Yii Framework 2.0 to use [JsTree](http://www.jstree.com)

[![Latest Stable Version](https://poser.pugx.org/lav45/yii2-jstree/v/stable)](https://packagist.org/packages/lav45/yii2-jstree)
[![Total Downloads](https://poser.pugx.org/lav45/yii2-jstree/downloads)](https://packagist.org/packages/lav45/yii2-jstree)
[![Monthly Downloads](https://poser.pugx.org/lav45/yii2-jstree/d/monthly)](https://packagist.org/packages/lav45/yii2-jstree)
[![Daily Downloads](https://poser.pugx.org/lav45/yii2-jstree/d/daily)](https://packagist.org/packages/lav45/yii2-jstree)
[![Latest Unstable Version](https://poser.pugx.org/lav45/yii2-jstree/v/unstable)](https://packagist.org/packages/lav45/yii2-jstree)
[![License](https://poser.pugx.org/lav45/yii2-jstree/license)](https://packagist.org/packages/lav45/yii2-jstree)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist lav45/yii2-jstree "1.0.*"
```

or add

```
"lav45/yii2-jstree": "1.0.*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by :

```php
use lav45\widget\JsTree;

<?= JsTree::widget([
	'clientOptions' => [
		'core' => [
			'data' => $data
			// ...
		],
		'plugins' => ['types', 'dnd', 'contextmenu', 'wholerow', 'state'],
		// ...	
	]
]); ?>
```

