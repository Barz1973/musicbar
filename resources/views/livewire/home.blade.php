<div>
    <div class="container">
        <h1>HOMEPAGE</h1>
        @if (session('message'))
        <div class="alert bg-success text-white text-center">
            <h6>{{ session('message') }}</h6>
        </div>
        @endif
        @if (session('error'))
        <div class="alert bg-danger text-white text-center">
            <h6>{{ session('error') }}</h6>
        </div>
        @endif
    </div>
</div>