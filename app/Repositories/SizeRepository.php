<?php

namespace App\Repositories;

use App\Models\Size;
use App\Repositories\BaseRepository;

/**
 * Class SizeRepository
 * @package App\Repositories
 * @version January 23, 2020, 4:01 pm UTC
*/

class SizeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'size'
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
        return Size::class;
    }
}
