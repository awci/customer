<?php

/**
 * 
 * Work Models
 * 
 * For Special Script
 * Created Work 28.11.2015
 * 
 * Osman YILMAZ - www.astald.com
 */

namespace Astald\Models;

use Illuminate\Database\Eloquent\Model; 

class Work extends Model
{
    protected $table = 'works';

    public static $require = array('title'=>'require');

    public function customer() 
    {
    	return $this->hasOne('Astald\Models\Customer', 'id', 'customer_id')->where('status','publish');
    }

}
