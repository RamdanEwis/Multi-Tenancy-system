@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">
                        tenants
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse ($tenants as $tenant)
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Sittings
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $tenant->name }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('tenants.edit', $tenant) }}">Edit</a>
                            <form method="POST" action="{{ route('tenants.destroy', $tenant) }}" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td colspan="2"
                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ __('No projects found') }}
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
