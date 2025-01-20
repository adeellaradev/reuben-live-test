<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function screen($screen)
    {
        switch ($screen) {
            case 1:
                $records = $this->getRecords();
                return view('screens.screen1', compact('records'));
            case 2:
                return view('screens.screen2');
            case 3:
                $grid = $this->generateGrid();
                return view('screens.screen3', compact('grid'));
        }
    }

    public function search(Request $request)
    {
        $query = $request->query('query', '');
        if (empty($query)) {
            return response()->json($this->getRecords());
        }
        // Search logic here
        return response()->json([]); // Return search results
    }

    public function toggleSquare(Request $request)
    {
        // Logic to toggle the grid state
        return response()->json([]);
    }

    private function getRecords()
    {
        return [
            ['id' => 1, 'title' => 'Record 1', 'notes' => 'Notes 1'],
            ['id' => 2, 'title' => 'Record 2', 'notes' => 'Notes 2'],
        ];
    }

    private function generateGrid()
    {
        return [
            ['red', 'blue', 'red'],
            ['blue', 'red', 'blue'],
            ['red', 'blue', 'red'],
        ];
    }
}
