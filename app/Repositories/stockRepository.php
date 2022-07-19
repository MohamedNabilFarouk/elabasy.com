<?php

namespace App\Repositories;

use App\Models\stock;
use App\Repositories\BaseRepository;

/**
 * Class stockRepository
 * @package App\Repositories
 * @version January 23, 2020, 4:11 pm UTC
*/

class stockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'size_id',
        'color_id',
        'stock'
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
        return stock::class;
    }
}
