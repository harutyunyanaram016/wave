@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('slide.create') }}"> Create New Slide</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table style="margin-top: 25px" class="table table-bordered">
        <tr>

            <th>Photo</th>
            <th>Text</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($item as $it)
            <tr>


                <td><img style="width: 200px" src="{{ asset($it->photo) }}" alt="" class="w3-round"/></td>
                <td>{{ $it->text }}</td>
                <td>
                    <form action="{{ route('slide.destroy',$it->id) }}" method="POST">



                        <a class="btn btn-primary" href="{{ route('slide.edit',$it->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>



@endsection
