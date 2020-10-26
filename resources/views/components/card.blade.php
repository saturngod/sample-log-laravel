<div class="card">
    <div class="card-body">
        @if ($title != '')
            <h3 class="card-title">{{$title}}</h3>    
        @endif
      {{$slot}}
    </div>
  </div>