@if(session()->has('message'))
<div x-data='{show: true}' x-init='setTimeout(()=> show = false, 3000)' x-show='show'
    class="fixed mt-5 left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-0 bg-green-500 w-500 text-white mx-auto px-10 py-3">
    <p>
        {{session('message')}}
    </p>
</div>
@endif