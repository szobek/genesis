<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class WelcomeController extends Controller
{
    public function home_view()
    {
        $ads = Ad::select("title","short")->get()->toArray();
        $index = 0;
        foreach ($ads as $ad) {
            $adsarray[$index++] = ["title"=>$ad["title"],"description" => strip_tags($ad["short"])];
        }
        $components = [
            ['image' => asset('assets/images/components/ablak-247x278.jpg')],
            ['image' => asset('assets/images/components/Kep28-247x296.png')]
        ];

        $why_genesis = [];
        $images_for_why = [
            asset('assets/images/why-genesis/1756528022750.jpg'),
            asset('assets/images/why-genesis/1756528022772.jpg'),
            asset('assets/images/why-genesis/1756528022793.jpg'),
            asset('assets/images/why-genesis/1756528022837.jpg'),
            asset('assets/images/why-genesis/1756528022879.jpg'),
            asset('assets/images/why-genesis/1756528022898.jpg'),
            asset('assets/images/why-genesis/1756528022916.jpg'),
            asset('assets/images/why-genesis/1756528022956.jpg'),
            asset('assets/images/why-genesis/1756528022973.jpg'),
            asset('assets/images/why-genesis/1756528022990.jpg'),
            asset('assets/images/why-genesis/1756528023008.jpg'),
            asset('assets/images/why-genesis/1756528023025.jpg'),
            asset('assets/images/why-genesis/IMG_20250513_171941.jpg'),
            asset('assets/images/why-genesis/IMG_20250513_181441.jpg'),
            asset('assets/images/why-genesis/IMG_20250514_171435.jpg'),
            asset('assets/images/why-genesis/IMG_20250516_173747.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_140226.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_143509.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_154609.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_154642.jpg'),
            asset('assets/images/why-genesis/IMG_20250521_081229.jpg'),
            asset('assets/images/why-genesis/IMG_20250521_081249.jpg'),
            asset('assets/images/why-genesis/IMG_20250525_072435.jpg'),
            asset('assets/images/why-genesis/IMG_20250525_072724.jpg'),
            asset('assets/images/why-genesis/IMG_20250606_115025.jpg'),
            asset('assets/images/why-genesis/IMG_20250606_115138.jpg'),
            asset('assets/images/why-genesis/IMG_20250703_134210.jpg'),
            asset('assets/images/why-genesis/IMG_20250703_134344.jpg'),
            asset('assets/images/why-genesis/IMG_20250722_120213.jpg'),
            asset('assets/images/why-genesis/IMG_20250722_120356.jpg'),
            asset('assets/images/why-genesis/IMG_20250819_071514.jpg'),
            asset('assets/images/why-genesis/Polish_20250823_063638590.jpg'),
            asset('assets/images/why-genesis/Polish_20250823_064917439.jpg'),
        ];
        foreach ($images_for_why as $index => $val) {
            $why_genesis[$index] = ["image" => $val];
        }

        return view('pages/welcome', compact('adsarray','components','why_genesis'));
    }
}
