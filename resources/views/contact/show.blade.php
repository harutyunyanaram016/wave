@extends('layouts.app')

@section('content')
    <!-- <a href="/posts" class="btn btn-default">Go Back</a> -->
    <div class="container">
      <h5>Անուն։ {{ $contact->name }}</h5>
      <h5>Էլ․ հասցե։ {{ $contact->email }}</h5>
      <h5>Ամսաթիվ։ {{ $contact->created_at }}</h5>
      <br>
      <p>Հաղորդագրություն։ {{ $contact->message }}</p>
      <hr>
      <div class="">
        <p>Հիշել   <input type="checkbox" class="rem" name="rem" data-id="{{ $contact->id }}" value="{{ $contact->rem }}"/></p>
      </div>


    <div class="row">
      @if(!Auth::guest())
        {!!Form::open(['action' => ['ContactController@destroy', $contact->id], 'method' => 'POST', 'class' => 'pull-right', 'onclick'=>'return confirm("Դուք համոզվա՞ծ եք։")'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Ջնջել', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
      @endif
    </div>
  </div>
@endsection
