<x-layouts.auth>
    <x-slot:title>Email Verification</x-slot:title>
    <div class="min-h-screen flex items-center justify-center bg-gray-900">
        <div class="bg-gray-800 p-8 rounded-xl shadow-lg w-full max-w-md">
            <!-- Logo or App Name -->
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-gray-100">Verify Your Email</h1>
                <p class="text-gray-400">We have sent a verification link to your email address.</p>
            </div>
            
            @if (session('resent'))
                <div class="mb-4 p-3 bg-green-600 text-white rounded-lg">
                    A new verification link has been sent to your email address.
                </div>
            @endif
            
            <p class="text-gray-400 text-sm text-center mb-4">
                Before proceeding, please check your email for a verification link.
                If you did not receive the email,
            </p>
            
            <form method="POST" action="" class="text-center">
                @csrf
                <button
                    type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300"
                >
                    Resend Verification Email
                </button>
            </form>
        </div>
    </div>
</x-layouts.auth>
