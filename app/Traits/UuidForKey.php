<?php

namespace App\Traits;

use Ramsey\Uuid\Uuid;
use \Dymantic\InstagramFeed\Profile;

trait UuidForKey
{
    /**
     * Boot the Uuid trait for the model.
     *
     * @return void
     */
    public static function bootUuidForKey()
    {
        static::creating(function ($model) {
            $model->incrementing = false;
            $model->{$model->getKeyName()} = (string)Uuid::uuid4();
        });
    }

    /**
     * Get the casts array.
     *
     * @return array
     */
    public function getCasts()
    {
        return $this->casts;
    }
}
trait Instagram
{
    public static function feed()
    {
        $profile = Profile::where('username', 'my-insta-username')->first();

        $feed = $profile->feed();
        
        dd($profile);
    }
}
