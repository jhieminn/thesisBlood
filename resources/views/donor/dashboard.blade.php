@extends('layouts.app')

@section('title', 'Donor Dashboard')

@section('content')
<header class="bg-gradient-to-r from-red-400 via-red-500 to-red-800 text-white py-6 px-8 rounded-t-2xl flex items-center justify-between shadow-lg mb-4 animate__animated animate__fadeInDown">
    <div class="flex items-center gap-3">
        
        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21c-4.97-4.97-8-8.06-8-11.5C4 5.36 7.36 2 12 2s8 3.36 8 7.5c0 3.44-3.03 6.53-8 11.5z"/>
        </svg>
        <h1 class="text-3xl font-extrabold tracking-wide animate__animated animate__fadeInLeft">Donor Dashboard</h1>
    </div>
    <span class="text-lg font-semibold flex items-center gap-1 animate__animated animate__fadeInRight">
        <svg class="w-6 h-6 text-white animate-pulse" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13v4l3 3-1.4 1.4L10 10.4V5h1z"/>
        </svg>
        Saving Lives
    </span>
</header>

<div class="bg-white rounded-b-2xl shadow-lg p-6 animate__animated animate__fadeInUp">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-red-50 p-6 rounded-xl shadow flex flex-col items-start hover:scale-105 transition-transform duration-300 animate__animated animate__zoomIn">
            <h3 class="text-xl font-semibold text-red-700 mb-2 flex items-center gap-2">
                <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm0 2c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4z"/>
                </svg>
                Your Profile
            </h3>
            <ul class="text-gray-700 space-y-1">
                <li><strong>Name:</strong> {{ Auth::user()->name }}</li>
                <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                <li><strong>Role:</strong> {{ Auth::user()->role }}</li>
            </ul>
            <button id="editProfileBtn" class="mt-4 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition-colors flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6-6 3 3-6 6H9v-3z"/>
                </svg>
                Edit Profile
            </button>
        </div>

        <div class="bg-red-50 p-6 rounded-xl shadow flex flex-col items-start hover:scale-105 transition-transform duration-300 animate__animated animate__zoomIn">
            <h3 class="text-xl font-semibold text-red-700 mb-2 flex items-center gap-2">
                <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.166 12.166A8 8 0 1112.166 2.166 8 8 0 012.166 12.166zm8.334-6.666a1 1 0 10-2 0v4a1 1 0 00.293.707l2.5 2.5a1 1 0 101.414-1.414l-2.207-2.207V5.5z"/>
                </svg>
                Donation History
            </h3>
            <ul class="text-gray-700 space-y-1">
                <li>
                    <svg class="inline w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/>
                    </svg>
                    Last Donation: <span class="font-semibold">2024-12-01</span>
                </li>
                <li>
                    <svg class="inline w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 10a8 8 0 1116 0A8 8 0 012 10zm8-4a1 1 0 100 2 1 1 0 000-2zm1 8H9v-2a1 1 0 112 0v2z"/>
                    </svg>
                    Total Donations: <span class="font-semibold">5</span>
                </li>
            </ul>
            <button id="viewHistoryBtn" class="mt-4 px-4 py-2 bg-red-700 text-white rounded hover:bg-red-800 transition-colors flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0A9 9 0 11 3 12a9 9 0 0118 0z"/>
                </svg>
                View Full History
            </button>
        </div>
    </div>

    <div class="mt-8 bg-gradient-to-r from-red-100 via-red-300 to-red-400 rounded-xl p-6 flex items-center gap-4 shadow animate__animated animate__pulse animate__infinite slow-pulse" id="fun-fact-section">
        <svg class="w-12 h-12 text-red-400 animate__animated animate__tada animate__delay-2s animate__repeat-2" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13v4l3 3-1.4 1.4L10 10.4V5h1z"/>
        </svg>
        <div>
            <h4 class="font-bold text-lg text-red-700 animate__animated animate__fadeInDown">Did You Know?</h4>
            <p class="text-gray-700 animate__animated animate__fadeInUp">A single blood donation can save up to <span class="font-bold text-red-600">three lives</span>! Thank you for being a hero.</p>
        </div>
    </div>
</div>

<footer class="mt-10 bg-gradient-to-r from-red-400 via-red-500 to-red-800 text-white py-4 px-8 rounded-b-2xl flex items-center justify-between shadow-lg animate__animated animate__fadeInUp">
    <span class="flex items-center gap-2">
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13v4l3 3-1.4 1.4L10 10.4V5h1z"/>
        </svg>
        &copy; {{ date('Y') }} Blood Donation Platform
    </span>
    <span class="text-sm animate__animated animate__fadeIn animate__delay-1s">Made with <span class="animate-pulse text-red-300">♥</span> for donors</span>
</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();

    document.querySelectorAll('button').forEach(btn => {
        btn.addEventListener('click', function(e) {
            let ripple = document.createElement('span');
            ripple.className = 'ripple';
            this.appendChild(ripple);

            let max = Math.max(this.offsetWidth, this.offsetHeight);
            ripple.style.width = ripple.style.height = max + 'px';
            ripple.style.left = e.offsetX - max/2 + 'px';
            ripple.style.top = e.offsetY - max/2 + 'px';

            setTimeout(() => ripple.remove(), 600);
        });
        // Button hover effect
        btn.addEventListener('mouseenter', function() {
            this.classList.add('animate__headShake');
        });
        btn.addEventListener('mouseleave', function() {
            this.classList.remove('animate__headShake');
        });
    });

    // Fun fact animation on hover, slower effect
    const funFact = document.getElementById('fun-fact-section');
    funFact.addEventListener('mouseenter', function() {
        this.classList.add('animate__heartBeat');
    });
    funFact.addEventListener('mouseleave', function() {
        this.classList.remove('animate__heartBeat');
    });

    // Fade in content on scroll
    window.addEventListener('scroll', function() {
        document.querySelectorAll('.animate__fadeInUp').forEach(function(el) {
            const rect = el.getBoundingClientRect();
            if(rect.top < window.innerHeight) {
                el.classList.add('animate__fadeInUp');
            }
        });
    });
</script>
<style>
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255,255,255,0.5);
        transform: scale(0);
        animation: ripple 0.6s linear;
        pointer-events: none;
        z-index: 10;
    }
    button {
        position: relative;
        overflow: hidden;
    }
    @keyframes ripple {
        to {
            transform: scale(2.5);
            opacity: 0;
        }
    }
    /* Slower pulse for fun fact */
    .slow-pulse {
        animation-duration: 3s !important;
    }
</style>
@endsection
