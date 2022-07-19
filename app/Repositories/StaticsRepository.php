<?php

namespace App\Repositories;

use App\Models\Statics;
use App\Repositories\BaseRepository;

/**
 * Class StaticsRepository
 * @package App\Repositories
 * @version February 5, 2020, 10:06 am UTC
*/

class StaticsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'value'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Statics::class;
    }
}
