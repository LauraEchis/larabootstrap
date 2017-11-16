<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'patronymic', 'company_name', 'position', 'address', 'telephone', 'user_id', 'updated_at' //'
    ];

//$table->string('first_name')->nullable();
//$table->string('last_name')->nullable();
//$table->string('patronymic')->nullable();
//$table->string('company_name')->nullable();
//$table->string('position')->nullable();
//$table->string('address')->nullable();
//$table->string('telephone')->nullable();
//$table->integer('user_id');
    //
}
