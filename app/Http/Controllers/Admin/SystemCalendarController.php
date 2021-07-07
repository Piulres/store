<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => '\App\Models\User',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => 'User',
            'suffix'     => 'was created',
            'route'      => 'admin.users.edit',
        ],
        [
            'model'      => '\App\Models\User',
            'date_field' => 'updated_at',
            'field'      => 'name',
            'prefix'     => 'User',
            'suffix'     => 'was changed',
            'route'      => 'admin.users.edit',
        ],
        [
            'model'      => '\App\Models\User',
            'date_field' => 'deleted_at',
            'field'      => 'name',
            'prefix'     => 'User',
            'suffix'     => 'was deleted',
            'route'      => 'admin.users.edit',
        ],
        [
            'model'      => '\App\Models\Expense',
            'date_field' => 'entry_date',
            'field'      => 'description',
            'prefix'     => 'Expense',
            'suffix'     => 'added',
            'route'      => 'admin.expenses.edit',
        ],
        [
            'model'      => '\App\Models\Income',
            'date_field' => 'entry_date',
            'field'      => 'description',
            'prefix'     => 'Income',
            'suffix'     => 'added',
            'route'      => 'admin.incomes.edit',
        ],
        [
            'model'      => '\App\Models\CrmCustomer',
            'date_field' => 'created_at',
            'field'      => 'first_name',
            'prefix'     => 'Customer',
            'suffix'     => 'was created',
            'route'      => 'admin.crm-customers.edit',
        ],
        [
            'model'      => '\App\Models\CrmCustomer',
            'date_field' => 'updated_at',
            'field'      => 'first_name',
            'prefix'     => 'Customer',
            'suffix'     => 'was changed',
            'route'      => 'admin.crm-customers.edit',
        ],
        [
            'model'      => '\App\Models\CrmCustomer',
            'date_field' => 'deleted_at',
            'field'      => 'first_name',
            'prefix'     => 'Customer',
            'suffix'     => 'was deleted',
            'route'      => 'admin.crm-customers.edit',
        ],
        [
            'model'      => '\App\Models\Product',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => 'Product',
            'suffix'     => 'was created',
            'route'      => 'admin.products.edit',
        ],
        [
            'model'      => '\App\Models\Product',
            'date_field' => 'updated_at',
            'field'      => 'name',
            'prefix'     => 'Product',
            'suffix'     => 'was changed',
            'route'      => 'admin.products.edit',
        ],
        [
            'model'      => '\App\Models\Product',
            'date_field' => 'deleted_at',
            'field'      => 'name',
            'prefix'     => 'Product',
            'suffix'     => 'was deleted',
            'route'      => 'admin.products.edit',
        ],
    ];

    public function index()
    {
        $events = [];
        foreach ($this->sources as $source) {
            foreach ($source['model']::all() as $model) {
                $crudFieldValue = $model->getAttributes()[$source['date_field']];

                if (!$crudFieldValue) {
                    continue;
                }

                $events[] = [
                    'title' => trim($source['prefix'] . ' ' . $model->{$source['field']} . ' ' . $source['suffix']),
                    'start' => $crudFieldValue,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
