<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div class="flex shadow-md ">
    <div class=" hidden lg:block xl:block">
        {{ $logo2 }}
    </div>
 
    <div class="w-full sm:max-w-md px-6 py-4 bg-white  lg:rounded-r-lg xl:rounded-r-lg overflow-hidden ">
        
        <div class=" flex flex-col sm:justify-center items-center ">{{ $logo }}</div>
        {{ $slot }}
    </div>
    </div>
    
</div>