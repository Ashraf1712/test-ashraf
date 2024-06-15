<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Task List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('tasks.create') }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Task</a>
                    </div>
                    @if (count($tasks) > 0)
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title</th>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider max-w-xs">
                                        Description</th>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Completed</th>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $task->title }}</td>
                                        <td class="px-6 py-4 max-w-xs whitespace-wrap">{{ $task->description }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($task->is_completed)
                                                <a class="bg-green-500 text-white  text-sm px-4 py-2 rounded hover:bg-green-600 w-2"
                                                    href="{{ route('tasks.complete', $task->id) }}"
                                                    onclick="event.preventDefault(); document.getElementById('complete-task-{{ $task->id }}').submit();">
                                                    Completed</a>
                                            @else
                                                <a class="bg-red-500 text-white text-sm px-4 py-2 rounded hover:bg-red-600"
                                                    href="{{ route('tasks.complete', $task->id) }}"
                                                    onclick="event.preventDefault(); document.getElementById('complete-task-{{ $task->id }}').submit();">
                                                    Incomplete</a>
                                            @endif
                                            <form id="complete-task-{{ $task->id }}"
                                                action="{{ route('tasks.complete', $task->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('PATCH')
                                            </form>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a class="bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-600"
                                                href="{{ route('tasks.show', $task->id) }}">View</a>

                                            <a class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
                                                href="{{ route('tasks.edit', $task->id) }}">Edit</a>

                                            <a class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
                                                href="{{ route('tasks.destroy', $task->id) }}"
                                                onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this task?')) { document.getElementById('delete-task-{{ $task->id }}').submit(); }">
                                                Delete
                                            </a>

                                            <form id="delete-task-{{ $task->id }}"
                                                action="{{ route('tasks.destroy', $task->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4>No Tasks Created yet.</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
