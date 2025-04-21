@extends('layouts.layout')

@section('title', 'РИстория реализации продукции')

@section('content')
    <a class="btn" href="{{ route('partners.index') }}">Назад</a>

    <div>
        <h2>История реализации продукции {{$partner->partnerType->name}} "{{$partner->name}}"</h2>
        @foreach($partner_products as $partner_product)
            <div class="flex">
                <div class="div70">Дата {{$partner_product->date}}</div>
                <div class="div70">Количество {{$partner_product->quantity}}</div>
                <div class="div70">Название товара {{$partner_product->product->name}}</div>
            </div>
        @endforeach
    </div>

@endsection
