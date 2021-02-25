@extends('layout.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        @if (session('status'))
        <div class="text-red-500">
        {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="username" placeholder="Email" class="bg-gray-100 border-2 w-full p-2 rounded-lg
            @error('email') border-red-500 @enderror" value="{{ old('email') }}" />

                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-100 border-2 w-full p-2 rounded-lg
            @error('password') border-red-500 @enderror" />

                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white w-full rounded px-4 py-3 font-medium">Login</button>
        </form>
    </div>
</div>

@endsection