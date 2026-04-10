<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearcherConfig;
use App\Models\SearcherField;

class SearcherBuilderController extends Controller
{
    public function index()
    {
        $configs = SearcherConfig::with('fields')->get();
        return view('builder-admin', compact('configs'));
    }

    public function update(Request $request)
    {
        $tables = $request->input('tables', []);

        foreach ($tables as $tableName => $tableData) {
            if (isset($tableData['columns_per_row'])) {
                SearcherConfig::where('table_name', $tableName)->update([
                    'columns_per_row' => $tableData['columns_per_row']
                ]);
            }

            if (isset($tableData['fields'])) {
                foreach ($tableData['fields'] as $fieldData) {
                    SearcherField::where('id', $fieldData['id'])->update([
                        'order' => $fieldData['order'],
                        'is_visible' => $fieldData['is_visible']
                    ]);
                }
            }
        }

        return response()->json(['success' => true]);
    }
}
