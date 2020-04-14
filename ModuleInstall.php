<?php

/**
 * @link https://github.com/startpl/t2cms-module
 * @copyright Copyright (c) 2020 Koperdog
 * @license https://github.com/startpl/t2cms-module/blob/master/LICENSE
 */

namespace startpl\t2cms\moduleExample;

use t2cms\module\interfaces\IModuleInstall;

/**
 * Module install class
 *
 * @author Koperdog <koperdog.dev@gmail.com>
 */
class ModuleInstall implements IModuleInstall
{    
    public function install(): bool
    {
        // do something during installation
        return true;
    }
    
    public function uninstall(): bool
    {
        // do something during uninstallation
        return true;
    }
    
    public function activate(): bool
    {
        // do something during activating
        return true;
    }
    
    public function deactivate(): bool
    {
        // do something during deactivating
        return true;
    }
    
    public function update(): bool
    {
        // do something for update Module
        return true;
    }
}