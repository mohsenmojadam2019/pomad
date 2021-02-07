<?php

namespace App\Http\Controllers\Auth;

use App\DataTransferObject\SendSmsDTO;
use App\Http\Controllers\Controller;
use App\Http\Request\Auth\LoginRequest;
use App\Http\Request\Auth\VerifyRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Services\Sms\Sms;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


/**
 * Class LoginController
 * @package App\Http\Controllers\Auth
 */
class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * @var Sms
     */
    private $smsService;

    /**
     * Create a new controller instance.
     *
     * @param Sms $smsService
     */
    public function __construct(Sms $smsService)
    {
        $this->smsService = $smsService;
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function postLogin(Request $request)
    {
        $phone = $request->input('phoneNumber');
        $randNumber = rand(10000, 99999);
        Cache::put($phone, $randNumber);

        $this->sendVerifyCodeSms($phone, $randNumber);

        return view('auth.login-verify-phone', ['phone_number' => $phone]);
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getLoginWithPhone()
    {
        return view('auth.login-verify-phone');
    }

    /**
     * @param VerifyRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function postLoginWithPhone(VerifyRequest $request)
    {
        $vf_code = $request->input('verify_code');
        $phone = $request->input('phone_number');


        if (Cache::get($phone) == $vf_code) {
            $user = $this->getUserFromPhone($phone);

            Auth::login($user);
            return redirect()->route('user-home');
        } else {
            return view('auth.login');
        }

    }
//if user !login ->create new row user

    /**
     * @param $phone
     * @return mixed
     */

//    اگر کاربر از قبل وجود نداشت کاربر جدید میسازد
    private function getUserFromPhone($phone)
    {

        $user = User::where(['main_number' => $phone])->first();

        if (!$user) {
            $user = User::create([
                'main_number' => $phone,
            ]);
        }
        return $user;

    }
//شماره و پیام رو جایگزاری میکنه
    private function sendVerifyCodeSms($phone, int $randNumber)
    {

        $message = sprintf(config('sms.messages.verifyMessage'), $randNumber);

        $smsDto = new SendSmsDTO();
        $smsDto->setReceptor($phone);
        $smsDto->setMessage($message);
        try {
            $this->smsService->sendSms($smsDto);
        }catch (\Exception $e){
            Log::alert('message sending failed for number: ' . $phone);
        }
    }
}
