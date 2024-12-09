<?php

namespace App\DataTables\Admin;

use App\Models\JobApplication;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use PDF;

class JobApplicationDataTable extends DataTable
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
                        <form action="' . route('admin.application.delete', $item->id) . '"  id="delete-form-' . $item->id . '" method="post" style="">
                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                            <input type="hidden" name="_method" value="DELETE">
                            <button onclick="return makeDeleteRequest(event, ' . $item->id . ')"  type="submit">
                                <i class="ri-delete-bin-6-line"></i>
                            </button>
                        </form>
                    </div></div>';
            })->editColumn('user_id', function ($item) {
                $full_name = $item->user->first_name . ' ' . $item->user->last_name;
                return $full_name;
            })
            ->rawColumns(['action'])->addIndexColumn();
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(JobApplication $model): QueryBuilder
    {
        return $model->newQuery()->with('user', 'job_post');
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
                'dom' => 'frtip',
            ]);
    }


    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('DT_RowIndex', 'SL#'),
            Column::make('user_id', 'user_id')->title('User Name'),
            Column::make('job_post.title', 'job_post.title')->title('Job Post'),
            Column::make('email', 'email')->title('Email'),
            Column::make('phone', 'phone')->title('Phone'),
            Column::make('address', 'address')->title('Address'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'JobApplication_' . date('YmdHis');
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
