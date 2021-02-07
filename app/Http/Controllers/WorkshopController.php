<?php

namespace App\Http\Controllers;

use App\Models\UserWorkshop;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkshopController extends Controller
{

    public function userNotice(Workshop $workshop)
    {

        $data = [];
//آیدی گروه درون سازمانی دانش آموز تحت پوشش کاربر لاگین کرده
        $id=Auth::user()->specialStudent->educational_group_id;


//        //اگر ایدی کاربر برابر ایدی گروه بود و اگر تاریخ انتشار رزرو آن برابر زمانش بود بگیر
        $userEducationalInfo=Workshop::where('group_id','=',$id)->where('reserved_start','>=','2020-12-04')->get();


        foreach ($userEducationalInfo as $item){

            $userWorkshop = UserWorkshop::where(['user_id' => Auth::user()->id,'workshop_id'=> $item->id])->first();
//            dd(1);

////اگر کاربر قبلا ثبت نام نکرده بود  بیا دیتا گروه آزمایشی روبگیر
           if(!$userWorkshop){
                $data['userEducationalInfo'] = $userEducationalInfo;
            }
            else{
                $data['userEducationalInfo']=null;
           }
        }


        return view('dashboard.user.notice',$data);


    }




    public function userWorkshopReserve(Request $request , Workshop $Workshop)
    {
        $Workshop->create([
            'user_id' => Auth::user()->id,
            'workshop_id' => $request->workshop_id,
            'has_reserved' => '1'
        ]);
        return redirect()->back();


    }

}
