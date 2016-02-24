<?php

/**
 * 
 * Customer Models
 * 
 * For Special Script
 * Created Customer 28.11.2015
 * 
 * Osman YILMAZ - www.astald.com
 */

namespace Astald\Models;

use Illuminate\Database\Eloquent\Model; 

use Astald\Models\Work; 

class Customer extends Model
{
    protected $table = 'customers';

    public static $require = array('title'=>'require');

    public function childeren()
    {
    	return $this->hasMany('Astald\Models\Work', 'customer_id', 'id')->where('status','publish');
    }
 
}
