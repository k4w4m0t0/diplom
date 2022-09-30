@extends('layouts.app')

@section('title')
  Список абитурентов
@endsection


@section('content')
@if (session('update_success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Абитуриент отредактирован успешно
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if (session('abi_create_success') === 1)
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Абитуриент успешно создан
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if (session('abi_create_success') === 0)
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Ошибка создания абитуриента
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if (session('delete_success') === 1)
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Абитуриент удален
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if (session('delete_success') === 0)
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Ошибка при удалении абитуриента
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<div class="row row-cols-2 row-cols-md-4 g-4">
  @if (count($main_data) > 0)
  
            @foreach ($main_data as $view)
            <div class="col">
              <div class="card m-auto p-3 text-center shadow-sm h-100">
                <div class="card-header">
                  <h5 class="card-title">{{ $view->reg_number }}</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">{{$view->last_name}} {{$view->first_name}} {{$view->middle_name}}</p>
                  {{-- @dd($view->speciality->id) --}}
                  <p class="card-text">{{$view->speciality->title}}</p>
                  <p class="card-text">{{$view->document_type->name_document}}</p>
                </div>
                <div class="card-footer">
                  <a href="{{route('abi_index', ['abiturient' => $view->id])}}" class="btn btn-primary m-1 w-100">Просмотр</a>
                  <a href="{{route('abi_edit', ['abiturient'=> $view]) }}" class="btn btn-danger m-1 w-100">Редактирование</a>
                </div>
              </div>
            </div>
            @endforeach
  @endif

</div>
@endsection
         