<x-layout>
<x-slot:heading>
login</x-slot:heading>
<x-slot:src>
  src="https://i.pinimg.com/736x/7c/a8/c0/7ca8c0194f4be96a9442ec56b4c7c8a5.jpg"
</x-slot:src>
 
<form method="POST" action="/login">


    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
       

         <x-form-flied>
                <x-form-label for="email" >email</x-form-label>

          <div class="mt-2">
            <x-form-input type="email" name="email" :value="old('email')" id="email" />

          </div>
            <x-form-error name="email" />

        </x-form-flied>

         <x-form-flied>
                <x-form-label for="password" >password</x-form-label>

          <div class="mt-2">
            <x-form-input type="password" name="password" id="password" />

          </div>
            <x-form-error name="password" />

        </x-form-flied>

        
      
      </div>
   
    </div>

    </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <x-form-button>login</x-form-button>
  </div>
</form>

</x-layout>