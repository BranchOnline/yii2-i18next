<?php
namespace branchonline\i18next;

use Yii;
use yii\web\AssetBundle;

/**
 * 10 Mar 2014
 *
 * @author Jap Mul <jap@branchonline.nl>
 */
class I18NextAsset extends AssetBundle {

    public $sourcePath = '@bower/i18next';

    public $path = '';

    public $css = [];

    public $js = [
        'i18next.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];

    public function publish($am) {
        parent::publish($am);

        $view = Yii::$app->getView();
        $language = Yii::$app->language;
        $view->registerJs("i18n.init({ lng: '$language' });");
    }
}
