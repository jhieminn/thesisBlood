@extends('layouts.app')

@section('title', 'Healthcare Worker Dashboard')

@section('content')
<div class="bg-gray-50 min-h-screen p-6">
    <div class="max-w-7xl mx-auto">

        <!-- Header -->
        <h1 class="text-3xl font-bold text-red-600 mb-8">Healthcare Worker Dashboard</h1>

        <!-- Action Buttons -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-8">
            <a href="{{ route('blood.inventory') }}" class="bg-red-600 hover:bg-red-700 text-white font-semibold rounded-xl p-6 flex flex-col items-center justify-center shadow-lg transition">
                <i class="fas fa-tint text-3xl mb-2"></i>
                <span>Blood Bank Inventory</span>
            </a>

            <a href="{{ route('donors.list') }}" class="bg-red-600 hover:bg-red-700 text-white font-semibold rounded-xl p-6 flex flex-col items-center justify-center shadow-lg transition">
                <i class="fas fa-user-friends text-3xl mb-2"></i>
                <span>Donor List</span>
            </a>

            <a href="{{ route('emails') }}" class="bg-red-600 hover:bg-red-700 text-white font-semibold rounded-xl p-6 flex flex-col items-center justify-center shadow-lg transition">
                <i class="fas fa-envelope text-3xl mb-2"></i>
                <span>Emails</span>
            </a>

            <a href="{{ route('account.settings') }}" class="bg-red-600 hover:bg-red-700 text-white font-semibold rounded-xl p-6 flex flex-col items-center justify-center shadow-lg transition">
                <i class="fas fa-cog text-3xl mb-2"></i>
                <span>Account Settings</span>
            </a>
        </div>

        <!-- Optional: Quick stats or summary -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl shadow p-6 text-center">
                <h3 class="text-xl font-semibold text-red-700">Total Blood Bags</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ $totalBloodBags }}</p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6 text-center">
                <h3 class="text-xl font-semibold text-red-700">Total Donors</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ $totalDonors }}</p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6 text-center">
                <h3 class="text-xl font-semibold text-red-700">Active Emails</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ $totalEmails }}</p>
            </div>
        </div>

    </div>
</div>
@endsection
