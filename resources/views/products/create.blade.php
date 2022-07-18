@extends('layouts.app')


@section("content")


    <div class=" w-full">
       
        <h1 class="mb-8 text-3xl font-bold">
          <a class="text-indigo-400 hover:text-indigo-600" href="{{route('products.index')}}">Products</a>
          <span class="text-indigo-400 font-medium">/</span> Create
        </h1>
        <div class="max-w-3xl bg-white rounded-md shadow overflow-hidden">
        
          <form  action="{{route('products.save')}}" method="POST" >
            @csrf
            <div class="flex flex-col flex-wrap -mb-8 -mr-6 p-8">
                <div class="flex flex-col py-2">
                    <span>Name</span>
                    <input type="text" name="name" id="name" value="{{old('name')}}"  placeholder="Product name" class="border  p-1 rounded-md @error('name') border-red-500 @enderror"/>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col py-2">
                    <span>Description</span>
                    <textarea type="text" name="description" value="{{old('description')}}" id="description"   placeholder="Product Description" class="border  p-1 rounded-md @error('description') border-red-500 @enderror"></textarea>
                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                   
                  
                </div>

                <div class="flex flex-col py-2">
                    <span>Price</span>
                    <input type="number" name="price" value="{{old('price')}}" id="price"  placeholder="Product price" class="border  p-1 rounded-md @error('price') border-red-500 @enderror"/>
                    @error('price')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col py-2">
                    <span>Quantity</span>
                    <input type="number" name="quantity" value="{{old('quantity')}}" id="quantity"  placeholder="Product quantity" class="border  p-1 rounded-md @error('quantity') border-red-500 @enderror"/>
                    @error('quantity')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col py-2">
                    <span>Min Stock</span>
                    <input type="number" name="stock_min" value="{{old('stock_min')}}" id="stock_min"  placeholder="Product Minimum Stock" class="border  p-1 rounded-md @error('stock_min') border-red-500 @enderror"/>
                    @error('stock_min')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
                <button type="submit" class="text-indigo-400 bg-blue-500 p-2 rounded-md text-white hover:text-indigo-600" href="{{route('products.index')}}">Create Product</button>
            </div>
          </form>
        </div>
      </div>


@endsection