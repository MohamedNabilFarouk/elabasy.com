<?php

namespace App\Repositories;

use App\Models\test;
use App\Repositories\BaseRepository;

/**
 * Class testRepository
 * @package App\Repositories
 * @version January 21, 2020, 10:13 am UTC
*/

class testRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return test::class;
    }
}
