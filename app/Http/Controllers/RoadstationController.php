<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RoadStation;
use App\Models\SpecialGoods;
use App\Models\Area;

class RoadstationController extends Controller
{
    public function stationMainView(Request $request)
    {
        // $name = RoadStation::where('id', $request->id)->get();
        $name = RoadStation::where('id', $request->id)->get();

        $goods = SpecialGoods::where('road_station_id', $request->id)->get();
        // $goods = SpecialGoods::all();

        $pro = ProductType::where('station_list', $request->id)->get();
        // $pro = ProductType::all();

        // $act = Activity::where('road_station_id', $request->id)->get();
        $act = Activity::where('road_station_id', $request->id)->get();


        $data = [
            'road_stations' => $name,
            'activities' => $act,
            'special_goods' => $goods,
            'product_types' => $pro,
        ];

        // return view('fronts.station_detail', $data, $outName);
        return view('fronts.station_detail', $data);
    }
    public function stationListView(Request $request)
    {
        $items = RoadStation::get();
        $data = [
            'road_stations' => $items,
        ];
        return view('fronts.station_list', $data);
    }

    public function stationAreaSearch(Request $request)
    {
        $area_id = 1;
        if (isset($request->area_id)) {
            $area_id = $request->area_id;
        }
        $items = RoadStation::where('area_id', $area_id)
            ->where('is_show', 1)
            ->where('deleted_at', null)
            ->orderby('ruby', 'DESC')
            ->paginate(6);

        // $area = Area::where('id', $area_id)->get();
        $area = Area::find($area_id);

        $count  = RoadStation::where('area_id', $area_id)
            ->where('is_show', 1)
            ->where('deleted_at', null)
            ->count();

        $data = [
            // 'road_stations' => $name,
            // 'activities' => $act,
            // 'special_goods' => $goods,
            // 'product_types' => $pro,
            'com' => $count,
            'area' => $area,
            'search' => $items,
        ];
        return view('fronts.station_area', $data);
    }

    public function stationDetailSearch(Request $request)
    {
        $area_id = '';
        $guide_icon = '';
        $shop_icon = '';
        $lightmeal_icon = '';
        $restaurant_icon = '';
        $experience_icon = '';
        $disability_icon = '';
        $park_icon = '';
        $bed_icon = '';
        $accommodation_icon = '';
        $spa_icon = '';
        $shower_icon = '';
        $observatory_icon = '';
        $ev_icon = '';
        $lan_icon = '';
        $atm_icon = '';
        $museum_icon = '';

        $count  = 0;

        if (isset($request->area)) {
            $area_id = $request->area;
        }

        if (isset($request->guide_icon)) {
            $guide_icon = $request->guide_icon;
        }
        if (isset($request->shop_icon)) {
            $shop_icon = $request->shop_icon;
        }
        if (isset($request->lightmeal_icon)) {
            $lightmeal_icon = $request->lightmeal_icon;
        }
        if (isset($request->restaurant_icon)) {
            $restaurant_icon = $request->restaurant_icon;
        }
        if (isset($request->experience_icon)) {
            $experience_icon = $request->experience_icon;
        }
        if (isset($request->disability_icon)) {
            $disability_icon = $request->disability_icon;
        }
        if (isset($request->park_icon)) {
            $park_icon = $request->park_icon;
        }
        if (isset($request->bed_icon)) {
            $bed_icon = $request->bed_icon;
        }
        if (isset($request->accommodation_icon)) {
            $accommodation_icon = $request->accommodation_icon;
        }
        if (isset($request->spa_icon)) {
            $spa_icon = $request->spa_icon;
        }
        if (isset($request->shower_icon)) {
            $shower_icon = $request->shower_icon;
        }
        if (isset($request->observatory_icon)) {
            $observatory_icon = $request->observatory_icon;
        }
        if (isset($request->ev_icon)) {
            $ev_icon = $request->ev_icon;
        }
        if (isset($request->lan_icon)) {
            $lan_icon = $request->lan_icon;
        }
        if (isset($request->atm_icon)) {
            $atm_icon = $request->atm_icon;
        }
        if (isset($request->museum_icon)) {
            $museum_icon = $request->museum_icon;
        }

        // $queryに自動的に中身が入る
        $where = '';
        if (!empty($area_id)) {
            $where .= ' (area_id in( ' . implode(',', $area_id) . '))';
        }
        if ($guide_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' guide_icon =' . $guide_icon;
        }
        if ($shop_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' shop_icon =' . $shop_icon;
        }
        if ($lightmeal_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' lightmeal_icon =' . $lightmeal_icon;
        }
        if ($restaurant_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' restaurant_icon =' . $restaurant_icon;
        }
        if ($experience_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' experience_icon =' . $experience_icon;
        }
        if ($disability_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' disability_icon =' . $disability_icon;
        }
        if ($park_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' park_icon =' . $park_icon;
        }
        if ($bed_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' bed_icon =' . $bed_icon;
        }
        if ($accommodation_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' accommodation_icon =' . $accommodation_icon;
        }
        if ($spa_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' spa_icon =' . $spa_icon;
        }
        if ($shower_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' shower_icon =' . $shower_icon;
        }
        if ($observatory_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' observatory_icon =' . $observatory_icon;
        }
        if ($ev_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' ev_icon =' . $ev_icon;
        }
        if ($lan_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' lan_icon =' . $lan_icon;
        }
        if ($atm_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' atm_icon =' . $atm_icon;
        }
        if ($lightmeal_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' lightmeal_icon =' . $lightmeal_icon;
        }
        if ($museum_icon != '') {
            if ($where != '') {
                $where .= ' AND ';
            }
            $where .= ' museum_icon =' . $museum_icon;
        }

        if (
            $area_id == '' && $guide_icon == ''
            && $shop_icon == '' && $lightmeal_icon == ''
            && $restaurant_icon == '' && $experience_icon == ''
            && $disability_icon == '' && $park_icon == ''
            && $bed_icon == '' && $accommodation_icon == ''
            && $spa_icon == '' && $shower_icon == ''
            && $observatory_icon == '' && $ev_icon == ''
            && $lan_icon == '' && $atm_icon == ''
            && $museum_icon == ''
        ) {
            $items = RoadStation::where('is_show', 1)
                ->where('deleted_at', null)
                ->orderby('ruby', 'DESC')
                ->paginate(6);
            $count  = RoadStation::where('is_show', 1)
                ->where('deleted_at', null)
                ->count();
        } else {
            $items = RoadStation::whereRaw($where)
                ->where('is_show', 1)
                ->where('deleted_at', null)
                ->orderby('ruby', 'DESC')
                ->paginate(6);
            $count  = RoadStation::whereRaw($where)
                ->where('is_show', 1)
                ->where('deleted_at', null)
                ->orderby('ruby', 'DESC')
                ->count();
        }

        $data = [
            'count' => $count,
            'search' => $items,
            'area_id' => $area_id,
            'guide_icon' => $guide_icon,
            'shop_icon' => $shop_icon,
            'lightmeal_icon' => $lightmeal_icon,
            'restaurant_icon' => $restaurant_icon,
            'experience_icon' => $experience_icon,
            'disability_icon' => $disability_icon,
            'park_icon' => $park_icon,
            'bed_icon' => $bed_icon,
            'accommodation_icon' => $accommodation_icon,
            'spa_icon' => $spa_icon,
            'shower_icon' => $shower_icon,
            'observatory_icon' => $observatory_icon,
            'ev_icon' => $ev_icon,
            'lan_icon' => $lan_icon,
            'atm_icon' => $atm_icon,
            'museum_icon' => $museum_icon,

        ];
        return view('fronts.station_search', $data);
    }
}
