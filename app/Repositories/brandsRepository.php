<?php

namespace App\Repositories;

use App\Models\brands;
use App\Repositories\BaseRepository;

/**
 * Class brandsRepository
 * @package App\Repositories
 * @version January 19, 2020, 2:44 pm UTC
*/

class brandsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return brands::class;
    }
}
