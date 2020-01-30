
@extends('pages.messages._partials.master')


@section('header')
	@include('pages.profiles._partials.header')<!--header end-->
@stop


@section('user-message')

	@include('pages.messages._partials.user-message',['users' => $users, 'unread' => $unread])

@stop

@section('conversation')

	@include('pages.messages._partials.conversation')

@stop