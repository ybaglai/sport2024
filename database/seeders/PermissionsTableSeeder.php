<?php

namespace Database\Seeders;

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
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 18,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 21,
                'title' => 'liko_cup_access',
            ],
            [
                'id'    => 22,
                'title' => 'competition_participant_create',
            ],
            [
                'id'    => 23,
                'title' => 'competition_participant_edit',
            ],
            [
                'id'    => 24,
                'title' => 'competition_participant_show',
            ],
            [
                'id'    => 25,
                'title' => 'competition_participant_delete',
            ],
            [
                'id'    => 26,
                'title' => 'competition_participant_access',
            ],
            [
                'id'    => 27,
                'title' => 'category_create',
            ],
            [
                'id'    => 28,
                'title' => 'category_edit',
            ],
            [
                'id'    => 29,
                'title' => 'category_show',
            ],
            [
                'id'    => 30,
                'title' => 'category_delete',
            ],
            [
                'id'    => 31,
                'title' => 'category_access',
            ],
            [
                'id'    => 32,
                'title' => 'competition_card_first_create',
            ],
            [
                'id'    => 33,
                'title' => 'competition_card_first_edit',
            ],
            [
                'id'    => 34,
                'title' => 'competition_card_first_show',
            ],
            [
                'id'    => 35,
                'title' => 'competition_card_first_delete',
            ],
            [
                'id'    => 36,
                'title' => 'competition_card_first_access',
            ],
            [
                'id'    => 37,
                'title' => 'judging_panel_create',
            ],
            [
                'id'    => 38,
                'title' => 'judging_panel_edit',
            ],
            [
                'id'    => 39,
                'title' => 'judging_panel_show',
            ],
            [
                'id'    => 40,
                'title' => 'judging_panel_delete',
            ],
            [
                'id'    => 41,
                'title' => 'judging_panel_access',
            ],
            [
                'id'    => 42,
                'title' => 'ivent_create',
            ],
            [
                'id'    => 43,
                'title' => 'ivent_edit',
            ],
            [
                'id'    => 44,
                'title' => 'ivent_show',
            ],
            [
                'id'    => 45,
                'title' => 'ivent_delete',
            ],
            [
                'id'    => 46,
                'title' => 'ivent_access',
            ],
            [
                'id'    => 47,
                'title' => 'competition_group_create',
            ],
            [
                'id'    => 48,
                'title' => 'competition_group_edit',
            ],
            [
                'id'    => 49,
                'title' => 'competition_group_show',
            ],
            [
                'id'    => 50,
                'title' => 'competition_group_delete',
            ],
            [
                'id'    => 51,
                'title' => 'competition_group_access',
            ],
            [
                'id'    => 52,
                'title' => 'listindex_create',
            ],
            [
                'id'    => 53,
                'title' => 'listindex_edit',
            ],
            [
                'id'    => 54,
                'title' => 'listindex_show',
            ],
            [
                'id'    => 55,
                'title' => 'listindex_delete',
            ],
            [
                'id'    => 56,
                'title' => 'listindex_access',
            ],
            [
                'id'    => 57,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
