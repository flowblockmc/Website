@extends('layouts.base')

@section('title', trans('messages.home'))

@section('app')
<div class="home-background mb-4 p-4" style="background: url('{{ setting('background') ? image_url(setting('background')) : 'https://via.placeholder.com/2000x500' }}') no-repeat center; background-size: cover">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center text-center text-white h-100">
                <div class="col-md-8">
                    <div class="status">
                        @if($server && $server->isOnline())
                            <a class="navbar-brand me-4" href="{{ route('home') }}">
                                @if(setting('logo'))
                                    <img src="{{ image_url(setting('logo')) }}" alt="Logo" width="200">
                                @else
                                    {{ site_name() }}
                                @endif
                            </a>
                        <hr>
                            {{ trans_choice('messages.server.online', $server->getOnlinePlayers()) }}
                        @else
                            {{ trans('messages.server.offline') }}
                        @endif
                    </div class="status">
                </div>
            </div>
        </div>
    </div>
@endsection
