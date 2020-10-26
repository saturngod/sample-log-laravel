@extends('layouts.admin')
@section('header')
    
@endsection
@section('page-title')
    <h1>Log Server</h1>
@endsection
@section('page-content')
<x-card title='Logs'>
<form action="{{route('home.search')}}" action="post">
    @csrf
    <div class="row mb-1">
        <div class="col-3">
            <label class="form-label">Datepicker</label>
            <input name="from_date" id="calendar-simple" type="date" value="{{$from_date}}" class="form-control mb-2" placeholder="Select a date" />
            <div class="input-icon">
              <input name="to_date" id="calendar-time" type="date" value="{{$to_date}}" class="form-control" placeholder="Select a date" />
            </div>
        </div>
          <div class="col-3">
            <label class="form-label">Channel</label>
            <input type="text" name="channel" class="form-control mb-2" placeholder="" value="{{$channel}}" />
          </div>
          <div class="col-3">
            <label class="form-label">Type</label>
            <input type="text" name="type" class="form-control mb-2" placeholder="" value="{{$type}}" />
          </div>
          <div class="col-3">
            <label class="form-label">Text</label>
            <input type="text" name="text" class="form-control mb-2" placeholder="" value="{{$text}}" />
          </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <input type="submit" class="btn btn-primary w-100" value="Search">
        </div>
    </div>
</form>
    <div class="row">
    <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>Date Time</th>
            <th>Channel</th>
            <th>Type</th>
            <th>Text</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>{{$log->created_at}}</td>
                <td>{{$log->channel}}</td>
                <td>{{$log->type}}</td>
                <td>{{$log->text}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    <div class="row">
      {{ $logs->links() }}
    </div>

</x-card>

@endsection