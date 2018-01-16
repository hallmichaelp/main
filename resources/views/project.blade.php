@extends('layouts.master')

@section('title')
  My Projects
@endsection

    @push('header')

      <div class="row header-content">
        <div class="twelve columns">
          <h1>My Projects</h1>
        </div>
      </div>

    @endpush

@section('content')

  <a hre="/headers"><h3>HTTP Headers</h3></a>
  <a href="https://a3.michaelpatrickhall.com"><h3>Password Generator</h3></a>
  <a href="https://a4.michaelpatrickhall.com"><h3>World Geography Quiz</h3></a>

@endsection
