<?php

namespace App\DataTables\Admin;

use App\Models\JobApplication;
use App\Models\JobPost;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use PDF;

class JobPostDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'admin.action')
            ->addColumn('action', function ($item) {
                $buttons = '';
                return '<div class="ic-action-wrapper">
                        <div class="ic-action">
                        <form action="' . route('admin.job-post.destroy', $item->id) . '"  id="delete-form-' . $item->id . '" method="post" style="">
                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                            <input type="hidden" name="_method" value="DELETE">
                            <button onclick="return makeDeleteRequest(event, ' . $item->id . ')"  type="submit">
                                <i class="ri-delete-bin-6-line"></i>
                            </button>
                        </form>
                    </div></div>';
            })->rawColumns(['action'])->addIndexColumn();
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(JobPost $model): QueryBuilder
    {
        return $model->newQuery()->with('category')->latest();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction([
                'width' => '55px',
                'class' => 'text-center',
                'printable' => false,
                'exportable' => false,
                'title' => 'Action'
            ])
            ->parameters([
                'dom' => 'Bfrtip', // Include 'B' for buttons
                'order' => [[0, 'desc']],
                'buttons' => [
                    [
                        'text' => 'Add New Job', // Button text
                        'className' => 'btn btn-info', // Button style
                        'action' => 'function(e, dt, node, config) {
                window.location.href = "' . route('admin.job-post.create') . '";
            }',
                    ],
                ],
            ]);
    }


    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('DT_RowIndex', 'SL#'),
            Column::make('title', 'title')->title('Title'),
            Column::make('category.name', 'category.name')->title('Category'),
            Column::make('company_name', 'company_name')->title('Company Name'),
            Column::make('salary_range', 'salary_range')->title('Salary Range'),
            Column::make('address', 'address')->title('Address'),
            Column::make('address', 'address')->title('Address'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'JobPost_' . date('YmdHis');
    }
    public function pdf()
    {
        $data = $this->getDataForExport();

        $pdf = PDF::loadView('vendor.datatables.print', [
            'data' => $data,
        ]);

        return $pdf->download($this->getFilename() . '.pdf');
    }
}
