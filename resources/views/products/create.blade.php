

<x-layouts.app :title="__('Nuevo Producto')">
    <flux:breadcrumbs class="m-8 flex">
        <flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('products.index')">Productos</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Nuevo</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <div class="card max-w-2xl mx-auto p-6  dark:bg-gray-900 rounded-2xl shadow-lg">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="space-y-4  dark:bg-gray-900">
                <flux:input
                    label="Nombre del producto"
                    name="nombre"
                    value="{{ old('nombre') }}"
                    placeholder="Escriba el nombre del producto"
                    required
                />

                <flux:input
                    label="Precio (S/.)"
                    name="precio"
                    type="number"
                    step="0.01"
                    value="{{ old('precio') }}"
                    placeholder="Ingrese el precio"
                    required
                />

                <flux:input
                    label="Stock"
                    name="stock"
                    type="number"
                    value="{{ old('stock') }}"
                    placeholder="Cantidad disponible"
                    required
                />
            </div>
             <flux:input
                    label="Fecha de caducidad"
                    name="fecha_caducidad"
                    type="date"
                    value="{{ old('fecha_caducidad') }}"
                    required
                />
            </div>

            <div class="flex justify-end mt-6">
                <flux:button
                    type="submit"
                    variant="primary"
                    class="px-6 py-2 text-sm font-semibold  dark:bg-gray-900 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br rounded-lg shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                    Guardar Producto
                </flux:button>
            </div>
        </form>
    </div>
</x-layouts.app>


