<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class PassDataIntoView extends Component
{
    public function createUser()
    {
        User::create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
    public function render()
    {
        // $emp_info = array(
        //     array('emp_name' => 'Sam', 'age' => 25, 'desig' => 'Soft Engineer', 'sal' => 1500000),
        //     array('emp_name' => 'Smith', 'age' => 35, 'desig' => 'Sr. Soft Engineer', 'sal' => 2800000),
        //     array('emp_name' => 'Jai', 'age' => 24, 'desig' => 'Programmer', 'sal' => 1900000),
        //     array('emp_name' => 'Hari', 'age' => 30, 'desig' => 'Sr. Programmer', 'sal' => 2500000),
        //     array('emp_name' => 'Smith Jonson', 'age' => 28, 'desig' => 'Sr. Engineer', 'sal' => 2300000),
        //     array('emp_name' => 'Jenny', 'age' => 32, 'desig' => 'Sr. Engineer', 'sal' => 2200000)
        // );
        $users = User::all();
        return view('livewire.pass-data-into-view', [
            // 'employeeInfo' => $emp_info
            'userDetails' => $users
        ]);
    }
}