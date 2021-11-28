<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                            <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <button type="button" class="btn btn-secondary">Show Inventory</button>
        <button type="button" class="btn btn-secondary">Show Sold</button>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Update Row</th>
                    <th>Quantity</th>
                    <th>Date Purchased</th>
                    <th>Platform Listed</th>
                    <th>Description</th>
                    <th>Retail Price</th>
                    <th>Asking Price</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventory as $i)
                <tr>
                    <td><button type="button" class="btn btn-success">Update {{$i->id}}</button></td>
                    <td><input type='number' min='1' class='form-control' name='quantity' id='quantity' value='{{ $i->quantity }}'> </td>
                    <td><input type='date' class='form-control' name='datePurchased' id='datePurchased' value='{{ $i->datePurchased }}'> </td>
                    <td><input type='text' class='form-control' name='platformListed' id='platformListed' value='{{ $i->platformListed }}'> </td>
                    <td><input type='text' class='form-control' name='description' id='description' value='{{ $i->description }}'></td>
                    <td><input type='number' class='form-control' name='retailPrice' id='retailPrice' value='{{ $i->retailPrice }}'></td>
                    <td> <input type='number' class='form-control' name='askingPrice' id='askingPrice' value='{{ $i->askingPrice }}' </td>
                    <td><input type='textarea' class='form-control' name='notes' id='notes' value='{{ $i->notes }}'></td>
                </tr>  
                @endforeach
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>