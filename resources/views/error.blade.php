@extends('app')
@section('title', 'Account Verification Failed')
@section('content')

<div id="login" class="register-page division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="register-page-form wow animate__animated animate__fadeInUp">
                    <div class="register-form-title">
                        <h1 class="h1-title">Account Verification Failed</h1>
                    </div>
                    <p>Unfortunately, we could not verify your account. Please try again or contact support.</p>

                    @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        <span class="icon"><i class="far fa-check-circle"></i></span> {{ session()->get('success') }}<br>
                    </div>
                    @endif
                    @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)
                        <span class="icon"><i class="far fa-times-circle"></i></span> {{ $error }}<br>
                        @endforeach
                    </div>
                    @endif
                    <a href="{{ url('/') }}">Go Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
</script>
@endpush