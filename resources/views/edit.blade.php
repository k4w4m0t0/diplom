@extends('layouts.app')

@section('title')
  Редактировать абитурента
@endsection

@section('content')
{{-- @dd($cpec_list) --}}
<div class="col-12 mt-4">
    <form class="row g-3" action="{{ route('abi_update', ['abiturient' => $abiturient]) }}" method="POST">
      @csrf
      @method('put')
      <div class="col-md-4">
        <label for="lastName" class="form-label">Фамилия</label>
        <input type="text" class="form-control" id="lastName" name="lastName" value="{{$abiturient->last_name}}" required>
      </div>
      <div class="col-md-4">
        <label for="firstName" class="form-label">Имя</label>
        <input type="text" class="form-control" id="firstName" name="firstName" value="{{$abiturient->first_name}}" required>
      </div>
      <div class="col-md-4">
        <label for="middleName" class="form-label">Отчество</label>
        <input type="text" class="form-control" id="middleName" name="middleName" value="{{$abiturient->middle_name}}" required>
      </div>
      <div class="col-md-2">
        <label for="seria" class="form-label">Паспорт серия</label>
        <input type="text" class="form-control" id="seria" name="seria" value="{{$abiturient->seria}}" required>
      </div>
      <div class="col-md-2">
        <label for="nomer" class="form-label">Паспорт номер</label>
        <input type="text" class="form-control" id="nomer" name="nomer" value="{{$abiturient->nomer}}" required>
      </div>
      <div class="col-md-8">
        <label for="passport" class="form-label">Место выдачи</label>
        <input type="text" class="form-control" id="passport" name="passport" value="{{$abiturient->passport}}" required>
      </div>
      <div class="col-md-8">
        <label for="address" class="form-label">Прописка</label>
        <input type="text" class="form-control" id="address" name="address" value="{{$abiturient->address}}" required>
      </div>
      <div class="col-md-4">
        <label for="citizenship" class="form-label">Гражданство</label>
        <input type="text" class="form-control" id="citizenship" name="citizenship" value="{{$abiturient->citizenship}}" required>
      </div>
      <div class="col-md-4">
        <label for="snils" class="form-label">Снилс</label>
        <input type="text" class="form-control" id="snils" name="snils" value="{{$abiturient->snils}}">
      </div>
      <div class="col-md-4">
        <label for="telephone" class="form-label">Номер телефона</label>
        <input type="text" class="form-control" id="telephone" name="telephone" value="{{$abiturient->telephone}}" required>
      </div>
      <div class="col-md-4">
        <label for="inn" class="form-label">Инн</label>
        <input type="text" class="form-control" id="inn" name="inn" value="{{$abiturient->inn}}">
      </div>
      <div class="col-md-4">
        {{-- @dd($abiturient) --}}
        <label for="specialities" class="form-label">Специальность</label>
        <select class="form-select" id="specialities" name="specialities" required>
          <option selected>Выбирите специальность</option>
          @foreach ($cpec_list as $cpec_item)
            <option @if($abiturient->specialities_id == $cpec_item->id) @selected(true) @endif value="{{$cpec_item->id}}">{{$cpec_item->title}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Применить</button>
      </div>
    </form>
</div>
@endsection