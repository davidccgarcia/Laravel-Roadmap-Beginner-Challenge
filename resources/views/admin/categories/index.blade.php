@extends('layouts.admin.app')

@section('content')
    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
        <main>
            <div class="px-4 pt-6">
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <!-- Card header -->
                    <div class="items-center justify-between lg:flex">
                        <div class="mb-4 lg:mb-0">
                            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Categories</h3>
                            <span class="text-base font-normal text-gray-500 dark:text-gray-400">This is a list of categories</span>
                        </div>
                        <div class="items-center sm:flex">
                            <div class="flex items-center">
                                <a href="{{ route('admin.categories.create') }}"
                                    class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Create Category
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Table -->
                    <div class="flex flex-col mt-6">
                        <div class="overflow-x-auto rounded-lg">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden shadow sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                    Name
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                    Created At
                                                </th>
                                                <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                    Updated At
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white dark:bg-gray-800">
                                            @forelse ($categories as $category)
                                            <tr>
                                                <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $category->name }}
                                                </td>
                                                <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $category->created_at->diffForHumans() }}
                                                </td>
                                                <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $category->updated_at->diffForHumans() }}
                                                </td>
                                            </tr>
                                            @empty
                                                <tr class="text-center">
                                                    <td colspan="3" class="p-4">There is no data to show</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection()