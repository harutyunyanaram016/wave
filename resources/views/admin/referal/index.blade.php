@extends('layouts.admin')



@section('title') Users Referral Settings @endsection

@section('content')


    {!! Form::model($model, ['method'=>'POST']) !!}

    <div class= "form-group" >

        {!! Form::label('partner_prsent', 'Partner Prsent *') !!}

        {!! Form::number('partner_prsent', null, ['class' => $errors->has('partner_prsent') ? 'form-control is-invalid' : 'form-control']) !!}

        @if ($errors->has('partner_prsent'))

            <div class="invalid-feedback">{{ $errors->first('partner_prsent') }}</div>

        @endif

    </div>
    <div class= "form-group" >

        {!! Form::label('order_prsent', 'Order Prsent *') !!}

        {!! Form::number('order_prsent', null,  ['class' => $errors->has('order_prsent') ? 'form-control is-invalid' : 'form-control']) !!}

        @if ($errors->has('order_prsent'))

            <div class="invalid-feedback">{{ $errors->first('order_prsent') }}</div>

        @endif

    </div>
    <div class= "form-group" >

        {!! Form::label('status', 'Status ') !!}

        <input type="checkbox" id="status" name="status" value="1"  @if($model->status == 1) checked @endif>

        @if ($errors->has('status'))

            <div class="invalid-feedback">{{ $errors->first('status') }}</div>

        @endif

    </div>
    <div class="form-group">

        {!! Form::submit('Update Product', ['class'=>'btn btn-primary btn-block']) !!}

    </div>

    {!! Form::close() !!}



@endsection





