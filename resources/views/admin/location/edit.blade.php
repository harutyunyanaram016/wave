@extends('layouts.admin')@section('title') Edit Country @endsection{{--@section('breadcrumbs', Breadcrumbs::render('admin.dashboard.products.edit', $product))--}}@section('content')    <h1>Edit country</h1>    <div class="row justify-content-center">        <div class="col-lg-8">            <div class="row">                <div class="col-lg-8">                    {!! Form::model($country, ['method'=>'post','action' => ['Admin\AdminLocationController@update', $country->id], ]) !!}                    <div class= "form-group" >                        {!! Form::label('price', 'Price *') !!}                        {!! Form::text('brand', null, ['class' => $errors->has('price') ? 'form-control is-invalid' : 'form-control']) !!}                        @if ($errors->has('price'))                            {{--{{ dd($errors->all()) }}--}}                            <div class="invalid-feedback">{{ $errors->first('price') }}</div>                        @endif                    </div>                    <div class= "form-group" >                        {!! Form::label('active', 'Status *') !!}                        {!! Form::radio('active', null, ['class' => $errors->has('active') ? 'form-control is-invalid' : 'form-control']) !!}                        @if ($errors->has('active'))                            {{--{{ dd($errors->all()) }}--}}                            <div class="invalid-feedback">{{ $errors->first('active') }}</div>                        @endif                    </div>                    <div class="form-group">                    </div>                    <div class="form-group">                        {!! Form::submit('Update Country', ['class'=>'btn btn-primary btn-block']) !!}                    </div>                    {!! Form::close() !!}                    {!! Form::close() !!}                </div>            </div>        </div>    </div>@endsection@section('modal')    {{--<script>--}}        {{--/**--}}         {{--* Created by idgu on 10.12.2017.--}}         {{--*/--}}        {{--function getSubcategories(categoryValue) {--}}            {{--const subcategoriesSelect = document.querySelector('#my-subcategory');--}}            {{--var xhr = new XMLHttpRequest();--}}            {{--if (categoryValue !== '') {--}}                {{--xhr.open('GET',  '{{ route('getSubcategories', null) }}' +'/' + categoryValue, true);--}}                {{--xhr.onload = function() {--}}                    {{--if (this.status == 200) {--}}                        {{--subcategories = JSON.parse(this.responseText);--}}                        {{--display = '<option value="" selected="selected">Choose Option</option>';--}}                        {{--subcategories.forEach(function(subcategory) {--}}                            {{--display += '<option value="'+ subcategory.id +'">' + subcategory.name +'</option>';--}}                        {{--});--}}                        {{--subcategoriesSelect.innerHTML = display;--}}                        {{--if(window.first) {--}}                            {{--let subcategoriesSelect = document.querySelector('#my-subcategory');--}}                            {{--let options  = subcategoriesSelect.options;--}}                            {{--for(var i=0, len = options.length; i < len; i++) {--}}                                {{--if(options[i].value == {{ $product->subcategory_id }}) {--}}                                    {{--options[i].selected = 'selected';--}}                                {{--}--}}                            {{--}--}}                            {{--window.first = false;--}}                        {{--}--}}                    {{--}--}}                {{--}--}}                {{--xhr.send();--}}            {{--} else {--}}                {{--subcategoriesSelect.innerHTML = '<option value="" selected="selected">Choose Option</option>';--}}            {{--}--}}        {{--}--}}        {{--document.addEventListener('DOMContentLoaded', function () {--}}            {{--const category = document.querySelector('#my-category');--}}            {{--window.first = true;--}}            {{--getSubcategories(category.value);--}}            {{--category.addEventListener('change', function () {--}}                {{--getSubcategories(category.value);--}}            {{--})--}}        {{--});--}}    {{--</script>--}}@endsection