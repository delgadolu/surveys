<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    public function index()
    {
        $result = Survey::all();
        $count  = count($result);

        $averageFacebook  = Survey::avg('time_facebook'); 
        $averageInstagram = Survey::avg('time_instagram'); 
        $averageTwitter   = Survey::avg('time_twitter'); 
        $averageWhatsapp  = Survey::avg('time_whatsapp'); 
        $averageTikTok    = Survey::avg('time_tiktok'); 
        $maxfavoriteSocial   = Survey::selectRaw('count(id) as id_count, favorite_social_network')
                                ->groupBy('favorite_social_network')
                                ->orderByDesc('id_count')
                                ->get();

        $minfavoriteSocial   = Survey::selectRaw('count(id) as id_count, favorite_social_network')
                                ->groupBy('favorite_social_network')
                                ->orderBy('id_count')
                                ->get();
         
        $socialNetwork   = Survey::selectRaw('COUNT(*) as total, range_ege, favorite_social_network')
                                ->groupBy('range_ege','favorite_social_network')
                                ->get();
        $range = [];
        foreach ($socialNetwork as $key => $value) {
            switch ($value['range_ege']) {
                case '1':
                    $range['18-25'][]=[
                        $value['favorite_social_network'] =>$value['total']
                    ];
                        
                case '2':
                    $range['26-33'][]=[
                        $value['favorite_social_network'] =>$value['total']
                    ];
                case '3':
                    $range['34-40'][]=[
                        $value['favorite_social_network'] =>$value['total']
                    ];
                case '4':
                    $range['40+'][]=[
                        $value['favorite_social_network'] =>$value['total']
                    ];
            }
              
        }
        
        $average [] = [
            'name' => 'Facebook',
            'y'    => floatVal($averageFacebook),
        ];
        $average [] = [
            'name' => 'Instagram',
            'y'    => floatVal($averageInstagram)
        ];
        $average [] = [
            'name' => 'Twitter',
            'y'    => floatVal($averageTwitter),
        ];
        $average [] = [
            'name' => 'Whatsapp',
            'y'    => floatVal($averageWhatsapp),
        ];
        $average [] = [
            'name' => 'TikTok',
            'y'    => floatVal($averageTikTok),
        ];
        return view("statistics", ['data' => json_encode($average), 'maxNetwork' => $maxfavoriteSocial[0]->favorite_social_network, 'minNetwork' => $minfavoriteSocial[0]->favorite_social_network, 'count' => $count, 'socialNetwork'=> $range]);
          
    }
}
