<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //

    protected $fillable =['date','prod1','prod2','prod3','completed'];


    public function __construct()
    {


            $this->prod1=false;
            $this->prod2=false;
             $this->prod3=false;
             $this->completed=false;



    }





}
