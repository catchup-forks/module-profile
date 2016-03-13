<?php

namespace Cms\Modules\Profile\Models;

use Cms\Modules\Core\Models\BaseModel as CoreBaseModel;

class BaseModel extends CoreBaseModel
{
    public function __construct()
    {
        parent::__construct();

        $prefix = config('cms.profile.config.table-prefix', 'profile_');
        $this->table = $prefix.$this->table;
    }
}
