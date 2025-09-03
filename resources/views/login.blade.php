<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | PulsePoint</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        #pupils {
            transition: transform 0.2s ease;
        }
        
        #hands {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body class="bg-white text-gray-800 font-sans">

    <!-- Navbar -->
    <nav class="w-full flex justify-between items-center px-8 py-4 shadow-sm">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-[#b91c1c] flex items-center justify-center rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 22s8-4.5 8-11a8 8 0 10-16 0c0 6.5 8 11 8 11z"/>
                </svg>
            </div>
            <span class="font-bold text-xl text-[#b91c1c]">PulsePoint</span>
        </div>

        <!-- Nav links -->
        <div class="hidden md:flex gap-6 items-center">
            <a href="#" class="hover:text-[#b91c1c]">Home</a>
            <a href="#" class="hover:text-[#b91c1c]">Blogs</a>
            <a href="#" class="hover:text-[#b91c1c]">Need Blood</a>
            <a href="#" class="hover:text-[#b91c1c]">Donate Blood</a>
        </div>

        <!-- Buttons -->
        <div class="flex gap-3">
            <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-white bg-[#b91c1c] rounded hover:bg-[#991b1b]">Login</a>
            <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium border border-[#b91c1c] text-[#b91c1c] rounded hover:bg-[#b91c1c] hover:text-white">Sign-up</a>
        </div>
    </nav>

   <!-- Login Card -->
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-[#fee2e2] border border-[#b91c1c]/40 p-8 rounded-md w-full max-w-sm shadow-md">
        <h2 class="text-center text-lg font-bold text-[#b91c1c] mb-2">LOGIN</h2>
        
        <!-- Character SVG -->
        <div class="flex justify-center mb-4 pulse">
            <svg id="login-character" width="160" height="160" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg">
                <!-- Body with black pixel outline -->
                <path d="M0 0 C6.6 0 13.2 0 20 0 C20 6.6 20 13.2 20 20 C23.3 20 26.6 20 30 20 C30 26.6 30 33.2 30 40 C33.3 40 36.6 40 40 40 C40 46.6 40 53.2 40 60 C43.3 60 46.6 60 50 60 C50 63.3 50 66.6 50 70 C53.3 70 56.6 70 60 70 C60 76.6 60 83.2 60 90 C63.3 90 66.6 90 70 90 C70 93.3 70 96.6 70 100 C73.3 100 76.6 100 80 100 C80 103.3 80 106.6 80 110 C83.3 110 86.6 110 90 110 C90 116.6 90 123.2 90 130 C93.3 130 96.6 130 100 130 C100 133.3 100 136.6 100 140 C103.3 140 106.6 140 110 140 C110 143.3 110 146.6 110 150 C113.3 150 116.6 150 120 150 C120 153.3 120 156.6 120 160 C123.3 160 126.6 160 130 160 C130 163.3 130 166.6 130 170 C133.3 170 136.6 170 140 170 C140 173.3 140 176.6 140 180 C143.3 180 146.6 180 150 180 C150 186.6 150 193.2 150 200 C153.3 200 156.6 200 160 200 C160 219.8 160 239.6 160 260 C156.7 260 153.4 260 150 260 C150 263.3 150 266.6 150 270 C146.7 270 143.4 270 140 270 C140 273.3 140 276.6 140 280 C136.7 280 133.4 280 130 280 C130 283.3 130 286.6 130 290 C126.7 290 123.4 290 120 290 C120 293.3 120 296.6 120 300 C47.4 300 -25.2 300 -100 300 C-100 296.7 -100 293.4 -100 290 C-103.3 290 -106.6 290 -110 290 C-110 286.7 -110 283.4 -110 280 C-113.3 280 -116.6 280 -120 280 C-120 276.7 -120 273.4 -120 270 C-123.3 270 -126.6 270 -130 270 C-130 266.7 -130 263.4 -130 260 C-133.3 260 -136.6 260 -140 260 C-140 240.2 -140 220.4 -140 200 C-136.7 200 -133.4 200 -130 200 C-130 193.4 -130 186.8 -130 180 C-126.7 180 -123.4 180 -120 180 C-120 176.7 -120 173.4 -120 170 C-116.7 170 -113.4 170 -110 170 C-110 166.7 -110 163.4 -110 160 C-106.7 160 -103.4 160 -100 160 C-100 156.7 -100 153.4 -100 150 C-96.7 150 -93.4 150 -90 150 C-90 146.7 -90 143.4 -90 140 C-86.7 140 -83.4 140 -80 140 C-80 136.7 -80 133.4 -80 130 C-76.7 130 -73.4 130 -70 130 C-70 123.4 -70 116.8 -70 110 C-66.7 110 -63.4 110 -60 110 C-60 106.7 -60 103.4 -60 100 C-56.7 100 -53.4 100 -50 100 C-50 96.7 -50 93.4 -50 90 C-46.7 90 -43.4 90 -40 90 C-40 83.4 -40 76.8 -40 70 C-36.7 70 -33.4 70 -30 70 C-30 66.7 -30 63.4 -30 60 C-26.7 60 -23.4 60 -20 60 C-20 53.4 -20 46.8 -20 40 C-16.7 40 -13.4 40 -10 40 C-10 33.4 -10 26.8 -10 20 C-6.7 20 -3.4 20 0 20 C0 13.4 0 6.8 0 0 Z" fill="#E11D39" stroke="#141414" stroke-width="10" transform="translate(150,10)"/>
                <!-- Cute black eyes with pixel outline -->
                
                
                <!-- Pupils: slightly lighter black, bigger, moveable, with highlight for cuteness -->
                <ellipse id="pupil-left" cx="110" cy="180" rx="20" ry="20" fill="#222"/>
                <ellipse id="pupil-right" cx="210" cy="180" rx="20" ry="20" fill="#222"/>
                <ellipse cx="113" cy="170" rx="8" ry="8" fill="#fff" opacity="0.7"/>
                <ellipse cx="213" cy="170" rx="8" ry="8" fill="#fff" opacity="0.7"/>
                <!-- Smile: small at first, will animate width -->
                <path id="smile" d="M148 210 Q160 213 172 210" stroke="#141414" stroke-width="5" fill="none" stroke-linecap="round"/>
                <!-- Hands (for covering eyes) -->
                <g id="hands" opacity="0">
                    <rect x="70" y="150" width="32" height="22" fill="#141414" rx="6"/>
                    <rect x="218" y="150" width="32" height="22" fill="#141414" rx="6"/>
                </g>
            </svg>
        </div>

        <!-- Flash Message -->
        @if (session('status'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4 text-sm">
                {{ session('status') }}
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
                <input type="email" name="email" placeholder="Email"
                       class="w-full px-3 py-2 border-b border-gray-400 bg-transparent focus:outline-none focus:border-[#b91c1c]" required />
            </div>
            <div>
                <input type="password" name="password" placeholder="Password"
                       class="w-full px-3 py-2 border-b border-gray-400 bg-transparent focus:outline-none focus:border-[#b91c1c]" required />
            </div>

            <button type="submit"
                    class="w-full py-2 bg-[#b91c1c] hover:bg-[#991b1b] text-white rounded mt-4">
                Log In
            </button>
        </form>

        <div class="text-sm text-center mt-4">
            <a href="#" class="text-gray-600 hover:text-[#b91c1c]">Forgot Password?</a>
        </div>

        <div class="text-sm text-center mt-2 text-gray-600">
            New to PulsePoint? 
            <a href="{{ route('register') }}" class="text-[#b91c1c] font-semibold hover:underline">Sign up</a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const usernameInput = document.querySelector('input[name="email"]');
  const passwordInput = document.querySelector('input[name="password"]');
  const pupilLeft = document.getElementById('pupil-left');
  const pupilRight = document.getElementById('pupil-right');
  const hands = document.getElementById('hands');
  const smile = document.getElementById('smile');
  // Eye bounds
  const eyeLeft = { cx: 110, cy: 170, rx: 8, ry: 10 };
  const eyeRight = { cx: 210, cy: 170, rx: 8, ry: 10 };

  function moveEyesAndSmile() {
    const val = usernameInput.value;
    // Horizontal movement: -8 to +8
    let dx = Math.max(-8, Math.min(8, (val.length - 8)));
    // Vertical movement: look up for @, else center
    let dy = val.includes('@') ? -6 : 0;
    pupilLeft.setAttribute('cx', eyeLeft.cx + dx);
    pupilLeft.setAttribute('cy', eyeLeft.cy + 10 + dy);
    pupilRight.setAttribute('cx', eyeRight.cx + dx);
    pupilRight.setAttribute('cy', eyeRight.cy + 10 + dy);

    // Smile widens as email gets longer (min 20, max 60)
    let smileWidth = Math.min(60, 20 + val.length * 2);
    let left = 160 - smileWidth / 2;
    let right = 160 + smileWidth / 2;
    // Smile height increases a bit for extra cuteness
    let smileHeight = 13 + Math.min(7, val.length / 4);
    smile.setAttribute('d', `M${left} 210 Q160 ${210 + smileHeight} ${right} 210`);
  }

  usernameInput.addEventListener('input', moveEyesAndSmile);
  usernameInput.addEventListener('focus', moveEyesAndSmile);
  usernameInput.addEventListener('blur', function() {
    pupilLeft.setAttribute('cx', eyeLeft.cx);
    pupilLeft.setAttribute('cy', eyeLeft.cy + 10);
    pupilRight.setAttribute('cx', eyeRight.cx);
    pupilRight.setAttribute('cy', eyeRight.cy + 10);
    smile.setAttribute('d', `M148 210 Q160 213 172 210`);
  });

  passwordInput.addEventListener('focus', function() {
    hands.setAttribute('opacity', '1');
  });
  passwordInput.addEventListener('blur', function() {
    hands.setAttribute('opacity', '0');
  });
});
</script>
        
</body>
</html>