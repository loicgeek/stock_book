@extends('layouts.app')


@section("content")


<div>
    <div class="flex items-center justify-between mb-6">
       
        <a class="bg-indigo-500 p-2 rounded-md text-white" href="{{route('products.create')}}">
          <span>Create</span>
          <span class="hidden md:inline">&nbsp;Product</span>
        </a>
      </div>

    
<div class="bg-white rounded-md shadow overflow-x-auto">
    <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
        <th class="pb-4 border  pt-6 px-6">#</th>
        <th class="pb-4 border pt-6 px-6">Name</th>
        <th class="pb-4 border pt-6 px-6">Price</th>
        <th class="pb-4 border pt-6 px-6">Actions</th>
       
      </tr>
      @if (count($products)==0)
      <tr>
        <td class="px-6 py-4 border-t text-center" colspan="4">No Products found.</td>
     </tr>
      @endif
      @foreach ($products as $product)
        <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
            <td class="border p-3 text-center">
              @if ($product->image)   
                <img src="{{asset($product->image)}}" width="100" class="text-center" height="100" alt="" srcset="">
              @else
              {{$product->id}}
              @endif
             
            </td>
            <td class="border p-3 ">
                {{$product['name']}}
            </td>
            <td class="border p-3 ">
                {{$product['price']}} FCFA
            </td>
            <td class="border p-3 ">
               <span class="text-underline text-blue-500">edit</span>
            </td>
            
        </tr>
       
      @endforeach
    </table>
  </div>


</div>

@endsection
