@extends('layouts.app')

@section('content')
<?php
$data = [
  "a" => 3,
  "b" => 2,
];
?>
<div id="form1">
  <dynamic-form-component :initial-data='{!! json_encode($data) !!}'></dynamic-form-component>
</div>
@endsection