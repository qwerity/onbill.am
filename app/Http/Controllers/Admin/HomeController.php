<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Latest teams',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Team',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd.m.Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'fields'                => [
                'name'  => '',
                'owner' => 'name',
            ],
        ];

        $settings1['data'] = [];

        if (class_exists($settings1['model'])) {
            $settings1['data'] = $settings1['model']::latest()
                ->take($settings1['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings1)) {
            $settings1['fields'] = [];
        }

        $settings2 = [
            'chart_title'        => 'Ամսական վճարներ ըստ ծառայություն',
            'chart_type'         => 'line',
            'report_type'        => 'group_by_relationship',
            'model'              => 'App\\Payment',
            'group_by_field'     => 'type',
            'aggregate_function' => 'sum',
            'aggregate_field'    => 'amount',
            'filter_field'       => 'created_at',
            'filter_period'      => 'month',
            'column_class'       => 'col-md-6',
            'entries_number'     => '5',
            'relationship_name'  => 'service',
        ];

        $chart2 = new LaravelChart($settings2);

        return view('home', compact('settings1', 'chart2'));
    }
}
