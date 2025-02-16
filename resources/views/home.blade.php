@extends('layouts.app')

@section('content')
<div id="form1">
  <dynamic-form-component :initial-data='{!! json_encode($data) !!}'></dynamic-form-component>
</div>
@endsection