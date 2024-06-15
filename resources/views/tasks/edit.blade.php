<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Todo Apps
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto mt-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action='{{ route('tasks.update', ['task' => $task->id]) }}'>
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" value="{{ $task->title }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="3"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $task->description }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="is_completed">Status</label>
                        <select name="is_completed" id="is_completed" class="form-control">
                            <option disabled>Select Option</option>
                            <option value="1" {{ $task->is_completed == 1 ? 'selected' : '' }}>Completed</option>
                            <option value="0" {{ $task->is_completed == 0 ? 'selected' : '' }}>Incomplete</option>
                        </select>
                    </div>

                    <button class="bg-blue-500 text-white p-2 rounded" type="submit">Update Task</button>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>
