<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PartnerProduct;
use App\Models\PartnerType;
use Illuminate\Http\Request;
use App\Http\Requests\PartnerRequest;

class PartnerController extends Controller
{
    public function index() {
        $partners = Partner::all();

        foreach ($partners as $partner) {
            $total = PartnerProduct::where('partner_id', $partner->id)->sum('quantity');

            // Подсчёт скидки у партнера
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

    public function create()
    {
        // Получаем список типов партнёров и отдаём его нашему представлению
        $types = PartnerType::all();
        return view('partners.create', compact('types'));
    }

    public function store(PartnerRequest $request) {
        $partner = Partner::create($request->validated());
        return redirect()->route('partners.index');
    }

    public function edit(Partner $partner) {
        // Получаем список типов партнёров и отдаём его нашему представлению
        $types = PartnerType::all();
        return view('partners.edit', compact('partner', 'types'));
    }

    public function update(PartnerRequest $request, Partner $partner) {
        $partner->update($request->validated());
        return redirect()->route('partners.index');
    }
}
