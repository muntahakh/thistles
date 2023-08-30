<?php

namespace App\Models;

use Illuminate\Support\Facades\{Auth , Hash , Crypt};
use App\Notifications\CustomVerifyEmail;
use App\Notifications\CustomChangePasswordEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

class User extends Authenticatable implements MustVerifyEmail
{

    use Notifiable;
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'password',
        'verification_token',

    ];

    public function sendEmailVerificationNotification()

    {
        // dd($this->name ,);
        $mytime = Carbon::now()->format('YmdHis');
        $verification_token =  Crypt::encryptString($mytime );
        $this->fill(['verification_token' => $verification_token ])->save();

        $this->notify(new CustomVerifyEmail($this->id, $this->name, $this->email, $verification_token ));
    }

    public function sendResetLinkEmail(){
        $this->notify(new CustomChangePasswordEmail($this->id, $this->name, $this->email , $this->verification_token));
    }

    // public function backgroundInfo()
    // {
    //     return $this->hasMany(background_info::class);
    // }

    public function backgroundInfo()
    {
        return $this->hasOne(background_info::class);
    }

    public function documents()
    {
        return $this->hasMany(documents::class);
    }

    public function goals()
    {
        return $this->hasOne(goals::class);
    }

    public function metadata()
    {
        return $this->hasMany(metadata::class);
    }

    public function reports()
    {
        return $this->hasMany(reports::class);
    }

    public function save_progress()
    {
        return $this->hasMany(save_progress::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
