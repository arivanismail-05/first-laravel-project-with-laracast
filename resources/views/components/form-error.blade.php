 @props(['name'])
 
  @error($name)

        <p class="text-red-500 font-semibold mt-2 block"> {{ $message }} </p>
            
        @enderror