<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['movieName','bookingStatus', 'bookingType', 'bookingDate', 'bookingTime', 'bookingName', 'bookingTicket', 'bookingEmail', 'bookingPNumber', 'total'];


}
