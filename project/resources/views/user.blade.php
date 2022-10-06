@extends('page')

@section('content')
 <!--<div>//$name</div>-->
 
 <div class="overflow-x-auto relative">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="py-3 px-6">
                  Number
              </th>
              <th scope="col" class="py-3 px-6">
                  Name
              </th>
              <th scope="col" class="py-3 px-6">
                  Age
              </th>
              <th scope="col" class="py-3 px-6">
                  City
              </th>
              <th scope="col" class="py-3 px-6">
                  Action
              </th>
          </tr>
      </thead>
      <tbody>
      @if(count($users) > 0)
          @foreach ($users as $user) 
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
              <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $user->id }}
              </th>
              <td class="py-4 px-6">
                {{ $user->name }}
              </td>
              <td class="py-4 px-6">
                {{ $user->age }}
              </td>
              <td class="py-4 px-6">
                {{ $user->city }}
              </td>
              <td class="py-4 px-6">
                <button value="{{ $user->id }}" class="bg-blue-700 hover:bg-blue-800 mx-1 text-white rounded-md px-3 py-1 font-bold">Edit</button>
                <button value="{{ $user->id }}" class="bg-red-600 mx-1 hover:bg-red-800 delUser text-white rounded-md px-3 py-1 font-bold  Sdata-modal-toggle="popup-modal">Delete</button>
              </td>
          </tr>
          
          @endforeach
        @else 
          <tr><td colspan="6">No data</td></tr>
        @endif
      </tbody>
  </table>
</div>
 <a href="user/create">create a user</a>
</div>
<div>
  <form action="/user/{{$user->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete user</button>
  </form>
</div>
@endsection
