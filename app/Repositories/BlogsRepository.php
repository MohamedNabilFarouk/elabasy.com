<?php

namespace App\Repositories;

use App\Models\Blogs;
use App\Repositories\BaseRepository;

/**
 * Class BlogsRepository
 * @package App\Repositories
 * @version February 5, 2020, 2:15 pm UTC
*/

class BlogsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'des',
        'image'
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
        return Blogs::class;
    }
}
