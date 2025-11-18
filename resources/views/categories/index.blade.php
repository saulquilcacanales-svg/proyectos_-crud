<x-layouts.app :title="__('Categorias')">

    <div class="m-10 flex justify-between items-center">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item :href="route('categories.index')">Categorias</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Listado</flux:breadcrumbs.item>
        </flux:breadcrumbs>

        <flux:button href="{{ route('categories.create') }}" icon="plus" variant="primary" color="sky">
            Nueva Categoría
        </flux:button>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Descripción</th>
                    <th scope="col" class="text-center px-6 py-3">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">

                        <!-- ID -->
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $category->id }}
                        </th>

                        <!-- Nombre -->
                        <td class="px-6 py-4">
                            {{ $category->nombre }}
                        </td>

                        <!-- Descripción -->
                        <td class="px-6 py-4">
                            {{ $category->description ?? 'Sin descripción' }}
                        </td>

                        <!-- Acciones -->
                        <td class="flex justify-end gap-2 px-6 py-4">

                            <!-- Ver -->
                            <flux:button href="{{ route('categories.show', $category) }}" variant="primary" color="zinc"
                                icon="eye">
                                Ver
                            </flux:button>

                            <!-- Editar -->
                            <flux:button href="{{ route('categories.edit', $category) }}" variant="primary" color="blue"
                                icon="pencil">
                                Editar
                            </flux:button>

                            <!-- Modal Eliminar -->
                            <flux:modal.trigger name="delete-category-{{ $category->id }}">
                                <flux:button variant="danger" icon="trash">Eliminar</flux:button>
                            </flux:modal.trigger>

                            <flux:modal name="delete-category-{{ $category->id }}" class="min-w-[22rem]">
                                <div class="space-y-7">

                                    <div>
                                        <flux:heading size="lg">¿Eliminar categoría?</flux:heading>

                                        <flux:text class="mt-2">
                                            Estás a punto de eliminar la categoría
                                            <b>{{ $category->nombre }}</b>.<br>
                                            Esta acción <span class="text-red-600 font-semibold">no se puede deshacer</span>.
                                        </flux:text>
                                    </div>

                                    <div class="flex gap-2">
                                        <flux:spacer />

                                        <!-- Cancelar -->
                                        <flux:modal.close>
                                            <flux:button variant="ghost">Cancelar</flux:button>
                                        </flux:modal.close>

                                        <!-- Eliminar -->
                                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <flux:button type="submit" variant="danger">Eliminar</flux:button>
                                        </form>
                                    </div>

                                </div>
                            </flux:modal>

                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>

</x-layouts.app>
