@if (session()->has('alert'))
  <div class=" mb-5 justify-between text-white shadow-inner rounded p-3 bg-green-600">
      {{session('alert')}} 😋
  </div>
@endif
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shaow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Seral No
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Category
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Description
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @if (count($complaints) >0)
              @foreach ($complaints as $complaint)
              <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          FED/SS/ID/00/23{{ $complaint->id}}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-500">{{ $complaint->category}}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-500">{{ $complaint->description}}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                      {{ $complaint->created_at->diffForHumans()}}
                  </td>
              
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" wire:click.prevent="delete({{$complaint->id}})"  class="text-indigo-600 hover:text-indigo-900">Delete</a>
                  </td>
                </tr>
              @endforeach
              @else
                <div class=" mb-5 justify-between text-white shadow-inner rounded p-3 bg-yellow-600">
                    No complaints found
                </div>
              @endif  
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>