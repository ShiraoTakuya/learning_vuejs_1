@extends('layouts.app')

@section('content')
<div id="page1">
  <page-component 
    form-route="{{ route('debug_old') }}" 
    :initial-data='@json($data)' 
    :old='@json(session()->getOldInput())'
    :errors='@json($errors->messages())'
  ></page-component>
</div>
@endsection