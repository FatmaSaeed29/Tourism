<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;

class TicketController extends Controller
{
    //
    function addData(Request $req)
    {
        $ticket = new ticket;
        $ticket->name=$req->Name;
        $ticket->destination=$req->Destination;
        $ticket->dataandtime=$req->DataAndTime;
        $ticket->number=$req->Number;
        $ticket->services=$req->Services;
        $ticket->save();
        return redirect('/success');

    }
}
