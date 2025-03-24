<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PartnerProduct;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index() {
        $partners = Partner::all();

        foreach ($partners as $partner) {
            $total = PartnerProduct::where('partner_id', $partner->id)->sum('quantity');

            $partner->duscount = 0;
            if ($total >= 10000 && $total <= 50000) {
                $partner->duscount = 5;
            } elseif ($total >= 50000 && $total < 300000) {
                $partner->duscount = 10;
            } elseif ($total >= 300000) {
                $partner->duscount = 15;
            }

        }

        return view('partners.index', compact('partners'));
    }
}
