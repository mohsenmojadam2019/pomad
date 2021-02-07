<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;

/**
 * Class User
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    use TwoFactorAuthenticatable;


    /**
     * @var string[]
     */
    protected $fillable = [


        'username',
        'password',
        'email',
        'main_number',
        'national_code',


    ];


    //   use SoftDeletes;
//    protected $dates=['deleted_at'];


    /**
     * @var string[]
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

    protected $appends =['info'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typeUserNumber()
    {
        return $this->hasone(NumberType::class);
    }

    public function consultingSession()
    {
        return $this->hasone(ConsultingSession::class);
    }



    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userInfo()
    {
        return $this->hasone(UserInfo::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userAddress()
    {
        return $this->hasOne(UserAddress::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactNumber()
    {
        return $this->hasone(ContactNumber::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */


    public function specialStudent(){
        return $this->hasOne(SpecialStudent::class);
    }



    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function schoolInfo()
    {
        return $this->hasOne(SchoolInfo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userExtraInfo()
    {
        return $this->hasOne(UserExtraInfo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userService()
    {
        return $this->hasOne(UserService::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function serviceCategory()
    {
        return $this->hasOne(ServiceCategory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userWorkshop()
    {
        return $this->hasMany(UserWorkshop::class);
    }

    public function workshop()
    {
        return $this->hasMany(Workshop::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */



    public function userMentor()
    {
        return $this->hasMany(UserMentor::class);
    }

    public function getInfoAttribute(){

        return $this->userInfo;

    }





//چک کردن وارد کردن اطلاعات

    /**
     * @return bool
     * آیا فرم اصلی کاربر پر شده
     */
    public function isEducationalInfoPresent()
    {
        return is_null($this->userEducationalInfo()->first()->grade) ? false : true;
    }

    /**
     * @return bool
     * اگر فیلد first_name کاربر پر شده بود یعنی کامل فرم پرشده
     *
     */
    public function isPrimaryInfoPresent()
    {
        return is_null($this->first_name) ? false : true;
    }


    /**
     * @return bool
     * //چک کردن اینکه کاربر تحت پوشش هست یا خیر
     */
    public function isSpecial() :bool
    {

        $educationalInfo = $this->userEducationalInfo()->first();

        if ($educationalInfo) {
            return $educationalInfo->isSpecial;
        }

        return false;
    }


    public function userEducationalInfo()
    {

        return $this->hasOne(UserEducationalInfo::class);
    }


//وقت مشاوره

    public function consultingPlanning()
    {
        return $this->hasOne(ConsultingPlanning::class);
    }


    public function discussions()
    {
        return $this->hasMany(Discussion::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }













}
