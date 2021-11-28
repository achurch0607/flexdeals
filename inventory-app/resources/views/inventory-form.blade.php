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
        <form action="" method="post" action="{{ route('inventory.store') }}">
            @csrf

            <div class="form-group">
                <label>Date Purchased</label>
                <input type="date" class="form-control {{ $errors->has('datePurchased') ? 'error' : '' }}" name="datePurchased" id="datePurchased">

                <!-- Error -->
                @if ($errors->has('datePurchased'))
                <div class="error">
                    {{ $errors->first('datePurchased') }}
                </div>
                @endif
            </div>
            
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control {{ $errors->has('quantity') ? 'error' : '' }}" name="quantity" id="quantity">

                <!-- Error -->
                @if ($errors->has('quantity'))
                <div class="error">
                    {{ $errors->first('quantity') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Platform Listed</label>
                <input type="text" class="form-control {{ $errors->has('platformListed') ? 'error' : '' }}" name="platformListed" id="platformListed">

                <!-- Error -->
                @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control {{ $errors->has('description') ? 'error' : '' }}" name="description" id="description">

                @if ($errors->has('description'))
                <div class="error">
                    {{ $errors->first('description') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Retail Price</label>
                <input type="text" class="form-control {{ $errors->has('retailPrice') ? 'error' : '' }}" name="retailPrice" id="retailPrice">

                @if ($errors->has('retailPrice'))
                <div class="error">
                    {{ $errors->first('retailPrice') }}
                </div>
                @endif
            </div>
            
            <div class="form-group">
                <label>Asking Price</label>
                <input type="text" class="form-control {{ $errors->has('askingPrice') ? 'error' : '' }}" name="askingPrice" id="askingPrice">

                @if ($errors->has('askingPrice'))
                <div class="error">
                    {{ $errors->first('askingPrice') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Notes</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'error' : '' }}" name="notes" id="notes"
                    rows="3"></textarea>

                @if ($errors->has('notes'))
                <div class="error">
                    {{ $errors->first('notes') }}
                </div>
                @endif
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>