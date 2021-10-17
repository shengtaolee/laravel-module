<?php

namespace Modules\Demo\Repositories;

use Modules\Demo\Models\AdminMenu as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AdminMenu extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
