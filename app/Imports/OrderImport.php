<?php

namespace App\Imports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\ToModel;
use Auth;

class OrderImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Order([
            'name'     => $row[0],
            'email'    => $row[1], 
            'phone'    => $row[2],
            'msg'    => $row[3],
            'building_number'    => $row[4],
            'apartment_number'    => $row[5],
            'user_id'=>Auth::user()->id,
        ]);
    }
}
