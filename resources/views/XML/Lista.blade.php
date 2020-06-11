@extends('layout')
@section('content')

    <div class="container">
        <div class="row justify-content-md-center">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">to</th>
                    <th scope="col">from</th>
                    <th scope="col">heading</th>
                    <th scope="col">body</th>
                </tr>
                </thead>  
                <tbody>
                <tr>
                    <th>{{$datos['to']}}</th>
                    <td>{{$datos['from']}}</td>
                    <td>{{$datos['heading']}}</td>
                    <td>{{$datos['body']}}</td>
                </tr>
            </tbody> 
            </table> 
        </div>
        
        <form action="./" method="POST">
            {{ csrf_field()}}
            <a href="{{route('guarda')}}" type="button" class="btn btn-primary">guardar</a>
            
        </form>
    </div>

@endsection