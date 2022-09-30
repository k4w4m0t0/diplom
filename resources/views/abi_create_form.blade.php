@extends('layouts.app')

@section('title')
  Добавление нового абитуриента
@endsection

@section('content')
{{-- @dd($cpec_list) --}}
<div class="col-12 mt-4">
    <form class="row g-3 " action="{{ route('abi_create') }}" method="POST">
      @csrf
      @method('put')
      <h4>Персональные данные абитуриента</h4>
      <div class="col-md-4">
        <label for="lastName" class="form-label">Фамилия</label>
        <input type="text" class="form-control" id="lastName" name="lastName" value="" required>
      </div>
      <div class="col-md-4">
        <label for="firstName" class="form-label">Имя</label>
        <input type="text" class="form-control" id="firstName" name="firstName" value="" required>
      </div>
      <div class="col-md-4">
        <label for="middleName" class="form-label">Отчество</label>
        <input type="text" class="form-control" id="middleName" name="middleName" value="" required>
      </div>
      <div class="col-md-2">
        <label for="seria" class="form-label">Паспорт серия</label>
        <input type="text" class="form-control" id="seria" name="seria" value="" required>
      </div>
      <div class="col-md-2">
        <label for="nomer" class="form-label">Паспорт номер</label>
        <input type="text" class="form-control" id="nomer" name="nomer" value="" required>
      </div>
      <div class="col-md-8">
        <label for="passport" class="form-label">Место выдачи</label>
        <input type="text" class="form-control" id="passport" name="passport" value="" required>
      </div>
      <div class="col-md-8">
        <label for="address" class="form-label">Прописка</label>
        <input type="text" class="form-control" id="address" name="address" value="" required>
      </div>
      <div class="col-md-4">
        <label for="citizenship" class="form-label">Гражданство</label>
        <input type="text" class="form-control" id="citizenship" name="citizenship" value="" required>
      </div>
      <div class="col-md-4">
        <label for="snils" class="form-label">Снилс</label>
        <input type="text" class="form-control" id="snils" name="snils" value="">
      </div>
      <div class="col-md-4">
        <label for="inn" class="form-label">Инн</label>
        <input type="text" class="form-control" id="inn" name="inn" value="">
      </div>
      <div class="col-md-4">
        <label for="telephone" class="form-label">Номер телефона</label>
        <input type="text" class="form-control" id="telephone" name="telephone" value="" required>
      </div>
      <h4>Сведения о документе об образовании</h4>
      <div class="col-md-4">
        {{-- @dd($abiturient) --}}
        <label for="documenttypes" class="form-label">Документ об образовании</label>
        <select class="form-select" id="documenttypes" name="documenttypes" required>
          <option selected>Выбирите вид документа</option>
          @foreach ($doc_list as $doc_item)
            <option value="{{$doc_item->id}}">{{$doc_item->name_document}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-4">
        <label for="series_doc" class="form-label">Серия</label>
        <input type="text" class="form-control" id="series_doc" name="series_doc" value="" required>
      </div>
      <div class="col-md-4">
        <label for="number_doc" class="form-label">Номер</label>
        <input type="text" class="form-control" id="number_doc" name="number_doc" value="" required>
      </div>
      {{-- <div class="col-md-4">
        <label for="reg_number" class="form-label">Регистрационный номер</label>
        <input type="text" class="form-control" id="reg_number" name="reg_number" value="">
      </div> --}}
      <h4>Сведения о поступлении</h4>
      <div class="col-md-4">
        <label for="home_status" class="form-label">Требуется ли общежитие</label>
        {{-- <input type="text" class="form-control" id="home_status" name="home_status" value="" required> --}}
        <select class="form-select" name="home_status">
          <option selected>Выберите вариант</option>
          <option value="1">Да</option>
          <option value="0">Нет</option>
        </select>
      </div>

      <div class="col-md-4">
        {{-- @dd($abiturient) --}}
        <label for="specialities" class="form-label">Специальность</label>
        <select class="form-select" id="specialities" name="specialities" required>
          <option selected>Выбирите специальность</option>
          @foreach ($cpec_list as $cpec_item)
            <option value="{{$cpec_item->id}}">{{$cpec_item->title}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-4">
        <label for="date_of" class="form-label">Дата подачи документов</label>
        {{-- @dd(Carbon\Carbon::now()->format('Y-m-d')) --}}
        <input type="date" class="form-control" id="date_of" name="date_of" value="{{Carbon\Carbon::now()->format('Y-m-d')}}">
      </div>
      <div class="col-md-4">
        <label for="date_sub" class="form-label">Дата подачи заявления</label>
        <input type="date" class="form-control" id="date_sub" name="date_sub" value="{{Carbon\Carbon::now()->format('Y-m-d')}}">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Создать</button>
      </div>
    </form>
</div>
@endsection