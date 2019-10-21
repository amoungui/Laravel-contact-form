<?php

namespace Amoungui\Contact\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Contact Model
 *
 * @author Amoungui
 */
class Contact extends Model {
    protected $table = 'contacts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'message',
    ];

}
