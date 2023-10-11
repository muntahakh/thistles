<?php

namespace App\Models;

use App\Models\{QuestionHeading, Questions, QuestionOptions, Answers};
use Illuminate\Support\Facades\{Auth , Hash , Crypt};
use App\Notifications\CustomVerifyEmail;
use App\Notifications\CustomChangePasswordEmail;
use App\Notifications\DocumentationNotificationEmail;
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
        'image',
        'url_image',
        'password',
        'verification_token',
        'authentication_type',

    ];

    public function sendEmailVerificationNotification()

    {
        $mytime = Carbon::now()->format('YmdHis');
        $verification_token =  Crypt::encryptString($mytime );
        $this->fill(['verification_token' => $verification_token ])->save();

        $this->notify(new CustomVerifyEmail($this->id, $this->name, $this->email, $verification_token ));
    }

    public function sendResetLinkEmail(){
        $this->notify(new CustomChangePasswordEmail($this->id, $this->name, $this->email , $this->verification_token));
    }

    public function sendDocumentationNotification(){
        $this->notify(new DocumentationNotificationEmail($this->id, $this->name, $this->email));
    }

    public function schedule()
    {
        return $this->hasMany(schedule::class);
    }

    public function backUrl()
    {
        return $this->hasMany(BackUrl::class);
    }

    public function Answers()
    {
        return $this->hasMany(Answers::class);
    }

    // Get All Data

    public function GetAllDetails(){

        if($this->Answers != null)
        {
            $detail = $this->Answers->keyBy('id')->toArray();
        }else{
            return [
                'message' => 'answers not found',
            ];
        }

        return $detail;
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






