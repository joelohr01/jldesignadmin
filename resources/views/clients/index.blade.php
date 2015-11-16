@extends('layouts.dashboard')


@section('content')

        <!-- BEGIN PAGE TITLE-->
<h3 class="page-title">Clients</h3>

<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="note note-info">
    <p> Area to view and edit clients</p>

    <a href="/clients/new">New Client</a>
</div>
    <ul id="blah">
        @foreach($clients as $client)
            <li>{{ $client->client_name }}</li>
        @endforeach
    </ul>
</div>
<!-- END CONTENT BODY -->

@stop('content')