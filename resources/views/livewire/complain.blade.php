<form wire:submit.prevent="submit">
    @csrf
    <h3 class="font-semibold text-xl text-gray-800 leading-tight">Add a Complaint</h3>
    <hr class="mt-3">
    <!-- Name -->
    @if (session()->has('info'))
        <div class="justify-between text-white shadow-inner rounded mt-3 p-3 bg-green-600">
            {{session('info')}}
        </div>
    @endif
    @error('categories')
    <div class="justify-between text-white shadow-inner rounded mt-3 p-3 bg-green-600">
        {{$message}}
    </div>
    @enderror
    <div class="mt-5">
        <x-label for="password_confirmation" :value="__('Type of Complaint')" />

    <select wire:model="category" class="block mt-1 w-full" style="border-radius: 5px; border: 1px solid #dad7d7" required>
          <option value="" selected>Choose</option>
          <option value="School">School</option>
          <option value="Department">Department</option>
          <option value="Finance">Finance</option>
          <option value="Central Administration">Central Administration</option>

    </select>

    <div class="mt-5">
        <x-label for="name" :value="__('Description')" />
        <textarea wire:model="description" id="" rows="7" class="block mt-1 w-full" style="border-radius: 5px; border: 1px solid #dad7d7" required></textarea>
    </div>

    <p></p>
    </div>

    <div class="flex items-center justify-end mt-4">
        
        <x-button class="ml-4">
            {{ __('Submit Complain') }}
        </x-button>
    </div>
</form>
</div>
@livewire('view-complaint')