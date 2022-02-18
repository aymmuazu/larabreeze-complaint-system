@section('title', 'Home')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Complain Submission System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                        <div class="md:flex">
                          <div class="md:flex-shrink-0">
                            <img class="h-48 w-full object-cover md:h-full md:w-40" src="/assets/img/student.jpg" alt="">
                          </div>
                          <div class="p-8">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"></div>
                            <a href="" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Design and Implementation of Student Complain System</a>
                            <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
                            <p class="mt-6">
                                
                                @auth
                                    <a href="{{route('dashboard')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"> Proceed to Dashboard..</a>
                                @endauth    
                                    
                                @guest
                                <a href="{{route('login')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"> Let's get Started </a>
                                @endguest
                             </p>
                          </div>
                        </div>
                      </div>
                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
