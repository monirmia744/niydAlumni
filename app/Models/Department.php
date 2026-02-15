<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    // ডাটাবেজের কলামগুলো fillable করা ভালো
    protected $fillable = ['name', 'code'];

    public static function addNewDepartment($request)
    {
        $department = new self(); // static variable ব্যবহারের বদলে local variable নিরাপদ
        $department->name = $request->name;
        $department->code = $request->code;
        $department->save();
        return $department;
    }
}
