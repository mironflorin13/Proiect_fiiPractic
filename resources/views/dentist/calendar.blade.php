
@extends('layouts.dentist')
@section('content')


    <div class="card-body">
        <link rel='stylesheet'
            href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>

        <div id='calendar'></div>
ss

    </div>
@endsection

@section('scripts')


    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function () {
          
          $('#calendar').fullCalendar({
          })
        });
      </script>
@stop