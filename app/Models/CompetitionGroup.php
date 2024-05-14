<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompetitionGroup extends Model
{
    use SoftDeletes, MultiTenantModelTrait, HasFactory;

    public $table = 'competition_groups';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'coach',
        'description',
        'category_id',
        'apparatus_wa',
        'apparatus_hoop',
        'apparatus_rope',
        'apparatus_ball',
        'apparatus_clubs',
        'apparatus_ribbon',
        'max_checkboxes',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function competitionGroupCompetitionCardFirsts()
    {
        return $this->hasMany(CompetitionCardFirst::class, 'competition_group_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function competition_participants()
    {
        return $this->belongsToMany(CompetitionParticipant::class);
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
