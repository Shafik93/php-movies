<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form class="form-inline" method="GET">
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <div class="pb-4 bg-white dark:bg-gray-900 py-4 px-4">
                        <div class="relative mt-1">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input name="filter" value="{{ $filter }}"  type="text"
                                class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for actors">
                        </div>
                    </div>
            </form>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Actor
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Movies
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($actors as $actor)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-00 whitespace-nowrap dark:text-white">
                                {{ $actor->name }}
                            </th>
                            <td class="py-4 px-6">
                                <ul class="space-y-1 max-w-xl list-disc list-inside text-gray-500 dark:text-gray-400">
                                    @forelse ($actor->Movies as $movie)
                                        <li>
                                            {{ $movie->name }}
                                        </li>
                                    @empty
                                        No Actors
                                    @endforelse
                                </ul>
                            </td>
                        </tr>
                    @empty
                        <h2>No Actors</h2>
                    @endforelse

                </tbody>
            </table>
        </div>


    </div>
    </div>
</x-app-layout>
