<div class="flex-column"> 
    <div class="flex m-8">
        <div class="flex-none w-16 h-16 ...">
            Search
        </div>
        <div class="flex-grow h-16 rounded bg-white">
            <!-- This item will grow -->
        </div>
        <div class="flex-none w-16 h-16 ...">
            <!-- This item will not grow -->
        </div>
    </div>

    <div class="flex p-4">
        <div class="flex-none w-64 rounded bg-gray-200  m-1">
            Categories
        </div>
        <div class="flex-grow m-1 bg-opacity-50 bg-white rounded shadow-xl p-4">
            <div class="flex flex-wrap">
            @forelse ($products as $product)    
                
                <div class="flex flex-auto rounded-md my-2 bg-gradient-to-br from-white to-blue-100 drop-shadow-2xl">
                    <div class="flex w-48 relative rounded ">
                        <img src="images/{{ $randImgs[rand(0, 2)] }}" alt="" class="absolute rounded inset-0 w-full h-full object-cover" />
                    </div>
                    <form class="flex-auto p-6">
                        <div class="flex flex-wrap">
                        <h1 class="flex-auto text-xl font-semibold">
                        {{ $product->name }}
                        </h1>
                        <div class="text-xl font-semibold text-gray-500">
                        Php {{ $product->price }}
                        </div>
                        <div class="w-full flex-none text-sm font-medium text-gray-500 mt-2">
                            In stock
                        </div>
                        </div>
                        <div class="flex items-baseline mt-4 mb-6">
                    
                        <div class="ml-auto text-sm text-gray-500 underline">Size Guide</div>
                        </div>
                        <div class="flex space-x-3 mb-4 text-sm font-medium">
                        <div class="flex-auto flex space-x-3">
                            <button class="w-1/2 flex items-center justify-center rounded-md bg-indigo-800 text-white" type="submit">Buy now</button>
                            <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Add to bag</button>
                        </div>
                        <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-gray-400 border border-gray-300" type="button" aria-label="like">
                            <svg width="20" height="20" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                            </svg>
                        </button>
                        </div>
                        <p class="text-sm text-gray-500">
                        Free shipping on all continental US orders.
                        </p>
                    </form>
                    </div> 
                @empty
                    No products found
                @endforelse
                    <div>
                    {{ $products->links() }}
                    </div>
                </div>
            </div> 
        </div>
    </div>

</div>
