<div class="">
    <div class="border-4 border-light-blue-500 border-opacity-100 md:border-opacity-50" style="text-align: center; padding: 50px; font-size: 105px;">       
        {{ count($view)}}
    </div>
    <div class="mt-3 text-center font-bold">
        @if (count($view) > 0)
            <div class="justify-between text-white shadow-inner rounded p-3 bg-green-600">
                Complain found 😋
            </div> 
            <hr class="mt-10">
            <a href="{{route('view')}}" class="mt-10 justify-between text-white shadow-inner rounded p-2 bg-gray-700">View Complains</a>
        @else 
            <div class="justify-between text-white shadow-inner rounded p-3 bg-red-600">
                No complain found
            </div>
        @endif
    </div>
</div>