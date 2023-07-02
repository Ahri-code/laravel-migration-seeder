@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                @foreach ($train as $element)
                    <div>
                        {{$element->company}}
                        {{$element->departure_station}}
                        {{$element->arrival_station}}
                        {{$element->departure_time}}
                        {{$element->arrival_time}}
                        {{$element->train_codes}}
                        {{$element->train_wagon}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection