<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 23,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 24,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 25,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 26,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 27,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 28,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 29,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 30,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 31,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 32,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 33,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 34,
                'title' => 'expense_create',
            ],
            [
                'id'    => 35,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 36,
                'title' => 'expense_show',
            ],
            [
                'id'    => 37,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 38,
                'title' => 'expense_access',
            ],
            [
                'id'    => 39,
                'title' => 'income_create',
            ],
            [
                'id'    => 40,
                'title' => 'income_edit',
            ],
            [
                'id'    => 41,
                'title' => 'income_show',
            ],
            [
                'id'    => 42,
                'title' => 'income_delete',
            ],
            [
                'id'    => 43,
                'title' => 'income_access',
            ],
            [
                'id'    => 44,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 45,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 46,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 47,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 48,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 49,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 50,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 51,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 52,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 53,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 54,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 55,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 56,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 57,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 58,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 59,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 60,
                'title' => 'product_create',
            ],
            [
                'id'    => 61,
                'title' => 'product_edit',
            ],
            [
                'id'    => 62,
                'title' => 'product_show',
            ],
            [
                'id'    => 63,
                'title' => 'product_delete',
            ],
            [
                'id'    => 64,
                'title' => 'product_access',
            ],
            [
                'id'    => 65,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 66,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 67,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 68,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 69,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 70,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 71,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 72,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 73,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 74,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 75,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 76,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 77,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 78,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 79,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 80,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 81,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 82,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 83,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 84,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 85,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 86,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
