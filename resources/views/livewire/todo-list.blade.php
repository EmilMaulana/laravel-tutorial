<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="flex items-center justify-center">
        {{-- Close your eyes. Count to one. That is how long forever feels. --}}
        <div class="max-w-md w-full p-6 bg-white shadow-lg rounded-lg">
            <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Todo List</h1>
        
            <!-- Form Tambah Todo -->
            <form wire:submit.prevent="addTodo" class="flex items-center space-x-2 mb-4">
                <input 
                    type="text" 
                    wire:model="newTodo" 
                    placeholder="Tambah todo" 
                    class="flex-1 px-4 py-2 border text-gray-700 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                    Tambah
                </button>
            </form>
        
            @error('newTodo') 
            <span class="text-red-500 text-sm block mb-4">{{ $message }}</span> 
            @enderror
        
            <!-- Daftar Todo -->
            <ul class="space-y-3">
                @foreach($todos as $todo)
                    <li class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg shadow">{{ $todo }}</li>
                @endforeach
            </ul>
        </div>
    </div>
        
</div>
