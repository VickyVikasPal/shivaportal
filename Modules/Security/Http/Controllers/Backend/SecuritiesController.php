<?php

namespace Modules\Security\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class SecuritiesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Securities';

        // module name
        $this->module_name = 'securities';

        // directory path of the module
        $this->module_path = 'security::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Security\Models\Security";
    }

}
