@section('title', 'About the App')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About the App') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>An academic growth can be of various concerns in academic environment to promote social and functioning educational system. For an effective educational system to take place there are some issues in academic environment that should properly address to, take for instance issue of complaints management system in the university. This issue had created a lot of problems for an academic growth in the various aspects of the educational system. To support this approach, this project identifies a range of options that can be used to manage and resolve Academic complaints. This includes, where the opportunity presents itself, the need for administrator to make every effort to resolve potential or actual academic complaints as informally as possible in the first instance.</p>   

                    <a href="{{route('home')}}" class="mt-10 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                         Let's Head Back home
                    </a>
                    <div class="mt-14">
                        &copy; 20{{ date('y')}} Alright Reserved By {{config('app.name')}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
