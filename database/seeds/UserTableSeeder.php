<?php

use Illuminate\Database\Seeder;
use PapillonInternational\Role;
use PapillonInternational\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed some initial users with roles
        $role_student = Role::where('name', 'student')->first();
        $role_teacher  = Role::where('name', 'teacher')->first();
        $role_admin  = Role::where('name', 'admin')->first();
        //Seed students
        $student = new User();
        $student->name = 'student Name';
        $student->email = 'student@example.com';
        $student->password = bcrypt('secret');
        $student->save();
        $student->roles()->attach($role_student);
        //Seed teachers
        $teacher = new User();
        $teacher->name = 'teacher Name';
        $teacher->email = 'teacher@example.com';
        $teacher->password = bcrypt('secret');
        $teacher->save();
        $teacher->roles()->attach($role_teacher);
        //Seed Admin
        $admin = new User();
        $admin->name = 'admin Name';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
