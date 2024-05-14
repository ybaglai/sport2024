<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CompetitionParticipant extends Model implements HasMedia
{
    use SoftDeletes, MultiTenantModelTrait, InteractsWithMedia, HasFactory;

    public $table = 'competition_participants';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const MAX_CHECKBOXES_SELECT = [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
    ];

    public const TYPE_SELECT = [
        '1' => 'Гімнастка',
        '2' => 'Тренер',
        '3' => 'Суддя',
        '4' => 'Інший',
    ];

    protected $appends = [
        'foto',
        'add_musicfor_wa',
        'add_music_for_rope',
        'add_music_for_hoop',
        'add_music_for_ball',
        'add_music_for_clubs',
        'add_music_for_ribbon',
    ];

    public const AGE_GROUP_SELECT = [
        '1' => 'Child A',
        '2' => 'Child B',
        '3' => 'Child C',
        '4' => 'Junior A',
        '5' => 'Junior B',
        '6' => 'Child',
        '7' => 'Junior',
        '8' => 'Senior',
    ];

    protected $fillable = [
        'type',
        'fig_licence_nr',
        'national_lic',
        'surname',
        'name',
        'fullname',
        'year_of_birth',
        'coaches',
        'age_group',
        'organization',
        'country',
        'city',
        'email',
        'contact_address',
        'category_id',
        'link_to_the_archive',
        'description',
        'max_checkboxes',
        'status',
        'apparatus_wa',
        'apparatus_rope',
        'apparatus_hoop',
        'apparatus_ball',
        'apparatus_clubs',
        'apparatus_ribbon',
        'code',
        'created_at',
        'apparatus_wa_logo',
        'apparatus_rope_foto',
        'apparatus_hoop_foto',
        'apparatus_ball_foto',
        'apparatus_clubs_foto',
        'apparatus_ribbon_foto',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function competitionParticipiantCompetitionCardFirsts()
    {
        return $this->hasMany(CompetitionCardFirst::class, 'competition_participiant_id', 'id');
    }

    public function competitionParticipantsCompetitionGroups()
    {
        return $this->belongsToMany(CompetitionGroup::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getFotoAttribute()
    {
        $file = $this->getMedia('foto')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getAddMusicforWaAttribute()
    {
        return $this->getMedia('add_musicfor_wa')->last();
    }

    public function getAddMusicForRopeAttribute()
    {
        return $this->getMedia('add_music_for_rope')->last();
    }

    public function getAddMusicForHoopAttribute()
    {
        return $this->getMedia('add_music_for_hoop')->last();
    }

    public function getAddMusicForBallAttribute()
    {
        return $this->getMedia('add_music_for_ball')->last();
    }

    public function getAddMusicForClubsAttribute()
    {
        return $this->getMedia('add_music_for_clubs')->last();
    }

    public function getAddMusicForRibbonAttribute()
    {
        return $this->getMedia('add_music_for_ribbon')->last();
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
