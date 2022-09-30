@extends('layouts.app')

@section('title')
  Просмотр Абитуриента
@endsection


      @section('content')
        <div class="col-12 my-4 d-flex">
          <a href="{{route('abi_edit', ['abiturient' => $dataview])}}" class="btn btn-success me-3">Редактировать</a>
          <form action="{{ route('abi_delete', ['abiturient' => $dataview]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Удалить</button>
          </form>
          
        </div>
        <div class="col-12">
          {{-- @dd($dataview) --}}
          <h4>Регистарционный номер {{ $dataview->reg_number }}</h4>
          <form class="row g-3" action="" method="POST">
            <h4>Персональные данные абитуриента</h4>
            <div class="col-md-4">
              <label for="lastName" class="form-label">Фамилия</label>
              <input type="text" class="form-control" id="lastName" name="lastName" value="{{$dataview->last_name}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="firstName" class="form-label">Имя</label>
              <input type="text" class="form-control" id="firstName" name="firstName" value="{{$dataview->first_name}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="middleName" class="form-label">Отчество</label>
              <input type="text" class="form-control" id="middleName" name="middleName" value="{{$dataview->middle_name}}" disabled>
            </div>
            <div class="col-md-2">
              <label for="seria" class="form-label">Паспорт серия</label>
              <input type="text" class="form-control" id="seria" name="seria" value="{{$dataview->seria}}" disabled>
            </div>
            <div class="col-md-2">
              <label for="nomer" class="form-label">Паспорт номер</label>
              <input type="text" class="form-control" id="nomer" name="nomer" value="{{$dataview->nomer}}" disabled>
            </div>
            <div class="col-md-8">
              <label for="passport" class="form-label">Место выдачи</label>
              <input type="text" class="form-control" id="passport" name="passport" value="{{$dataview->passport}}" disabled>
            </div>
            <div class="col-md-8">
              <label for="address" class="form-label">Прописка</label>
              <input type="text" class="form-control" id="address" name="address" value="{{$dataview->address}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="citizenship" class="form-label">Гражданство</label>
              <input type="text" class="form-control" id="citizenship" name="citizenship" value="{{$dataview->citizenship}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="snils" class="form-label">Снилс</label>
              <input type="text" class="form-control" id="snils" name="snils" value="{{$dataview->snils}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="inn" class="form-label">Инн</label>
              <input type="text" class="form-control" id="inn" name="inn" value="{{$dataview->inn}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="telephone" class="form-label">Номер телефона</label>
              <input type="text" class="form-control" id="telephone" name="telephone" value="{{$dataview->telephone}}" disabled>
            </div>
            <h4>Сведения о документе об образовании</h4>
            <div class="col-md-4">
              <label for="date_sub" class="form-label">Документ об образовании</label>
              <input type="text" class="form-control" id="date_sub" name="date_sub" value="{{$dataview->document_type->name_document}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="series_doc" class="form-label">Серия</label>
              <input type="text" class="form-control" id="series_doc" name="series_doc" value="{{$dataview->series_doc}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="number_doc" class="form-label">Номер</label>
              <input type="text" class="form-control" id="number_doc" name="number_doc" value="{{$dataview->number_doc}}" disabled>
            </div>
            <h4>Сведения о поступлении</h4>
            <div class="col-md-4">
              <label for="date_sub" class="form-label">Специальность</label>
              <input type="text" class="form-control" id="date_sub" name="date_sub" value="{{$dataview->speciality->title}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="date_sub" class="form-label">Документ об образовании</label>
              <input type="text" class="form-control" id="date_sub" name="date_sub" value="{{$dataview->document_type->name_document}}" disabled>
            </div>
            {{-- <div class="col-md-4">
              <label for="reg_number" class="form-label">Регистрационный номер</label>
              <input type="text" class="form-control" id="reg_number" name="reg_number" value="{{$dataview->reg_number}}" disabled>
            </div> --}}
            <div class="col-md-4">
              <label for="home_status" class="form-label">Требуется ли общежитие</label>
              <input type="text" class="form-control" id="home_status" name="home_status" value="{{$dataview->home_status}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="date_of" class="form-label">дата подачи документов</label>
              <input type="date" class="form-control" id="date_of" name="date_of" value="{{$dataview->date_of}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="date_sub" class="form-label">Дата подачи заявления</label>
              <input type="date" class="form-control" id="date_sub" name="date_sub" value="{{$dataview->date_sub}}" disabled>
            </div>
          </form>
        </div>
      @endsection