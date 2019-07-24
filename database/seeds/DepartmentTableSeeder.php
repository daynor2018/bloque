<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $depa = new Department();
      $depa->name_department = 'beni';
      $depa->save();
      $depa = new Department();
      $depa->name_department = 'cochabamba';
      $depa->save();
      $depa = new Department();
      $depa->name_department = 'chuquisaca';
      $depa->save();
      $depa = new Department();
      $depa->name_department = 'la paz';
      $depa->save();
      $depa = new Department();
      $depa->name_department = 'oruro';
      $depa->save();
      $depa = new Department();
      $depa->name_department = 'pando';
      $depa->save();
      $depa = new Department();
      $depa->name_department = 'potosi';
      $depa->save();
      $depa = new Department();
      $depa->name_department = 'santa cruz';
      $depa->save();
      $depa = new Department();
      $depa->name_department = 'tarija';
      $depa->save();
    }
}
