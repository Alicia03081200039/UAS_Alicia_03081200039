<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class query extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'langganan';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Transaksi_ID', 'NamaSubscription'];

    
}