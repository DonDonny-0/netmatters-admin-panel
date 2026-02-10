@props(['name'])

@error($name)
   <p class="text-xs text-red-500 mt-1 ml-0.5 -mb-5">{{ $message }}</p>
@enderror
