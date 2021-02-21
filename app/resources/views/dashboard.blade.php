
@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="card-body">                     
        @if (session('status'))                         
            <div class="alert alert-success" role="alert">
                {{ session('status') }} 
            </div>                         
        @endif                      
        {{ __('You are logged in!') }}                 
    </div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
