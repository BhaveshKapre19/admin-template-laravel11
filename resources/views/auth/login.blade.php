<x-layouts.auth>
    <x-slot:title>Login</x-slot:title>
    <div class="min-h-screen flex items-center justify-center bg-gray-900">
        <div class="bg-gray-800 p-8 rounded-xl shadow-lg w-full max-w-md">
            <!-- Logo or App Name -->
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-gray-100">Welcome Back</h1>
                <p class="text-gray-400">Sign in to your account</p>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-600 text-white rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Login Form -->
            <form action="" method="POST">
                @csrf

                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-100 placeholder-gray-400 transition duration-300"
                        placeholder="Enter your email" required>
                    @error('email') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                    <input type="password" id="password" name="password"
                        class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-100 placeholder-gray-400 transition duration-300"
                        placeholder="Enter your password" required>
                    @error('password') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">
                    Login
                </button>
            </form>

            <!-- Links Below the Form -->
            <div class="mt-6 text-center space-y-2">
                <p class="text-sm text-gray-400">
                    Don't have an account? <a href="" class="text-blue-400 hover:text-blue-300">Sign up</a>
                </p>
                <p class="text-sm text-gray-400">
                    Forgot your password? <a href="" class="text-blue-400 hover:text-blue-300">Reset it</a>
                </p>
            </div>
        </div>
    </div>
</x-layouts.auth>
