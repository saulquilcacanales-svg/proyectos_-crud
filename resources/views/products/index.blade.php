<x-layouts.app :title="__('Dashboard')">

    <div class="m-10 flex justify-between items-center">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item :href="route('products.index')">Categorias</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Post</flux:breadcrumbs.item>
        </flux:breadcrumbs>

        <flux:button href="{{ route('products.create') }}" icon="plus" variant="primary" color="sky" class="">
            Nuevo
        </flux:button>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        stock
                    </th>
                   <th scope="col" class="px-6 py-3">
                        fecha de caducidad
                    </th>
                    <th scope="col" class=" text-center flex justify-end px-2 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $product->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $product->nombre }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->precio }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->stock }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->fecha_caducidad ?? 'Sin fecha de caducidad' }}
                        </td>
                        <td class="px-6 py-4">
                        </td>
                        <td class="flex justify-end mt-4 px-6 py-4">
                            <flux:button href="{{ route('products.show', $product) }}" variant="primary" color="zinc"
                                icon="eye">
                                Ver
                            </flux:button>

                            <flux:button href="{{ route('products.edit', $product) }}" variant="primary" color="blue"
                                icon="pencil">
                                Actualizar
                            </flux:button>

                            <!-- 🔥 Modal para eliminar -->
                            <flux:modal.trigger name="delete-product-{{ $product->id }}">
                                <flux:button variant="danger" icon="trash">Eliminar</flux:button>
                            </flux:modal.trigger>

                            <flux:modal name="delete-product-{{ $product->id }}" class="min-w-[22rem]">
                                <div class="space-y-7">
                                    <div>
                                        <flux:heading size="lg">¿Eliminar producto?</flux:heading>

                                        <flux:text class="mt-2">
                                            Estás a punto de eliminar el producto <b>{{ $product->nombre }}</b>.<br>
                                            Esta acción <span class="text-red-600 font-semibold">no se puede
                                                deshacer</span>.
                                        </flux:text>
                                    </div>

                                    <div class="flex gap-2">
                                        <flux:spacer />

                                        <!-- Botón cancelar -->
                                        <flux:modal.close>
                                            <flux:button variant="ghost" class="">Cancelar</flux:button>
                                        </flux:modal.close>

                                        <!-- Formulario de eliminación -->
                                        <form action="{{ route('products.destroy', $product) }}" method="POST">
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
