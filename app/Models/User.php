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

use App\Models\reports;

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
    public function backgroundInfo()
    {
        return $this->hasOne(background_info::class);
    }
    public function documents()
    {
        return $this->hasMany(documents::class);
    }
    public function uploadedDocuments()
    {
        return $this->documents()->first()->toArray();
    }
    public function goals()
    {
        return $this->hasMany(goals::class);
    }
    public function getShortTermGoals()
    {
        return $this->goals()->where('type', 'short_term')->first()->toArray();
    }
    public function getLongTermGoals()
    {
        return $this->goals()->where('type', 'long_term')->first()->toArray();
    }
    public function metadata()
    {
        return $this->hasMany(metadata::class);
    }
    public function getCommunication(){
        return $this->metadata()->where('name', 'communication')->first()->toArray();
    }
    public function getBehaviouralVulnerabilities(){
        return $this->metadata()->where('name', 'behavioural_vulnerabilities')->first()->toArray();
    }
    public function getPerosnalCare(){
        return $this->metadata()->where('name', 'perosnalcare_livingskills')->first()->toArray();
    }
    public function getMealsEating(){
        return $this->metadata()->where('name', 'meals_eating')->first()->toArray();
    }
    public function getDuringNights(){
        return $this->metadata()->where('name', 'during_nights')->first()->toArray();
    }
    public function getPropertyDamage(){
        return $this->metadata()->where('name', 'property_damage')->first()->toArray();
    }
    public function getSupportRegular(){
        return $this->metadata()->where('name', 'support_regular')->first()->toArray();
    }
    public function getSupportOccasional(){
        return $this->metadata()->where('name', 'support_occasional')->first()->toArray();
    }
    public function getOngoingTherapySupport(){
        return $this->metadata()->where('name', 'ongoing_therapy_support')->first()->toArray();
    }
    public function getAidsAssistiveTechnology(){
        return $this->metadata()->where('name', 'aids_assistive_technology')->first()->toArray();
    }
    public function getParentalStatement(){
        return $this->metadata()->where('name', 'parental_statement')->first()->toArray();
    }
    public function reports()
    {
        return $this->hasMany(reports::class);
    }

    public function save_progress()
    {
        return $this->hasMany(save_progress::class);
    }

    public function GetAllDetails(){
        $detail   = [];


        if($this->backgroundInfo != null)
        {
            $detail["data"]["backgroundInfo"] = $this->backgroundInfo;
        }
        else
        {
            return [
                "status" => false,
                "data" => null,
                "message" => "Background information is not complete"
            ];
        }
        if($this->uploadedDocuments() !=  null)
        {
            $detail["data"]["uploadedDocuments"] = $this->uploadedDocuments();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Documents are not uploaded"
            ];
        }
        if($this->getShortTermGoals() != null)
        {
            $detail["data"]["getShortTermGoals"] = $this->getShortTermGoals();

        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Short term goals are incomplete."
            ];
        }

        if($this->getLongTermGoals() != null)
        {
            $detail["data"]["getLongTermGoals"] = $this->getLongTermGoals();
        }
        else
        {
            return [
                "status" => false,
                "data" => null,
                "message" => "Long term goals are incomplete."
            ];
        }

        if($this->getCommunication() != null)
        {
        $detail["data"]["getCommunication"] = $this->getCommunication();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Communication is incomplete."
            ];
        }

        if($this->getBehaviouralVulnerabilities() != null)
        {
            $detail["data"]["getBehaviouralVulnerabilities"] = $this->getBehaviouralVulnerabilities();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Behavioural Vulnerabilities is incomplete."
            ];
        }

        if($this->getPerosnalCare() != null)
        {
            $detail["data"]["getPerosnalCare"] = $this->getPerosnalCare();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Personal care/ Living skills is incomplete."
            ];
        }

        if($this->getMealsEating() != null)
        {
            $detail["data"]["getMealsEating"] = $this->getMealsEating();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Meals /eating is incomplete."
            ];
        }

        if($this->getDuringNights() != null)
        {
            $detail["data"]["getDuringNights"] = $this->getDuringNights();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "During night details are incomplete."
            ];
        }

        if($this->getPropertyDamage() != null)
        {
            $detail["data"]["getPropertyDamage"] = $this->getPropertyDamage();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Property damage details are incomplete."
            ];
        }

        if($this->getSupportRegular() != null)
        {
            $detail["data"]["getSupportRegular"] = $this->getSupportRegular();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Regular support details are incomplete."
            ];
        }

        if($this->getSupportOccasional() != null)
        {
            $detail["data"]["getSupportOccasional"] = $this->getSupportOccasional();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Occasional support details are incomplete."
            ];
        }

        if($this->getOngoingTherapySupport() != null)
        {
            $detail["data"]["getOngoingTherapySupport"] = $this->getOngoingTherapySupport();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Ongoing therapy support details are incomplete."
            ];
        }

        if($this->getAidsAssistiveTechnology() != null)
        {
            $detail["data"]["getAidsAssistiveTechnology"] = $this->getAidsAssistiveTechnology();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => "Aids assistive technology details are incomplete."
            ];
        }

        if($this->getParentalStatement() != null)
        {
            $detail["data"]["getParentalStatement"] = $this->getParentalStatement();
        }
        else{
            return [
                "status" => false,
                "data" => null,
                "message" => ""
            ];
        }
        $detail['status'] = true;
        $detail['message'] = '';
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






