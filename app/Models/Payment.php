<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
     protected $guarded = [];

    // protected $fillable = [
    //     'username',
    //     'status',
    //     'reference',
    //     'amount',
    //     'channel',
    //     'currency',
    //     'ip_address',
    //     'bin',
    //     'last4',
    //     'exp_month',
    //     'exp_year',
    //     'pay_channel',
    //     'card_type',
    //     'brand',
    //     'account_name',
    //     'reference',
    //     'account_name',
    //     'country_code',
    // ];
}
