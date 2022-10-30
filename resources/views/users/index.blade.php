<x-layout>

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


    @unless(count($users) == 0)
        
    <!--Directives start at @-->
    @foreach ($users as $user)
    <!-- Item 1 -->
        {{-- When passing a variable you need : --}}
        <x-user-card :user="$user"/>
    @endforeach

@else
    <p>No listings found</p>
@endunless  

</div>

{{-- For pagination --}}
{{-- <div class="mt-6 p-4">
    {{$users->links()}}
</div> --}}

</x-layout>