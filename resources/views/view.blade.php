@section('title', 'View Complaints')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{auth()->user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    @switch(auth()->user()->getaction())
                        @case('Admin')
                            <div class="justify-between text-white shadow-inner rounded mt-3 p-3 bg-yellow-600">
                                Ooops, you are not allowed to visit this site.
                            </div>
                            @break
                        @case('Student')
                            <h1 class="font-semibold text-xl text-gray-800 leading-tight">View Complaints</h1>
                            <hr class="mt-3">
                                <div class="grid grid gap-10 mt-10">
                                    <div>
                                       @livewire('view', ['complaints' => $complaints])
                                    </div>
                                </div>
                            @break
                        @default
                            
                    @endswitch
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
