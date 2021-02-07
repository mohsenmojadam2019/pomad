<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

//USER
////////////////////////////////////////////////////////////////////////////////////
//خروج
Route::get('logout', 'DashboardController@logout');
//ورود
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', ['as' => 'post-login', 'uses' => 'Auth\LoginController@postLogin']);
////////////////////////////////////////////////////////////////////////////////////

//sms-login
Route::get('login-with-phone', 'Auth\LoginController@getLoginWithPhone')->name('get-login-with-phone');
Route::post('login-with-phone', 'Auth\LoginController@postLoginWithPhone')->name('post-login-with-phone');
////////////////////////////////////////////////////////////////////////////////////
//داشبورد
//Route::prefix('dashboard')->middleware('auth:web')->group(function () {
Route::prefix('dashboard')->middleware('auth:web')->group(function () {

    //صفحه اصلی داشبورد
    Route::get('/', 'User\HomeController@index')->name('user-home');


    //userInfo
    Route::get('user-info/user-info-edit', 'UserInfoController@userInfoEdit')->name('user-info-edit');
    Route::get('user-info/educational-field-edit', 'educationalFieldController@educationalFieldEdit')->name('educational-field-edit');
    Route::get('user-info/user-educational-info-edit', 'UserEducationalInfoController@userEducationEdit')->name('user-educational-info-edit');
    Route::get('user-school-info/user-school-info-edit', 'SchoolInfoController@userSchoolInfoEdit')->name('user-school-info-edit');

    Route::get('user-address/edit-address', 'UserAddressController@userAddressEdit')->name('user-address-edit');
    Route::get('educational-group/edit-educational-group', 'educationalGroupController@editEducationalGroup')->name('educational-group-edit');
    Route::get('educational-group/edit-grade', 'educationalGroupController@editGrade')->name('grade-edit');


//workshop
    Route::get('user-online-workshop', 'DashboardController@onlineWorkshop')->name('user-online-workshop');
    Route::get('user-service-public', 'DashboardController@servicePublic')->name('user-service-public');
//workshop service private
    Route::get('user-service-private', 'DashboardController@servicePrivate')->name('user-service-private');
    //رزرو
    Route::post('user-workshop-private-reserve', 'UserWorkshopController@userWorkshopReserve')->name('user-workshop-reserve');

    //خدمات اختصاصی
    Route::get('user-service-private/workshop-private', 'WorkshopController@userWorkshopReserve')->name('user-workshop-private');

    Route::get('user-service-private/online-test', 'UserServiceController@getOnlineTest')->name('user-online-test');
    //کلیپ کارگاه
    Route::get('user-service-private/workshop-clips', 'UserServiceController@getWorkshopClips')->name('user-workshop-clips');
    //دریافت کد فعالسازی
    Route::get('user-service-private/activation-code', 'UserServiceController@getActivationCode')->name('user-activation-code');
    //کارنامه مشاوره ای
    Route::get('user-service-private/consulting-resumes', 'UserServiceController@getConsultingResumes')->name('user-consulting-resumes');
    //اطلاعات تکمیلی

    Route::get('user-service-private/further-infos', 'UserServiceController@getFurtherInfos')->name('user-further-infos');
    //برنامه تغذیه ای
    Route::get('user-service-private/nutrition-programs', 'UserServiceController@getNutritionPrograms')->name('user-nutrition-programs');
    //خدمات اولیا
    Route::get('user-service-private/parents-services', 'UserServiceController@getParentsServices')->name('user-parents-services');
    //پرسشنامه روانشناسی
    Route::get('user-service-private/psychology-ques', 'UserServiceController@getPsychologyQues')->name('user-psychology-ques');
    //کارنامه مشاوره ای
    Route::get('user-service-private/study-methods', 'UserServiceController@getStudyMethods')->name('user-study-methods');
    //برنامه تغذیه ای
    Route::get('user-service-private/study-programs', 'UserServiceController@getStudyPrograms')->name('user-study-programs');
    //برنامه مطالعاتی
    Route::get('user-service-private/workshop-questions', 'UserServiceController@getWorkshopQuestions')->name('user-workshop-questions');
    //اسلایدهای کارگاه
    Route::get('user-service-private/workshop-sliders', 'UserServiceController@getWorkshopSliders')->name('user-workshop-sliders');
//
    Route::get('user-service-private/service-private-', 'UserServiceController@getTest')->name('new-test');


//USER
////////////////////////////////////////////////////////////////////////////////////////////
//resource-user
    Route::resource('user-profile', 'UserController');
    Route::resource('user-address', 'UserAddressController');
    Route::resource('user-contact-number', 'ContactNumberController');
    Route::resource('user-educational-info', 'UserEducationalInfoController');
    Route::resource('educational-field', 'educationalFieldController');
    Route::resource('educational-group', 'educationalGroupController');
    Route::resource('user-extra', 'UserExtraInfoController');
    Route::resource('user-school-info', 'SchoolInfoController');
    Route::resource('user-info', 'UserInfoController');
    Route::resource('grade', 'gradeController');
//    Route::resource('check-mentor', 'CheckMentorController');


    Route::get('todo', function () {
        return view('dashboard.user.todo');
    });


//////////////////////////////////////////////////////////////////


    Route::get('profile', function () {
        return view('dashboard.user.profile');
    });
    Route::get('list', function () {
        return view('dashboard.user.service-private.list-service');
    });


    Route::get('video', function () {
        return view('dashboard.video');
    });
//////////////////////////////////////////////////////////////////////mentor
    Route::resource('a', 'TestController');


//جلسات مشاوره همراه
    Route::get('consultant-session', 'ConsultingSessionController@index');
    Route::post('consultant-session', 'ConsultingSessionController@store')->name('consulting-session-post');
//وقت دهی جلسه مشاور همراه
//داوطلبان بدون وقت

    Route::get('consulting-planning', 'ConsultingPlanningController@index');
    Route::post('consulting-planning', 'ConsultingPlanningController@store')->name('consulting-planning-post');


//انتخاب داوطلب برای ثبت تماس با اولیا و داوطلب
    Route::get('contact-parent', function () {
        return view('dashboard.user.check-mentor.contact-user');
    });
//تماس نگرفته ها
    Route::get('not-called', function () {
        return view('dashboard.user.check-mentor.not-called');
    });
////////////////////////////////////////////////////////////////////////////
//زمانبندی
    Route::get('single-schedule',
        function () {
            return view('dashboard.user.schedule.single');
        });


//زمان برگ
    Route::get('leaf-time-schedule',
        function () {
            return view('dashboard.user.schedule.leaf-time');
        });


//زمانبندی تکمیل
    Route::get('completion-schedule',
        function () {
            return view('dashboard.user.schedule.completion');
        });

////////////////////////////////////////////////////////////////////////////
// گروهی زمانبندی
    Route::get('single-group-schedule',
        function () {
            return view('dashboard.user.schedule-group.single');
        });

//گروهی زمان برگ
    Route::get('group-schedule',
        function () {
            return view('dashboard.user.schedule-group.leaf-time');
        });
//گروهی زمانبندی تکمیل
    Route::get('group-completion-schedule',
        function () {
            return view('dashboard.user.schedule-group.completion');
        });
/////////////////////////////////////////////////////////////////////////////
//گزارشات مشاوره همراه

//گزارش شماره صفر
    Route::get('report-number-zero',
        function () {
            return view('dashboard.user.consultant-reports.number-zero');
        });

///////////////////////////////////////////////////////////////////////////
//گزارشات حقوقی
//ثبت تخلف


//هنوز انجام نشده
    Route::get('record-violations', 'MentorController@index');
//ارزشیابی
    Route::get('record-violations/assessment', 'MentorController@assessment')->name('record-violations.assessment');
    Route::post('record-violations/assessment/store', 'MentorController@store');


//نمایش امتیازات مشاوران
    Route::get('dashboard/show-consultant-points',
        function () {
            return view('dashboard.user.consultant-reports.show-points');
        });

////////////////////////////////////////////
//workshopYear کارگاه سالیانه
//رزرو نکرده های کارگاه
//کارگاه یک پایه چهارم
//21 link
    Route::get('workshop-one-grade-fourth',
        function () {
            return view('dashboard.user.not-reserved.workshop-one-grade-fourth');
        });


////////////////////////////////////////////
//لیست رزرو نکرده های کارگاه
    Route::get('list-not-reserved-workshop',
        function () {
            return view('dashboard.user.not-reserved.list-not-reserved-workshop');
        });
//لیست غایبین کارگاه
    Route::get('list-workshop-absentees',
        function () {
            return view('dashboard.user.not-reserved.list-workshop-absent');
        });

//ثبت کارگاه سالیانه
    Route::get('record-workshop-years',
        function () {
            return view('dashboard.user.not-reserved.record-workshop-years');
        });

//حضور و غیاب

    Route::get('absence',
        function () {
            return view('dashboard.user.not-reserved.absence');
        });
//absent=غایب  ,, absente غیبت  ,, absence=غیبت
//لیست غایبین کارگاه 2
    Route::get('list-absence-workshop',
        function () {
            return view('dashboard.user.not-reserved.list-absente-workshop');
        });

//لیست غایبین کارگاه 2
    Route::get('list-absence-workshop-years',
        function () {
            return view('dashboard.user.not-reserved.list-absente-workshop-years');
        });

//لیست غایبین کارگاه به تفکیک شهرستان
    Route::get('list-absence-workshop-city',
        function () {
            return view('dashboard.user.not-reserved.list-absente-workshop-city');
        });

//////////////////////////////////////////////////////////////////
//داوطلبان غیر حضوری
//بارگذاری برنامه غیر حضوری ها
    Route::get('upload-absent-application',
        function () {
            return view('dashboard.user.not-reserved.upload-absent-application');
        });


//ارسال برنامه
    Route::get('upload-app',
        function () {
            return view('dashboard.user.not-reserved.upload-app');
        });
//لیست نواقص داوطلبان
    Route::get('list-shortcomings',
        function () {
            return view('dashboard.user.not-reserved.list-shortcomings');
        });
//پیگیری بسته های غیرحضوری ارسالی
    Route::get('send-absent-package',
        function () {
            return view('dashboard.user.not-reserved.send-absent-package');
        });

//سوابق داوطلبان
    Route::get('user-records', 'UserRecordController@recordUsers');


//بدون تیپ شخصیت
    Route::get('not-type-selected',
        function () {
            return view('dashboard.user.not-reserved.not-type-selected');
        });
///////////////////////////////////////////
//تریاژ
//تست تعیین شخصیت داوطلبان
    Route::get('result-test',
        function () {
            return view('dashboard.user.not-reserved.result-test');
        });
//تعیین مشاور همراه
    Route::get('selected-mentor', 'SelectMentorController@create');
    Route::post('selected-mentor', 'SelectMentorController@store')->name('select-mentor-post');

//داوطلبان بدون مشاور همراه
    Route::get('search/not-mentor', 'SelectMentorController@searchNotMentor');


//نمی خوایم
//مدیریت مشاوران
    Route::get('manage-consultant',

        function () {
            return view('dashboard.user.not-reserved.manage-consultant');

        });

////نتیجه تست مشاوران
//Route::get('manage-consultant',
//
//    function () {
//        return view('user.not-reserved.manage-consultant');
//
//    });

//ثبت نام مشاور در سایت
    Route::get('register-consultant',

        function () {
            return view('dashboard.user.not-reserved.register-consultant');

        });
//گزارش اولیا
//مشاهده گزارش
    Route::get('show-report',

        function () {
            return view('dashboard.user.not-reserved.show-report');

        });


/////////////////////////////////////////////////////////////////////////////
//  ثبت متقاضی برای واحد پذیرش
    Route::get('create-user', function () {
        return view('dashboard.user.user-registration.create');
    });
//ویرایش متقاضی
    Route::get('edit-user', function () {
        return view('dashboard.user.user-registration.edit-user');
    });
////////////////////////////////////////////////

//ثبت کارنامه مشاوره ای

    Route::get('
consultant-resume-list', function () {
        return view('dashboard.user.consultant.consultant-resume-list');
    });
//لیست داوطلبان مدارس
    Route::get('
list-school-volunteer', function () {
        return view('dashboard.user.consultant.list-school-volunteer');
    });
//لیست داوطلبان
    Route::get('
list-volunteer', function () {
        return view('dashboard.user.consultant.list-volunteer');
    });
//لیست مشاوران امروز

    Route::get('
list-consultant-today', function () {
        return view('dashboard.user.consultant.list-consultant-today');
    });

//ثبت داوطلب
    Route::get('
volunteer-registration', function () {
        return view('dashboard.user.user-registration.volunteer-registration');
    });

// ویرایش داوطلب
    Route::get('
volunteer-update', function () {
        return view('dashboard.user.user-registration.volunteer-update');
    });
// صدور کارت داوطلب
    Route::get('
card-issuance', function () {
        return view('dashboard.user.user-registration.card-issuance');
    });

//البوم عکس
    Route::get('
gallery', function () {
        return view('dashboard.user.user-registration.gallery');
    });

//انصرافی
    Route::get('cancellations', function () {
        return view('dashboard.user.user-registration.cancellations');
    });
//سفارشی
    Route::get('customization', function () {
        return view('dashboard.user.user-registration.customization');
    });


//لیست کلی داوطلب
//ویرایش داوطلب
    Route::get('volunteer-edit', function () {
        return view('dashboard.user.user-registration.volunteer-edit');
    });


//مالی
//جدول نمایش ثبت فیلم
    Route::get('tbl-register-receipt', function () {
        return view('dashboard.user.user-registration.tbl-register-receipt');
    });

//ثبت فیش مالی
    Route::get('register-receipt', function () {
        return view('dashboard.user.user-registration.register-receipt');
    });
// نمایش توجیهی فیش بانک
    Route::get('tbl-show-receipt-bank', function () {
        return view('dashboard.user.user-registration.tbl-show-receipt-bank');
    });

//  نمایش توجیهی فیش بانک غیر حضوری
    Route::get('tbl-show-receipt-bank-not-presence', function () {
        return view('dashboard.user.user-registration.tbl-show-receipt-bank-not-presence');
    });
//ثبت گروه جدید
    Route::get('record-group', function () {
        return view('dashboard.user.user-registration.record-group');
    });
//حضور و غیاب کارگاه  absence یکیه
    Route::get('attendance-workshop', function () {
        return view('dashboard.user.user-registration.attendance-workshop');
    });
//ارسال بسته
//داوطلبان غیر حضوری
    Route::get('absentee-volunteers', function () {
        return view('dashboard.user.user-registration.absentee-volunteers');
    });


//لیست داوطلبان غیر حضوری
    Route::get('list-absentee-volunteers', function () {
        return view('dashboard.user.user-registration.list-absentee-volunteers');
    });


//ثبت فروشنده
    Route::get('seller-registration', function () {
        return view('dashboard.user.user-registration.seller-registration');
    });

//لیست فروشندگان
    Route::get('list-seller-registration', function () {
        return view('dashboard.user.user-registration.list-seller-registration');
    });

///////////////////////////////
//سوابق مشاور
    Route::get('info-mentor', function () {
        return view('dashboard.user.mentor.index');
    });

///////////////////////////////////////////////////////////////////


//////////////////////////////////////////////


//norooz

    Route::prefix('norooz')->group(function () {


        //منو انتخاب برنامه
        Route::get('select-menu', function () {
            return view('dashboard.user.norooz.select-menu');
        });


        //پنل نوروز
        Route::get('show-tickets', function () {
            return view('dashboard.user.norooz.tickets.index');
        });
//ارسال برنامه
        Route::get('send-barname', function () {
            return view('dashboard.user.norooz.tickets.send');
        });


//تیکت
//        Route::get('/tickets','TicketController@index')->name('tickets.index');
//        Route::get('/tickets/create','TicketController@create')->name('tickets.create');
//        Route::get('/tickets/create','TicketController@store')->name('tickets.store');
//        Route::get('/tickets/{ticket}','TicketController@show')->name('tickets.show');
//        Route::post('/tickets/{ticket}','TicketController@update')->name('tickets.update');
//        Route::post('/tickets/delete','TicketController@delete')->name('tickets.delete');

        route::resource('tickets', 'TicketController');

//notification

        Route::get('/markAsRead', 'TicketController@markAsRead')->name('markAsRead');


//reply ticket

        Route::get('/reply', 'TicketController@markAsRead')->name('markAsRead');

        //discussion

        Route::resource('discussion', 'DiscussionController');
        Route::resource('discussion/{discussion}/replies', 'RepliesController');

        Route::post('discussion/{discussion}/replies/{reply}/mark-as-best-reply', 'DiscussionController@reply')->name('discussions.best-reply');


///////////////////////////////////////////////////////////////////////////////////////////
//panel user norooz

        Route::get('/', 'NoroozController@index');
//در send-barname هم موجود هست
        Route::get('/report', 'NoroozController@report')->name('norooz-report');
        Route::get('/Debugging', 'NoroozController@debugging')->name('norooz-debugging');
//برنامه غذایی
        Route::get('/diet', 'NoroozController@diet')->name('norooz-diet');
        Route::get('/diet/week-one', 'NoroozController@dietWeekOne')->name('norooz-diet-week-one');
        Route::get('/diet/week-two', 'NoroozController@dietWeekTwo')->name('norooz-diet-week-two');

//زنگ تفریح
        Route::get('/break-time', 'NoroozController@breakTime')->name('norooz-breakTime');
        Route::get('/break-time/video', 'NoroozController@listVideo')->name('norooz-breakTime-video');
        Route::get('/break-time/text', 'NoroozController@listText')->name('norooz-breakTime-text');
        Route::get('/break-time/text/title', 'NoroozController@title')->name('norooz-breakTime-title');


//آزمون
        Route::get('/azmoon', 'NoroozController@azmoon')->name('norooz-azmoon');
        Route::get('/azmoon/test', 'NoroozController@test')->name('norooz-azmoon-test');


//Route::get('/sport', 'NoroozController@sport')->name('norooz-sport');
        Route::get('/sport', 'NoroozController@show')->name('norooz-sport-show');


//workshop
        Route::get('/workshop', 'NoroozController@workshop')->name('norooz-workshop');
        Route::get('/workshop/iframe', 'NoroozController@iframe')->name('norooz-workshop-iframe');

//notification
        Route::get('/notification', 'NoroozController@notification')->name('norooz-notification');


    });


});


















