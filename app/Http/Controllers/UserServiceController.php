<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserServiceController extends Controller
{
  public function getOnlineTest()
  {
      return view('dashboard.user.service-private.online-test');
  }
    public function getWorkshopClips()
    {
        return view('dashboard.user.service-private.workshop-clips');
    }
    public function getActivationCode()
    {
        return view('dashboard.user.service-private.activation-code');
    }
    public function getConsultingResumes()
    {
        return view('dashboard.user.service-private.consulting-resumes');
    }
    public function getFurtherInfos()
    {
        return view('dashboard.user.service-private.further-infos');
    }
    public function getNutritionPrograms()
    {
        return view('dashboard.user.service-private.nutrition-programs');
    }
    public function getParentsServices()
    {
        return view('dashboard.user.service-private.parents-services');
    }
    public function getPsychologyQues()
    {
        return view('dashboard.user.service-private.psychology-ques');
    }
    public function getStudyMethods()
    {
        return view('dashboard.user.service-private.study-methods');
    }
    public function getStudyPrograms()
    {
        return view('dashboard.user.service-private.study-programs');
    }
    public function getWorkshopQuestions()
    {
        return view('dashboard.user.service-private.workshop-questions');
    }

    public function getWorkshopSliders()
    {
        return view('dashboard.user.service-private.workshop-sliders');
    }

    public function getTest()
    {
        return view('dashboard.user.service-private.list-service');
    }







}
