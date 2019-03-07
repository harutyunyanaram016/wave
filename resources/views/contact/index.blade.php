@extends('layouts.app')

@section('admin_content')
<a href="{{ route('rem_contacts') }}"><h5>Հիշված հաղորդագրություններ</h5></a>
<br>
@if(count($contacts) > 0)
    <table class="table table-striped">
        <tr>
            <!-- <th>No</th> -->
            <th>Անուն, Ազգանուն</th>
            <th>Էլ․ հասցե</th>
            <th>Հաղորդագրություն</th>
            <th>Ամսաթիվ</th>
            <th>Հիշել</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->message }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>
                  <input type="checkbox" class="rem" name="rem" data-id="{{ $contact->id }}" value="{{ $contact->rem }}"/>
                </td>
                <td><a href="{{ action('ContactController@show', $contact->id) }}" class="btn btn-default">Տեսնել</a></td>
                <td>
                    {!!Form::open(['action' => ['ContactController@destroy', $contact->id], 'method' => 'POST', 'class' => 'pull-right', 'onclick'=>'return confirm("Դուք համոզվա՞ծ եք։")'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Ջնջել', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </td>
            </tr>
        @endforeach
    </table>
@else
 <p>Ոչ մի հաղորդագրություն</p>
@endif
@endsection
