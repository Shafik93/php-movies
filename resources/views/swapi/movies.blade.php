<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Movies
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($movies as $movie)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">                    
                        <td class="py-4 px-6">
                            {{$movie[0]}}
                        </td>
                    </tr>
                @empty
                    <h2>No Movies</h2>
                @endforelse
                </tbody>
            </table>
        </div>


    </div>
    </div>
</x-app-layout>
