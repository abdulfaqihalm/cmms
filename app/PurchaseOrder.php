<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = 'purchaseOrders';

    public function part() 
    {
        $this->belongsTo('App\Part');
    }

}
