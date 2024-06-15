<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            View Task
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{ url()->previous() }}" class="bg-blue-400 text-white rounded px-4 py-2 inline-block mb-4">Go
                    Back</a>
                <div>
                    <b class="block mb-2">Your Task title is:</b>
                    <p class="mb-6">{{ $task->title }}</p>
                </div>
                <div>
                    <b class="block mb-2">Your Task description is:</b>
                    <p>{{ $task->description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
