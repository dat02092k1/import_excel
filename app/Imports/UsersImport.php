<?php

namespace App\Imports;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'id'       => $row['id'], 
            'school'    => $row['school'], 
            'district'    => $row['district'], 
            'class'    => $row['class'], 
            'name'     => $row['name'],
            'day'    => $row['day'], 
            'month'    => $row['month'], 
            'year'    => $row['year'], 
            'gender'    => $row['gender'], 
            'birthplace'    => $row['birthplace'], 
            'ethnicity'    => $row['ethnicity'], 
            'live'    => $row['live'], 
            'tel'    => $row['tel'], 
            'grade1'    => $row['grade1'], 
            'grade2'    => $row['grade2'], 
            'grade3'    => $row['grade3'], 
            'grade4'    => $row['grade4'], 
            'grade5'    => $row['grade5'], 
            'sum5'    => $row['sum5'], 
            'priority'    => $row['priority'], 
            'sumall'    => $row['sumall'], 
            'note'    => $row['note']
         ]);
    }

    public function rules(): array
    {
        return [
            'name' => 'required',

             // Above is alias for as it always validates in batches
             '*.name' => 'required',
             'id' => 'required',

             // Above is alias for as it always validates in batches
             '*.id' => 'required',  
        ];
    }
}
