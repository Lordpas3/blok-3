<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function setGrade($grade) {
        $this->grade = $grade;
        $this->save();
}
}
