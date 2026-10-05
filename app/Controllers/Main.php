<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bundesland;
use App\Models\Station;
use App\Models\Stationdata;

class Main extends BaseController
{
    
    var $Bundesland;
    var $Station;
    var $Stationdata;

    
    public function __construct()
    {
        
        $this->Bundesland = new Bundesland();
        $this->Station = new Station();
        $this->Stationdata = new Stationdata();
    }

    
    public function Bundesland()
    {
        
        $bundesland = $this->Bundesland->orderBy("name", "asc")->findAll();
        $data["bundesland"] = $bundesland;
        echo view("bundesland", $data);
    }

        public function stations($id)
    {
    
        $data['bundesland'] = $this->Bundesland->find($id);

    
        $data['stations'] = $this->Station->where('bundesland', $id)->asObject()->findAll();

    
        return view('stations', $data);
    }

    public function station_data($station_id)
    {
        
        $data['station'] = $this->Station->find($station_id); 
    
        
        $data['pocasi_data'] = $this->Stationdata
                                     ->where('Stations_ID', $station_id)
                                     ->orderBy('date', 'DESC') 
                                     ->findAll();
    
        return view('station_data', $data);
    }

    public function detail($id)
    {
        $bundesland = $this->Bundesland->find($id);
    
        $nazev_zeme = $bundesland->name;
    
        $mapa = 'obrazky/mapy/Map_' . urlencode($nazev_zeme) . '.png';
        $vlajka = 'obrazky/vlajky/Flag_of_' . urlencode($nazev_zeme) . '.png';
    
        $data = [
            'název' => $nazev_zeme,
            'mapa' => base_url($mapa),
            'vlajka' => base_url($vlajka),
        ];
    
        return view('detail', $data);
    }
}

