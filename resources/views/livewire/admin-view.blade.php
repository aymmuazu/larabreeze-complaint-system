<div class="">
    <div class="border-4 border-light-blue-500 border-opacity-100 md:border-opacity-50" style="text-align: center; padding: 50px; font-size: 105px;">       
      {{ count($users) }}
    </div>
    <div class="text-center">
        <a href="{{ route('adminview') }}" class="mt-5 mb-5 text-center justify-between text-white shadow-inner rounded p-3 bg-green-600">
            Registered Users 😋
        </a>
    </div>
    <div class="border-4 border-light-blue-500 border-opacity-100 md:border-opacity-50" style="text-align: center; padding: 50px; font-size: 105px;">       
        {{ count($complaints) }}
     </div>
     <div class="text-center">
        <a href="{{ route('adminviewcomplaint') }}" class="mt-5 mb-5 text-center justify-between text-white shadow-inner rounded p-3 bg-green-600">
            Submitted Complaints 😋
        </a>
    </div>
</div>