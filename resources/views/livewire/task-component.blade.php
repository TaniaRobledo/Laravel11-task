
<div class="overflow-x-auto">
    <button class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 my-6" wire:click="openCreateModal">
       Nuevo
    </button>

    <table class="table-auto w-full border-collapse border border-gray-300">
        <!-- Tabla -->
        <thead>
            <tr class="bg-purple-600 text-white">
                <th class="border border-gray-300 px-4 py-2">Titulo</th>
                <th class="border border-gray-300 px-4 py-2">Descripción</th>
                <th class="border border-gray-300 px-4 py-2">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr class="bg-purple-50 hover:bg-purple-100">
                <td class="border border-gray-300 px-4 py-2">Tarea 1</td>
                <td class="border border-gray-300 px-4 py-2">Descripción de la tarea 1</td>
                <td class="border border-gray-300 px-4 py-2 flex gap-2 justify-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    wire:click="udpateTask({{ $task-> }})">
                        Editar
                    </button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Eliminar
                    </button>
                </td>
            </tr>

            @foreach($tasks as $task)
            <tr class="bg-purple-50 hover:bg-purple-100">
                <td class="border border-gray-300 px-4 py-2">Tarea 2</td>
                <td class="border border-gray-300 px-4 py-2">Descripción de la tarea 2</td>
                <td class="border border-gray-300 px-4 py-2 flex gap-2 justify-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    wire:click="udpateTask({{ $task-> }})">
                        Editar
                    </button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Eliminar
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal Background -->
    @if($modal)
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
        <!-- Modal Content -->
        <div class="bg-white p-6 rounded-lg w-96">
            <!-- Modal Title -->
            <h2 class="text-xl font-bold text-blue-600 mb-4">Crear una nueva tarea</h2>

            <!-- Form -->
            <form wire:submit.prevent="createTask">
                <!-- Titulo Input -->
                <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                <input id="titulo" wire:model="titulo" type="text" class="mt-2 w-full p-2 border border-gray-300 rounded-md" placeholder="Escribe el título de la tarea" required>

                <!-- Descripción Input -->
                <label for="descripcion" class="block text-sm font-medium text-gray-700 mt-4">Descripción</label>
                <input id="descripcion" wire:model="descripcion" type="text" class="mt-2 w-full p-2 border border-gray-300 rounded-md" placeholder="Escribe una descripción" required>

                <!-- Buttons -->
        
               
                <div class="flex justify-end mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md mr-2" wire:click.prevent="createTask">Crear tarea</button>
                    <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md" wire:click="closeCreateModal">Cancelar</button>
                </div>
              
            </form>
        </div>
    </div>
    @endif
</div>
