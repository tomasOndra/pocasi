<?php

namespace App\Controllers;

use App\Models\Stationdata;
use App\Models\Station;

class Delete extends BaseController
{
    public function deleteMonth()
    {
        $station = $this->request->getPost('station');
        $year = $this->request->getPost('year');
        $month = $this->request->getPost('month');

        $model = new \App\Models\Stationdata();

        $model
            ->where('Stations_ID', $station)
            ->where('YEAR(date)', $year)
            ->where('MONTH(date)', $month)
            ->delete();

        return redirect()->to('/data/delete')
            ->with('message', 'Data byla soft-deletována.');
    }

    public function deleteForm()
    {
        return view('data/delete');
    }
}