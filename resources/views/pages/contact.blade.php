@extends('layouts.app') @section('title', '| Contact') @section('content')

@section('stylesheets')

{!! Html::style('css/contact.css') !!}

@endsection
<div class="flex-container">
    <form class="form" action="{{ url('contact') }}" method="post">
        {{ csrf_field() }}
        <h1 class="title has-text-centered is-uppercase has-text-weight-normal m-t-20"> Contact Me! </h1>
        <div class="columns is-multiline is-mobile is-centered">
            <div class="column is-full">
                <div class="control">
                    <label name="username" class="label title is-5 m-t-15 has-text-weight-normal">Username:</label>
                    <input id="username" name="username" class="input is-primary is-medium" placeholder="Username" value="" />
                </div>
            </div>
            <div class="column is-full">
                <div class="control">
                    <label name="email" class="label title is-5 has-text-weight-normal">Email:</label>
                    <input id="email" name="email" class="input is-primary is-medium" placeholder="E-mail" value="" />
                </div>
            </div>
            <div class="column is-full">
                <div class="control">
                    <label name="subject" class="label title is-5 has-text-weight-normal">Subject:</label>
                    <input id="subject" name="subject" class="input is-primary is-medium" placeholder="Subject" value="" />
                </div>
            </div>
            <div class="column is-full">
                <div class="control">
                    <label name="message" class="label title is-5 has-text-weight-normal">Message:</label>
                    <textarea id="bodyMessage" class="textarea is-primary is-medium" placeholder="Your Message Goes here..."></textarea>
                </div>
            </div>
            <div class="column is-full">
                <div class="control">
                    <input type="submit" name="Submit" class="button is-success is-rounded is-medium" value="Send The Message!" />
                </div>
            </div>
        </div>
    </form>
</div>
@endsection