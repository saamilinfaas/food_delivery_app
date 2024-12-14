
    <section class="text-black dark:text-white w-full rounded-full ">
        <aside class="relative">

            <button class="fixed text-white bg-purple-600 px-6 py-2 rounded-full my-2 w-20" onclick="handleshow()" >
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
            </button>
            <ul class="absolute top-16 -left-96 w-40 duration-300" id="sitebar">
                <li class=" bg-gray-800 text-center py-2 border  rounded-3xl">
                    <p>Products</p>
                </li>

                @foreach ($categories as $category)

                <li class=" h-10 overflow-hidden hover:text-purple-200 bg-gray-500 text-center py-2 border hover:border-2 hover:bg-gray-700 rounded-xl">
                    <a href="/products/category/{{$category->name}}">{{$category->name}}</a>
                </li>

                @endforeach
            </ul>
        </aside>
    </section>

    <script>
        const sitebar = document.getElementById('sitebar')
        const handleshow = ()=>{
            if(sitebar.classList.contains('-left-96')){
                sitebar.classList.remove('-left-96');
                sitebar.classList.add('left-0');
            }else if(sitebar.classList.contains('left-0')){
                sitebar.classList.remove('left-0');
                sitebar.classList.add('-left-96');
            }
        }
    </script>

