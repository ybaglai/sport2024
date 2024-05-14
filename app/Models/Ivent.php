<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Ivent extends Model implements HasMedia
{
    use SoftDeletes, MultiTenantModelTrait, InteractsWithMedia, HasFactory;

    public $table = 'ivents';

    protected $appends = [
        'docs',
    ];

    protected $dates = [
        'date',
        'date_to',
        'deadline',
        'deadline_d_form_and_mp_3',
        'volunteers_from',
        'volunteers_to',
        'meal_to',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'private',
        'virtual',
        'date',
        'date_to',
        'event_name',
        'place',
        'country',
        'deadline',
        'deadline_d_form_and_mp_3',
        'organizer',
        'contact',
        'notes',
        'allow_volunteers_registration',
        'volunteers_from',
        'volunteers_to',
        'allow_meal_form',
        'meal_from',
        'meal_to',
        'media_registration',
        'travel_form',
        'hotel_form',
        'visa_form',
        'created_at',
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

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateToAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateToAttribute($value)
    {
        $this->attributes['date_to'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDeadlineAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDeadlineAttribute($value)
    {
        $this->attributes['deadline'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDeadlineDFormAndMp3Attribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDeadlineDFormAndMp3Attribute($value)
    {
        $this->attributes['deadline_d_form_and_mp_3'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getVolunteersFromAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setVolunteersFromAttribute($value)
    {
        $this->attributes['volunteers_from'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getVolunteersToAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setVolunteersToAttribute($value)
    {
        $this->attributes['volunteers_to'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getMealToAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setMealToAttribute($value)
    {
        $this->attributes['meal_to'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDocsAttribute()
    {
        return $this->getMedia('docs');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
