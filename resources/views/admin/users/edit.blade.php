@extends('layouts.admin')



@section('title') Edit User @endsection











@section('content')

    <h1>Edit user</h1>



    <div class="row justify-content-center">



        <div class="col-sm-9">

            {!! Form::model($user, ['method'=>'PATCH','action' => ['Admin\AdminUsersController@update', $user->id]]) !!}

            <div class="form-group">

                {!! Form::label('email', 'Email *') !!}

                {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('email'))

                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>

                @endif

            </div>



            <div class="form-group">

                {!! Form::label('role_id', 'Role *') !!}

                {!! Form::select('role_id', array(''=>'Choose Option') + $roles, null,  ['class' => $errors->has('role_id') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('role_id'))

                    <div class="invalid-feedback">{{ $errors->first('role_id') }}</div>

                @endif

            </div>



            <div class="form-group">

                {!! Form::label('password', 'Password') !!}

                {!! Form::password('password', ['class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('password'))

                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>

                @endif

            </div>



            <div class= "form-group" >

                {!! Form::label('name', 'Name') !!}

                {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('name'))

                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>

                @endif

            </div>




            <div class="form-group">

                {!! Form::label('surname', 'Surname') !!}

                {!! Form::text('surname', null, ['class' => $errors->has('surname') ? 'form-control is-invalid' : 'form-control']) !!}
                @if ($errors->has('surname'))

                    <div class="invalid-feedback">{{ $errors->first('surname') }}</div>

                @endif

            </div>



            <div class="form-group">

                {!! Form::label('phone', 'Phone') !!}

                {!! Form::text('phone', null, ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control']) !!}
                @if ($errors->has('phone'))

                    <div class="invalid-feedback">{{ $errors->first('phone') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('real_adress', 'Legal address') !!}

                {!! Form::text('real_adress', null, ['class' => $errors->has('real_adress') ? 'form-control is-invalid' : 'form-control']) !!}
                @if ($errors->has('real_adress'))

                    <div class="invalid-feedback">{{ $errors->first('real_adress') }}</div>

                @endif

            </div>


            <div class="form-group">

                {!! Form::label('tax_number', 'Tax Number') !!}

                {!! Form::text('tax_number', null, ['class' => $errors->has('tax_number') ? 'form-control is-invalid' : 'form-control']) !!}
                @if ($errors->has('tax_number'))

                    <div class="invalid-feedback">{{ $errors->first('tax_number') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('company', 'Company') !!}

                {!! Form::text('company', null, ['class' => $errors->has('company') ? 'form-control is-invalid' : 'form-control']) !!}
                @if ($errors->has('company'))

                    <div class="invalid-feedback">{{ $errors->first('company') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('status', 'Status ') !!}

                <input type="checkbox" id="status" name="status" value="1"  @if($user->status == 1) checked @endif>

                @if ($errors->has('status'))

                    <div class="invalid-feedback">{{ $errors->first('status') }}</div>

                @endif

            </div>


            <div class="form-group">

                {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-12']) !!}

            </div>



            {!! Form::close() !!}













            {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminUsersController@destroy', $user->id]]) !!}

            <div class="form-group">

                {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-12']) !!}

            </div>

            {!! Form::close() !!}

        </div>

    </div>



@endsection
