<?php

/**
 * @link https://github.com/startpl/t2cms-module
 * @copyright Copyright (c) 2020 Koperdog
 * @license https://github.com/startpl/t2cms-module/blob/master/LICENSE
 */

namespace startpl\t2cms\moduleExample\backend;

/**
 * Regular module of Yii2
 *
 * @author Koperdog <koperdog@dev.gmail.com>
 * @version 1.0
 */
class Module extends \yii\base\Module
{
    const MODULE_NAME = "moduleExample";
    
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'startpl\t2cms\moduleExample\backend\controllers';
    
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    }
}
