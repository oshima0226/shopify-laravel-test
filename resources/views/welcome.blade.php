@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
{{--    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>--}}
    <input type="hidden" id="apiKey" value="{{ config('shopify-app.api_key') }}">
    <input type="hidden" id="host" value="{{Request::get('host')}}">

    <div id="app"></div>
    <script src="{{mix('js/app.js')}}"></script>

@endsection

@section('scripts')
    @parent

    @env('local')
      <script src="http://localhost:35729/livereload.js"></script>
    @endenv
    
    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection