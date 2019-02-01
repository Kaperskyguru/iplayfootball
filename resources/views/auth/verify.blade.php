@extends('layouts.app')

@section('title', 'Reset password')

@section('banner_display')
<div class="container  p-5 text-dark">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-12 bg-white p-5 mx-auto" style="margin-top: 6.5rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="card">
                <div class="card-header">
                    <div class="alert alert-success" role="alert">
                        {{ __('Congratulations! your account is registered, you will shortly receive an email to activate your account.') }}</div>
                    </div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
