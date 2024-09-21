<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="   {{ route('users.create') }}" class="underline"> Add new user</a>
                    <table class="w-full divide-y divide-gray-200 border mt-4">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                            <span class="text-xs leading-4 font-medium text-gray-500">
                               FIRST NAME
                            </span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                              <span class="text-xs leading-4 font-medium text-gray-500">
                                LAST NAME
                              </span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                              <span class="text-xs leading-4 font-medium text-gray-500">
                                EMAIL
                              </span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                              <span class="text-xs leading-4 font-medium text-gray-500">

                              </span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>

                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                               Edit / Delete
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
