<?php

namespace App\Imports;

use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;

class SupplierImport implements ToModel, WithHeadingRow
{
    protected $code;
    protected $name;
    protected $email;
    protected $address;
    protected $phone;


    public function __construct($code, $name, $email, $address, $phone)
    {
        $this->code = $code;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;

    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $import = new Supplier([
            'code'         => $row[$this->code],
            'name'         => $row[$this->name],
            'email'        => $row[$this->email],
            'address'      => $row[$this->address],
            'phone'        => $row[$this->phone]
        ]);
        return $import;
    }

    public function headingRow(): int
    {
        return 1;
    }
}
