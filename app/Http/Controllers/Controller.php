<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('Frontend.home.main');
    }
    public function show_hotel(){
        return view('Frontend.hotel.layout_hotel');
    }
    public function show_room_rate(){
        return view('Frontend.Room-rate.layout-room-rate');
    }
    public function show_offer(){
        return view('Frontend.offer.layout-offer');
    }
    public function show_location(){
        return view('Frontend.location.layout-location');
    }
    public function show_book_now(){
        return view('Frontend.Book.book');
    }
    public function show_room_detail(){
        return view('Frontend.Rooms.rooms-detail');
    }
}
