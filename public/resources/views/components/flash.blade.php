@if (session('message'))
    <div class="alert alert-success">
        <h3 class="text-center">{{ session('message') }}</h3>
    </div>
@endif