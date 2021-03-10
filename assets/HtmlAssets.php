<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2021 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\custom_pages\assets;

use humhub\modules\ui\view\components\View;
use yii\web\AssetBundle;

class HtmlAssets extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@custom_pages/resources';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/humhub.custom_pages.html.js'
    ];

    /**
     * @inheritdoc
     */
    public $jsOptions = ['position' => View::POS_END];
}
