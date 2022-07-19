<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Repositories\BaseRepository;

/**
 * Class BrandRepository
 * @package App\Repositories
 * @version August 24, 2021, 6:53 pm UTC
*/

class BrandRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'name',
        'name_ar',
        'image',
        'category_id'
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
        return Brand::class;
    }
}
