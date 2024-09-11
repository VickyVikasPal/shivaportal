<?php

namespace Modules\Bank\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class BanksController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Banks';

        // module name
        $this->module_name = 'banks';

        // directory path of the module
        $this->module_path = 'bank::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Bank\Models\Bank";
    }

}
