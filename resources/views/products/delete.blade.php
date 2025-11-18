<x-layouts.app>
    <flux:breadcrumbs class="m-8 flex">
        <flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('products.index')">Productos</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Eliminar</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <div class="card p-6 dark:text-white dark:bg-gray-900 text-center">
        <h2 class="text-xl font-bold mb-4">¿Seguro que deseas eliminar este producto?</h2>

        <p class="mb-6 text-gray-400">
            Producto: <strong>{{ $product->nombre }}</strong><br>
            Precio: S/. {{ number_format($product->precio, 2) }}<br>
            Stock: {{ $product->stock }}
            fecha de caducidad: {{ $product->fecha_caducidad }}
        </p>

        <form action="{{ route('products.destroy', $product) }}" method="POST">
            @csrf
            @method('DELETE')

            <flux:button type="submit" color="red" variant="primary">
                Eliminar definitivamente
            </flux:button>

            <a href="{{ route('products.index') }}" class="btn btn-blue ml-2">
                Cancelar
            </a>
        </form>
    </div>
</x-layouts.app>
