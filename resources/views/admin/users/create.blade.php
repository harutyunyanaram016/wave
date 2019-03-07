@extends('layouts.admin')



@section('title') Create User @endsection









@section('content')



    <div class="row justify-content-center">

        <div class="col-lg-6 mt-4">



            <h1>Create user</h1>



            {!! Form::open(['action' => 'Admin\AdminUsersController@store']) !!}





            <div class="form-group">

                {!! Form::label('email', 'Email *') !!}

                {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('email'))

                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>

                @endif

            </div>



            <div class="form-group">

                {!! Form::label('role_id', 'Role *') !!}

                {!! Form::select('role_id', array(''=>'Choose Option') + $roles, 1,  ['class' => $errors->has('role_id') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('role_id'))

                    <div class="invalid-feedback">{{ $errors->first('role_id') }}</div>

                @endif

            </div>



            <div class="form-group">

                {!! Form::label('password', 'Password *') !!}

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

                {!! Form::text('surname', null, ['class' => 'form-control']) !!}

            </div>



            <div class="form-group">

                {!! Form::label('phone', 'Phone') !!}

                {!! Form::text('phone', null, ['class' => 'form-control']) !!}

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
            <div class="form-group">

                {!! Form::label('banking_number', 'Banking Number') !!}

                {!! Form::text('banking_number', null, ['class' => $errors->has('banking_number') ? 'form-control is-invalid' : 'form-control']) !!}
                @if ($errors->has('banking_number'))

                    <div class="invalid-feedback">{{ $errors->first('banking_number') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('status', 'Status ') !!}

                <input type="checkbox" id="status" name="status" value="1" >

                @if ($errors->has('status'))

                    <div class="invalid-feedback">{{ $errors->first('status') }}</div>

                @endif

            </div>




            <div class="form-group">

                {!! Form::token() !!}

                {!! Form::submit('Create User', ['class'=>'btn brn-primary btn-block']) !!}

            </div>





            {!! Form::close() !!}



        </div>

    </div>



@endsection



