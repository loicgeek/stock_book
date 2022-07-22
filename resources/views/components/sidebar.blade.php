<div class="flex flex-col ">
    <div class="p-2 px-10">
        <a href="{{route("dashboard")}}">Home</a>
    </div>
    <div  class="p-2 px-10">
        <a href="{{route('products.index')}}">Products</a>
    </div>
    
    <form  class="p-2 px-10" method="POST" action="{{route('logout')}}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>