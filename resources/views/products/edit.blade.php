<x-layouts.app>
<flux:breadcrumbs>
    <flux:breadcrumbs.item :href="route('dashboard')">producto</flux:breadcrumbs.item>
    <flux:breadcrumbs.item :href="route('products.index')">Categorias</flux:breadcrumbs.item>
    <flux:breadcrumbs.item>Post</flux:breadcrumbs.item>
</flux:breadcrumbs>

<div class="card">
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="p-4 dark:text-white dark:bg-gray-900">
            <flux:input
                label="Nombre"
                name="nombre"
                value="{{ old('nombre', $product->nombre) }}"
                placeholder="Escriba el nombre del producto"
            />

            <flux:input
                label="Precio"
                name="precio"
                value="{{ old('precio', $product->precio) }}"
                placeholder="Escriba el precio"
            />

            <flux:input
                label="Stock"
                name="stock"
                value="{{ old('stock', $product->stock) }}"
                placeholder="Ingrese stock"
            />
             <flux:input
                label="fecha de caducidad"
                name="fecha_caducidad"
                value="{{ old('fecha de caducidad', $product->fecha_caducidad) }}"
                placeholder="fecha de caducidad"
            />

            <div class="flex justify-end mt-4">
                <flux:button
                    type="submit"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Actualizar
                </flux:button>
            </div>
        </div>
    </form>
</div>
</x-layouts.app>
