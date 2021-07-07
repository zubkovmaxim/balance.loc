<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BalanceModel extends Model
{
    protected $table = "balance_history";


    protected $fillable = [
     'id',
     'value',
     'balance',
     'user_id',
     'created_at',
    ];
}
