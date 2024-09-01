<?php

namespace App\Imports;

use App\Models\Details;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DetailsImports implements ToModel, WithHeadingRow
{

    public function model(array $data)
    {
        return new Details([
            'name'     => $data['name'],
            'area'    => $data['area'],
            'city'    => $data['city'],
            'mobile'    => $data['phone1'],
            'category'    => $data['category'],
            'subcategory'    => $data['subcategory'],
        ]);
    }
}
