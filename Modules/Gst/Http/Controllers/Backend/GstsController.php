<?php

namespace Modules\Gst\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
class GstsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'GST';
        

        // module name
        $this->module_name = 'gsts';

        // directory path of the module
        $this->module_path = 'gst::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Gst\Models\Gst";
    }
    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = label_case($module_title);
        $title = $page_heading.' '.label_case($module_action);

        $$module_name = $module_model::query()
        ->join('clients', 'clients.id', '=', "$module_name.client_id")
        ->select([
            "$module_name.*",
            'clients.id as client_id',
            'clients.name as client_name',
        ]);

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('client_name', function ($data) {
                return $data->client_name;
            })
            ->rawColumns(['client_name', 'action'])
            ->orderColumns(["$module_name.id"], '-:column $1')
            ->make(true);
    }

}   
