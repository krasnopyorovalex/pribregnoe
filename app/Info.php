<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use AutoAliasTrait;

    public $timestamps = false;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'published_at'
    ];

    /**
     * @var array
     */
    protected $guarded = ['image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    /**
     * @return string
     */
    public function getUrlAttribute()
    {
        return route("info.show", $this->alias);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return sprintf('%s - новости гостевого дома "Счастье вам" от %s', $this->title, $this->published_at->format('d.m.Y'));
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return sprintf('Новости гостевого дома "Счасте вам" в Прибрежном - %s от %s', $this->name, $this->published_at->format('d.m.Y'));
    }
}
