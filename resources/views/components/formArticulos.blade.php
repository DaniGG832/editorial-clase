{{ $slot }}
  <div class="mb-6">
      <label for="titulo"
          class="text-sm font-medium text-gray-900 block mb-2 @error('titulo') text-red-500 @enderror">
          Título
      </label>
      <input type="text" name="titulo" id="titulo"
          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('titulo') border-red-500 @enderror"
          value="{{ old('titulo', $articulo->titulo) }}">
      @error('titulo')
          <p class="text-red-500 text-sm mt-1">
              {{ $message }}
          </p>
      @enderror
  </div>


  <div class="mb-6">
      <label for="anyo"
          class="text-sm font-medium text-gray-900 block mb-2 @error('anyo') text-red-500 @enderror">
          Año
      </label>
      <input type="text" name="anyo" id="anyo"
          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('anyo') border-red-500 @enderror"
          value="{{ old('anyo', $articulo->anyo) }}">
      @error('anyo')
          <p class="text-red-500 text-sm mt-1">
              {{ $message }}
          </p>
      @enderror
  </div>
  <div class="mb-6">
    <label for="num_paginas"
        class="text-sm font-medium text-gray-900 block mb-2 @error('num_paginas') text-red-500 @enderror">
        num_paginas
    </label>
    <input type="text" name="num_paginas" id="num_paginas"
        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('num_paginas') border-red-500 @enderror"
        value="{{ old('num_paginas', $articulo->num_paginas) }}">
    @error('num_paginas')
        <p class="text-red-500 text-sm mt-1">
            {{ $message }}
        </p>
    @enderror
</div>


  <br>
  <button type="submit"
  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
</form>