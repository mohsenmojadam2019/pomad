<?php

namespace App\Http\Controllers;

use App\Http\Request\Users\TicketUpdateRequest;
use App\Models\Ticket;
use App\Notifications\RepliedTicket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    public function index()
    {
        $tickets=Ticket::all();

     return view('tickets.index',compact('tickets'));

    }

    public function create()
    {
        return view('tickets.create');
    }


    public function edit(Ticket $ticket)
    {
        return view('tickets.show',compact('ticket'));
    }


    public function store(TicketUpdateRequest $request,Ticket $ticket)
    {

        $image = time() . '.' . $request->image->extension();

        $request->image->move(public_path('assets/dashboard/img/tickets'), $image);


//        $data=new Ticket();



        $ticket->create([
            'select'=>$request->select,
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
            'image'=>$image,



        ]);



        if (DB::table('tickets')->insert($ticket)) {
            Session::flash('success', 'مطلب با موفقیت ارسال شد');

//            auth()->user()->notify(new RepliedToTicket($ticket));

            $time = Carbon::now()->addSecond(10);
            $ticket->notify(new RepliedTicket($ticket))->delay($time);


            return redirect()->back();
        }

        dd($request);


    }

    public function update(TicketUpdateRequest $request,Ticket $ticket)
    {



        $image = time() . '.' . $request->image->extension();

        $request->image->move(public_path('assets/dashboard/img/tickets'), $image);


//        $data=new Ticket();



        $ticket->update([
            'select'=>$request->select,
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
            'image'=>$image,



        ]);
            return redirect()->route('tickets.index')->withSuccess('پیام شما ارسال شد');
        }





    public function destroy (Ticket $ticket)
    {
        $ticket->delete();
        return back();

    }

   public function markAsRead()
   {
       auth()->user()->unreadNotifications->markAsRead();
       return  redirect()->back();
   }





}
