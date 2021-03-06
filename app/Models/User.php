<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'location',
        'telephone',
        'plan_id',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function getProfilePhotoUrlAttribute()
    {
        return $this->profile_photo_path ? "/storage/$this->profile_photo_path" :  "/img/default_profile.jpg";
    }

    public function getPublicationsAvailableAttribute()
    {
        return $this->subscription->plan->articles_limit - $this->articles()->count();
    }

    public function getPublicationsActiveAttribute()
    {
        return $this->articles()->whereNotNull('published_at')->count();
    }

    public function getPublicationsInactiveAttribute()
    {
        return $this->articles()->whereNull('published_at')->count();
    }

    public function getCityAttribute()
    {
        $location = json_decode($this->location);
        return (isset($location->address->city)) ? $location->address->city : $location->address->town;
    }
}
