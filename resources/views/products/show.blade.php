<x-layouts.app>
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Inicio</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('products.index')">Productos</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Ver producto</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <div class="max-w-2xl mx-auto mt-8">
        <div class=" dark:bg-gray-900 shadow-lg rounded-2xl p-6">
            <flux:heading size="xl" class="mb-4 text-cente dark:bg-gray-900">
                Detalle del Producto
            </flux:heading>

            <div class="space-y-4 dark:text-white">
                <div>
                    <span class="font-semibold text-gray-700 dark:text-gray-900">Nombre:</span>
                    <p class="text-lg">{{ $product->nombre }}</p>
                </div>

                <div>
                    <span class="font-semibold text-gray-700 dark:text-gray-300">Precio:</span>
                    <p class="text-lg">S/. {{ number_format($product->precio, 2) }}</p>
                </div>

                <div>
                    <span class="font-semibold text-gray-700 dark:text-gray-300">Stock:</span>
                    <p class="text-lg">{{ $product->stock }}</p>
                </div>
                <div>
                    <span class="font-semibold text-gray-700 dark:text-gray-300">Fecha de caducidad:</span>
                    <p class="text-lg">{{ $product->fecha_caducidad }}</p>
                <div>
                    <span class="font-semibold text-gray-700 dark:text-gray-300">Fecha de caducidad:</span>
                    <p class="text-lg">{{ $product->fecha_caducidad }}</p>
                </div>

                <div>
                    <span class="font-semibold text-gray-700 dark:text-gray-300">Creado el:</span>
                    <p class="text-sm text-gray-500">{{ $product->created_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>

            <div class="mt-8 flex justify-end gap-3">
                <flux:button
    href="{{ route('products.index') }}"
    variant="ghost"
    color="zinc"
    icon="arrow-left">
    Volver
</flux:button>


                <flux:button
                    href="{{ route('products.edit', $product) }}"
                    variant="primary"
                    color="blue"
                    icon="pencil">
                    Editar
                </flux:button>
            </div>
        </div>
    </div>
</x-layouts.app>
