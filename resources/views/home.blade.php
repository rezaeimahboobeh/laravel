@extends('layouts.app')

@section('content')
<div class="container text-right" >
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">کاربر عزیز</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<h1><a href="{{action('profile@profile')}}">به پروفایل خود وارد شوید</a></h1>
                  به بنیاد سعدی خوش آمدید
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
