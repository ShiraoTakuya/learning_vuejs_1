@extends('layouts.app')

@section('content')
<div id="form1">
  <dynamic-form-component 
    form_route="{{ route('debug_old') }}" 
    :initial-data='@json($data)' 
    :old='@json(session()->getOldInput())'
    :errors='@json($errors->messages())'
  ></dynamic-form-component>
</div>
@endsection