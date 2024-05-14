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
                'title' => 'liko_cup_access',
            ],
            [
                'id'    => 18,
                'title' => 'competition_participant_create',
            ],
            [
                'id'    => 19,
                'title' => 'competition_participant_edit',
            ],
            [
                'id'    => 20,
                'title' => 'competition_participant_show',
            ],
            [
                'id'    => 21,
                'title' => 'competition_participant_delete',
            ],
            [
                'id'    => 22,
                'title' => 'competition_participant_access',
            ],
            [
                'id'    => 23,
                'title' => 'liko_cup_admin_access',
            ],
            [
                'id'    => 24,
                'title' => 'competition_card_first_create',
            ],
            [
                'id'    => 25,
                'title' => 'competition_card_first_edit',
            ],
            [
                'id'    => 26,
                'title' => 'competition_card_first_show',
            ],
            [
                'id'    => 27,
                'title' => 'competition_card_first_delete',
            ],
            [
                'id'    => 28,
                'title' => 'competition_card_first_access',
            ],
            [
                'id'    => 29,
                'title' => 'event_parameter_access',
            ],
            [
                'id'    => 30,
                'title' => 'year_category_create',
            ],
            [
                'id'    => 31,
                'title' => 'year_category_edit',
            ],
            [
                'id'    => 32,
                'title' => 'year_category_show',
            ],
            [
                'id'    => 33,
                'title' => 'year_category_delete',
            ],
            [
                'id'    => 34,
                'title' => 'year_category_access',
            ],
            [
                'id'    => 35,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 36,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 37,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 38,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 39,
                'title' => 'category_create',
            ],
            [
                'id'    => 40,
                'title' => 'category_edit',
            ],
            [
                'id'    => 41,
                'title' => 'category_show',
            ],
            [
                'id'    => 42,
                'title' => 'category_delete',
            ],
            [
                'id'    => 43,
                'title' => 'category_access',
            ],
            [
                'id'    => 44,
                'title' => 'type_of_competition_create',
            ],
            [
                'id'    => 45,
                'title' => 'type_of_competition_edit',
            ],
            [
                'id'    => 46,
                'title' => 'type_of_competition_show',
            ],
            [
                'id'    => 47,
                'title' => 'type_of_competition_delete',
            ],
            [
                'id'    => 48,
                'title' => 'type_of_competition_access',
            ],
            [
                'id'    => 49,
                'title' => 'judging_panel_create',
            ],
            [
                'id'    => 50,
                'title' => 'judging_panel_edit',
            ],
            [
                'id'    => 51,
                'title' => 'judging_panel_show',
            ],
            [
                'id'    => 52,
                'title' => 'judging_panel_delete',
            ],
            [
                'id'    => 53,
                'title' => 'judging_panel_access',
            ],
            [
                'id'    => 54,
                'title' => 'competition_group_create',
            ],
            [
                'id'    => 55,
                'title' => 'competition_group_edit',
            ],
            [
                'id'    => 56,
                'title' => 'competition_group_show',
            ],
            [
                'id'    => 57,
                'title' => 'competition_group_delete',
            ],
            [
                'id'    => 58,
                'title' => 'competition_group_access',
            ],
            [
                'id'    => 59,
                'title' => 'country_create',
            ],
            [
                'id'    => 60,
                'title' => 'country_edit',
            ],
            [
                'id'    => 61,
                'title' => 'country_show',
            ],
            [
                'id'    => 62,
                'title' => 'country_delete',
            ],
            [
                'id'    => 63,
                'title' => 'country_access',
            ],
            [
                'id'    => 64,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
