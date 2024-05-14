<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompetitionCardFirst extends Model
{
    use SoftDeletes, MultiTenantModelTrait, HasFactory;

    public $table = 'competition_card_firsts';

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'competition_participiant_id',
        'competition_group_id',
        'year_category_id',
        'category_id',
        'db_1',
        'db_2',
        'db_3',
        'db_4',
        'db',
        'da_1',
        'da_2',
        'da_3',
        'da_4',
        'ded',
        'da',
        'a_1',
        'a_2',
        'a_4',
        'a_3',
        'a',
        'e_1',
        'e_2',
        'e_3',
        'e_4',
        'e',
        'db_plus_da',
        'a_panel',
        'e_panel',
        'overall_score',
        'place',
        'status',
        'evaluated',
        'code',
        'date',
        'time',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function competition_participiant()
    {
        return $this->belongsTo(CompetitionParticipant::class, 'competition_participiant_id');
    }

    public function competition_group()
    {
        return $this->belongsTo(CompetitionGroup::class, 'competition_group_id');
    }

    public function year_category()
    {
        return $this->belongsTo(YearCategory::class, 'year_category_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
