@extends('layouts.layout')

@section('title', 'Создание партнера')

@section('content')
    <a class="btn" href="{{ route('partners.index') }}">Назад</a>

    <form action="{{ route('partners.store') }}" method="post" enctype="application/x-www-form-urlencoded">
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
                    <option value="{{ $type->id }}"> {{ $type->name }}</option>
                @endforeach
            </select>
            @error('partner_type_id')
                <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="name">Название организации: </label>
            <input type="text" id="name" name="name" placeholder="Введите название организации" required>
            @error('name')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="director">Директор организации: </label>
            <input type="text" id="director" name="director" placeholder="Введите ФИО директора организации" required>
            @error('director')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">Email организации: </label>
            <input type="email" id="email" name="email" placeholder="Введите Email организации" required>
            @error('email')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="phone">Телефон организации: </label>
            <input type="tel" id="phone" name="phone" placeholder="Введите телефон организации" required>
            @error('phone')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="address">Адрес организации: </label>
            <input type="text" id="address" name="address" placeholder="Введите адрес организации" required>
            @error('address')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="inn">ИНН организации: </label>
            <input type="number" id="inn" name="inn" placeholder="Введите ИНН организации" required>
            @error('inn')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="rating">Рейтинг организации: </label>
            <input type="number" id="rating" name="rating" min="1" max="10" placeholder="Введите рейтинг организации от 1 до 10" required>
            @error('rating')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <button class="btn" type="submit">Создать партнера</button>
        </div>
    </form>
@endsection
