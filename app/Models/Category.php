<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, MultiTenantModelTrait, HasFactory;

    public $table = 'categories';

    public const APP_2_SELECT = [
        '1' => 'Б/П',
    ];

    public const APP_3_SELECT = [
        '1' => 'Б/П',
    ];

    public const APP_4_SELECT = [
        '1' => 'Б/П',
    ];

    public const APP_5_SELECT = [
        '1' => 'Б/П',
    ];

    public const APP_6_SELECT = [
        '1' => 'Б/П',
    ];

    public const APP_IN_FINAL_SELECT = [
        '1' => 'Б/П',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const TYPE_SELECT = [
        '1' => 'Індивідуальний',
        '2' => 'Груповий',
    ];

    public const NUMBER_OF_COMPETITIONS_SELECT = [
        '1' => '1 вид',
        '2' => '2 види',
        '3' => '3 види',
        '4' => '4 види',
        '5' => '5 видів',
        '6' => 'Всі',
    ];

    public const APP_1_SELECT = [
        '1' => 'Б/П',
        '2' => 'Скакалка',
        '3' => 'Обруч',
        '4' => 'М\'яч',
        '5' => 'Булави',
        '6' => 'Стрічка',
        '7' => 'На вибір',
    ];

    protected $fillable = [
        'name',
        'type',
        'year_of_birth',
        'description',
        'app_1',
        'app_2',
        'app_3',
        'app_4',
        'app_5',
        'app_6',
        'app_in_final',
        'number_of_competitions',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function categoryCompetitionParticipants()
    {
        return $this->hasMany(CompetitionParticipant::class, 'category_id', 'id');
    }

    public function categoryCompetitionGroups()
    {
        return $this->hasMany(CompetitionGroup::class, 'category_id', 'id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
