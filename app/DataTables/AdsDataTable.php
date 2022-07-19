<?php



namespace App\DataTables;



use App\Models\Ads;

use Yajra\DataTables\Services\DataTable;

use Yajra\DataTables\EloquentDataTable;



class AdsDataTable extends DataTable

{

    /**

     * Build DataTable class.

     *

     * @param mixed $query Results from query() method.

     * @return \Yajra\DataTables\DataTableAbstract

     */

    public function dataTable($query)

    {

        $dataTable = new EloquentDataTable($query);



        return $dataTable->addColumn('action', 'ads.datatables_actions');

    }



    /**

     * Get query source of dataTable.

     *

     * @param \App\Models\Ads $model

     * @return \Illuminate\Database\Eloquent\Builder

     */

    public function query(Ads $model)

    {

        return $model->newQuery();

    }



    /**

     * Optional method if you want to use html builder.

     *

     * @return \Yajra\DataTables\Html\Builder

     */

    public function html()

    {

        return $this->builder()

            ->columns($this->getColumns())

            ->minifiedAjax()

            ->addAction(['width' => '120px', 'printable' => false])

            ->parameters([

                'dom'       => 'Bfrtip',

                'stateSave' => true,

                'order'     => [[0, 'desc']],

                'buttons'   => [

                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],

                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],

                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],

                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],

                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],

                ],

            ]);

    }



    /**

     * Get columns.

     *

     * @return array

     */

    protected function getColumns()

    {

        return [

            'image' => ['name' => 'image', 'data' => 'image', 'render' => '"<img src=\"/images/"+data+"\" height=\"50\"/>"'],

            

            'link'

        ];

    }



    /**

     * Get filename for export.

     *

     * @return string

     */

    protected function filename()

    {

        return 'adsdatatable_' . time();

    }

}

