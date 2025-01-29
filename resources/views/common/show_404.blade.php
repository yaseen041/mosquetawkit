@extends('app')
@section('title', 'Page Not Found')
@section('content')

<div id="notfound">
    <div className="notfound">
        <div className="notfound-404">
            <h1>404</h1>
        </div>
        <h2>Page Not Found</h2>
        <p> The page you are looking for might have been removed had its name changed or is temporarily unavailable.
            <a {{ url('/') }}>Return Back</a>
        </p>
    </div>
</div>

@endsection
@push('scripts')
<script>
</script>
@endpush