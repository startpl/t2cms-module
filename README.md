# The Module Example for T2cms
You can use this module as template

------------

### Module development features
File structure:

    /backend
    - /config
    - - main.php 
    - Module.php
    /frontend
    - /config
    - - main.php 
    - Module.php
    /common
    - /config
    - - main.php 
    - Module.php
    module_info.php
    ModuleInstall.php

Each part of your module (backend/frontend/common) is a regular yii2 module.

**All parts are optional**, you can only implement a backend or frontend, or only a common.

#### if you use composer:
- Your `composer.json` must contain `type:  "t2cms-module"`

------------

## File Descriptions

### module_info.php
```php
<?php
return [
    'url'         => 'example-module', // module url
    'namespace'   => 'startpl\\t2cms\\moduleExample',
    'name'        => 'example module',
    'description' => 'The module example',
    'version'     => '1.0.0',
    'fa_icon'     => 'envelope', // fontawesome
    'author'      => 'Your Name'
];
```
| name |  Description |
| ---- | ------------ |
| `'url' => 'example-module'` | Module url (frontend - /example-module, backend - /admin/module/example-module) |
| `'namespace' => 'startpl\\t2cms\\exampleModule'`| Module namespace |

### ModuleInstall.php

`ModuleInstall` class must implements `[t2cms\module\interfaces\IModuleInstall]` interface

and must contain follow methods:
- install(): bool
- uninstall(): bool
- activate(): bool
- deactivate(): bool
- update(): bool