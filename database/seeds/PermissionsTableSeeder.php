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
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 40,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 41,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 42,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 43,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 44,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 45,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 46,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 47,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 48,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 49,
                'title' => 'task_create',
            ],
            [
                'id'    => 50,
                'title' => 'task_edit',
            ],
            [
                'id'    => 51,
                'title' => 'task_show',
            ],
            [
                'id'    => 52,
                'title' => 'task_delete',
            ],
            [
                'id'    => 53,
                'title' => 'task_access',
            ],
            [
                'id'    => 54,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 55,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 56,
                'title' => 'currency_create',
            ],
            [
                'id'    => 57,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 58,
                'title' => 'currency_show',
            ],
            [
                'id'    => 59,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 60,
                'title' => 'currency_access',
            ],
            [
                'id'    => 61,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 62,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 63,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 64,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 65,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 66,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 67,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 68,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 69,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 70,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 71,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 72,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 73,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 74,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 75,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 76,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 77,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 78,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 79,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 80,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 81,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 82,
                'title' => 'client_create',
            ],
            [
                'id'    => 83,
                'title' => 'client_edit',
            ],
            [
                'id'    => 84,
                'title' => 'client_show',
            ],
            [
                'id'    => 85,
                'title' => 'client_delete',
            ],
            [
                'id'    => 86,
                'title' => 'client_access',
            ],
            [
                'id'    => 87,
                'title' => 'project_create',
            ],
            [
                'id'    => 88,
                'title' => 'project_edit',
            ],
            [
                'id'    => 89,
                'title' => 'project_show',
            ],
            [
                'id'    => 90,
                'title' => 'project_delete',
            ],
            [
                'id'    => 91,
                'title' => 'project_access',
            ],
            [
                'id'    => 92,
                'title' => 'note_create',
            ],
            [
                'id'    => 93,
                'title' => 'note_edit',
            ],
            [
                'id'    => 94,
                'title' => 'note_show',
            ],
            [
                'id'    => 95,
                'title' => 'note_delete',
            ],
            [
                'id'    => 96,
                'title' => 'note_access',
            ],
            [
                'id'    => 97,
                'title' => 'document_create',
            ],
            [
                'id'    => 98,
                'title' => 'document_edit',
            ],
            [
                'id'    => 99,
                'title' => 'document_show',
            ],
            [
                'id'    => 100,
                'title' => 'document_delete',
            ],
            [
                'id'    => 101,
                'title' => 'document_access',
            ],
            [
                'id'    => 102,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 103,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 104,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 105,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 106,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 107,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 108,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 109,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 110,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 111,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 112,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
