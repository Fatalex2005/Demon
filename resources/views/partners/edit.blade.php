@extends('layouts.layout')

@section('title', 'Редактирование партнера')

@section('content')
    <a class="btn" href="{{ route('partners.index') }}">Назад</a>

    <form action="{{ route('partners.update', $partner->id) }}" method="post" enctype="application/x-www-form-urlencoded">
        @csrf
        @if ($errors->any())
            <script>
                alert("Ошибка валидации!");
            </script>
        @endif
        <div>
            <label>Тип организации: </label>
            <select name="partner_type_id" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" @if($type->id === $partner->partnerType->id) selected @endif> {{ $type->name }}</option>
                @endforeach
            </select>
            @error('partner_type_id')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="name">Название организации: </label>
            <input type="text" id="name" name="name" value="{{$partner->name}}" placeholder="Введите название организации" required>
            @error('name')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="director">Директор организации: </label>
            <input type="text" id="director" name="director" value="{{$partner->director}}" placeholder="Введите ФИО директора организации" required>
            @error('director')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">Email организации: </label>
            <input type="email" id="email" name="email" value="{{$partner->email}}" placeholder="Введите Email организации" required>
            @error('email')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="phone">Телефон организации: </label>
            <input type="tel" id="phone" name="phone" value="{{$partner->phone}}" placeholder="Введите телефон организации" required>
            @error('phone')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="address">Адрес организации: </label>
            <input type="text" id="address" name="address" value="{{$partner->address}}" placeholder="Введите адрес организации" required>
            @error('address')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="inn">ИНН организации: </label>
            <input type="number" id="inn" name="inn" value="{{$partner->inn}}" placeholder="Введите ИНН организации" required>
            @error('inn')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="rating">Рейтинг организации: </label>
            <input type="number" id="rating" name="rating" value="{{$partner->rating}}" min="1" max="10" placeholder="Введите рейтинг организации от 1 до 10" required>
            @error('rating')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <button class="btn" type="submit">Отредактировать партнера</button>
        </div>
    </form>
@endsection
