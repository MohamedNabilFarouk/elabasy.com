<?php

namespace App\Repositories;

use App\Models\account;
use App\Repositories\BaseRepository;

/**
 * Class accountRepository
 * @package App\Repositories
 * @version February 4, 2020, 12:09 pm UTC
*/

class accountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'email',
        'note'
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
        return account::class;
    }
}
