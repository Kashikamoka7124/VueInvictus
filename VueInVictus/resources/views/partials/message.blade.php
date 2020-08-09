 <div class="col-md-6">
    @if(request()->query('search'))
        <p class="text-center">
        No Results Found For Query : <b>{{ request()->query('search') }}</b>
        </p>
    @else
        <h1 class="text-center">
        No Posts Found</b>
        </h1>
    @endif
</div>