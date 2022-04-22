{{-- {{$monografia->withSum('articulos','num_paginas')->get()}} --}}

{{-- {{$monografia->withSum('articulos','num_paginas')->find($monografia->id)->articulos_sum_num_paginas}} --}}

{{ $monografia->articulos->count('articulos') }}


<x-monografias>

    <h1>monografias show</h1>

    <div
        class="outline-none mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">

        <a href="{{ '/monografias' }}">Volver</a>
    </div>

    <br>

    <table class="table-auto">
        <thead class="bg-blue-500">
            <th class="px-6 py-2 text-white">
                Titulo
            </th>
            <th class="px-6 py-2 text-white">
                Año
            </th>
        </thead>
        <tbody class="bg-blue-100">

            <tr>
                <td class="px-6 py-2">{{ $monografia->titulo }}</td>
                <td class="px-6 py-2">{{ $monografia->anyo }}</td>
            </tr>

        </tbody>
    </table>

    <br>
    <br>
    <div>
        <h1>Número de páginas</h1>
        @if ($monografia->articulos_sum_num_paginas)
        <td class="px-6 py-2">{{ $monografia->articulos_sum_num_paginas }}</td>
            
        @else
            <p>0</p>
        @endif
    </div>
    <div>
        <h1>Número de articulos</h1>
        <td class="px-6 py-2">{{ $monografia->articulos->count() }}</td>
    </div>
    <br>

    <h2>Articulos</h2>


    @if (!$monografia->articulos->count()==0)
        
    <table class="table-auto">
        <thead class="bg-blue-300">
            <tr>
                
                <th class="px-6 py-2 ">
                    Titulo
                </th>
                <th class="px-6 py-2 ">
                    Año
                </th>
                <th class="px-6 py-2 ">
                    num_paginas
                </th>
            </tr>
        </thead>
        @endif
        
        <tbody class="bg-blue-100">
            
            @forelse ($monografia->articulos->sortByDesc('anyo') as $articulo)
            <tr>
                
                <td class="px-6 py-2">{{ $articulo->titulo }}</td>
                <td class="px-6 py-2">{{ $articulo->anyo }}</td>
                <td class="px-6 py-2">{{ $articulo->num_paginas }}</td>
            </tr>
            @empty
            La monografia no tiene ningun articulos
            @endforelse
            
        </tbody>
    </table>
    

</x-monografias>