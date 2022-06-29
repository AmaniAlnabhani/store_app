<?php

namespace App\Exports;
use App\Order;

//use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all();
    }
    public function headings():array
    {
        return [
            'Id',
            'proudect name',
            'proudect _id',
            'quntity',
            'price',
            'Created At',
            'Updated At',
        ];
    }
}
