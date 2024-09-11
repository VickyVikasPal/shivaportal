<?php

namespace Modules\Mca\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class McasController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'MCA';

        // module name
        $this->module_name = 'mcas';

        // directory path of the module
        $this->module_path = 'mca::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Mca\Models\Mca";
    }

}
