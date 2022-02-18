@section('title', 'Dashboard')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (auth()->user()->getaction() == 'Admin')
                Admin Dashboard - {{auth()->user()->email}}
            @elseif(auth()->user()->getaction() == 'Student')
                Student Dashboard - 18/475734{{auth()->user()->id}}
            @endif
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    @switch(auth()->user()->getaction())
                        @case('Admin')
                            @livewire('admin-view', [
                                'users' => $users,
                                'complaints' => $complaints,
                            ])
                            @break
                        @case('Student')
                                <div class="grid grid-cols-2 gap-7 mt-10">
                                    <div>
                                        @livewire('complain')
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
