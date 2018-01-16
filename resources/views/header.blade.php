@extends('layouts.master')

@section('title')
  HTTP Headers
@endsection

@push('header')

  <div class="row header-content">
    <div class="twelve columns">
      <h1>HTTP Headers</h1>
    </div>
  </div>

@endpush

@section('content')

<?php
  foreach (getallheaders() as $name => $value) {
    echo "<b>$name:</b>   $value<br>";
  }
?>

@endsection
