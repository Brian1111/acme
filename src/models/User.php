<?php
namespace Acme\Models;

use Illuminate\database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public function testimonials()
    {
        return $this->hasMany('Acme\models\Testimonial');
    }
}
