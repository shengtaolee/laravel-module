<?php

namespace Modules\Demo\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class AdminMenu extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'admin_menu';
    
}
