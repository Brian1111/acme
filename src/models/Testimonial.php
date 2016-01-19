<?php
namespace Acme\Models;

use Illuminate\database\Eloquent\Model as Eloquent;

class Testimonial extends Eloquent
{
    public function user()
    {
        return $this->hasOne('Acme\models\User');
    }

}
