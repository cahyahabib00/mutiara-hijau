<!-- Grid Container -->
<div class="grid lg:grid-cols-3 grid-cols-2 gap-4 p-8 bg-green-600" id="card-pete">
    @foreach ($docs as $item)
    <div class="relative rounded-md overflow-hidden shadow-lg h-64">
        <!-- Background Image -->
        <img src="{{ $item->img }}" alt="Image">
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-70"></div>
        
        <!-- Keterangan di Depan Foto -->
        <div class="absolute bottom-4 left-4 text-white">
            <h2 class="text-2xl font-bold">{{ $item->title }}</h2>
            <p class="text-sm">{{ $item->description }}</p>
        </div>
    </div>
    @endforeach

    <div class="mt-6">
        {{ $post->links() }}
    </div>
</div>

