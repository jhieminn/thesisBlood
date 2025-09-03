<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to PulsePoint - Blood Donation Community</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            cursor: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="%23b91c1c" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>') 12 12, auto;
            background: linear-gradient(to bottom, #fecaca, #fee2e2, #fef2f2);
            min-height: 100vh;
        }
        
        .custom-cursor {
            cursor: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="%23b91c1c" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>') 12 12, auto;
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .slide {
            transition: all 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        }
        
        .hover-tooltip {
            position: relative;
        }
        
        .hover-tooltip::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #b91c1c;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }
        
        .hover-tooltip:hover::after {
            opacity: 1;
            visibility: visible;
        }
        
        .bg-gradient-radial {
            background: radial-gradient(circle, rgba(255,255,255,0.4) 0%, rgba(255,255,255,0) 70%);
        }
        
        /* 3D Cube Styles */
        .scene {
            width: 300px;
            height: 300px;
            perspective: 1000px;
            margin: 0 auto;
        }
        
        .cube {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transform: translateZ(-150px);
            transition: transform 1s;
        }
        
        .cube-face {
            position: absolute;
            width: 300px;
            height: 300px;
            border: 4px solid #b91c1c;
            border-radius: 8px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 0 20px rgba(185, 28, 28, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        
        .cube-face img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }
        
        .cube-face:hover img {
            transform: scale(1.1);
        }
        
        .cube-face-front  { transform: rotateY(0deg) translateZ(150px); }
        .cube-face-right  { transform: rotateY(90deg) translateZ(150px); }
        .cube-face-back   { transform: rotateY(180deg) translateZ(150px); }
        .cube-face-left   { transform: rotateY(-90deg) translateZ(150px); }
        .cube-face-top    { transform: rotateX(90deg) translateZ(150px); }
        .cube-face-bottom { transform: rotateX(-90deg) translateZ(150px); }
        
        .cube-controls {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            gap: 15px;
        }
        
        .cube-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #b91c1c;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 8px rgba(185, 28, 28, 0.3);
        }
        
        .cube-btn:hover {
            background: #991b1b;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(185, 28, 28, 0.4);
        }
        
        .cube-face-number {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #b91c1c;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            max-width: 90%;
            max-height: 90%;
            animation: zoom 0.3s;
            border: 3px solid #b91c1c;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(185, 28, 28, 0.5);
        }
        
        @keyframes zoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }
        
        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s;
        }
        
        .close:hover {
            color: #b91c1c;
        }
        
        .cube-title {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(185, 28, 28, 0.8);
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 16px;
            transform: translateY(100%);
            transition: transform 0.3s;
        }
        
        .cube-face:hover .cube-title {
            transform: translateY(0);
        }
    </style>
</head>
<body class="custom-cursor">

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-[#b91c1c] flex items-center justify-center rounded-full pulse">
                    <img src="{{ asset('gallery/character.png') }}" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 22s8-4.5 8-11a8 8 0 10-16 0c0 6.5 8 11 8 11z"/>
                    </svg>
                </div>
                <span class="font-bold text-2xl text-[#b91c1c]">PulsePoint</span>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex gap-8 items-center">
                <a href="#" class="text-gray-700 hover:text-[#b91c1c] transition-colors hover-tooltip" data-tooltip="Home">
                    <i class="fas fa-home mr-1"></i> Home
                </a>
                <a href="#" class="text-gray-700 hover:text-[#b91c1c] transition-colors hover-tooltip" data-tooltip="About Us">
                    <i class="fas fa-info-circle mr-1"></i> About
                </a>
                <a href="#" class="text-gray-700 hover:text-[#b91c1c] transition-colors hover-tooltip" data-tooltip="Find Donation Centers">
                    <i class="fas fa-map-marker-alt mr-1"></i> Locations
                </a>
                <a href="#" class="text-gray-700 hover:text-[#b91c1c] transition-colors hover-tooltip" data-tooltip="Blog & Articles">
                    <i class="fas fa-newspaper mr-1"></i> Blog
                </a>
                <a href="#" class="text-gray-700 hover:text-[#b91c1c] transition-colors hover-tooltip" data-tooltip="Contact Us">
                    <i class="fas fa-envelope mr-1"></i> Contact
                </a>
            </nav>

            <!-- Auth Buttons -->
            <div class="flex gap-3">
                <a href="/login" class="px-4 py-2 text-sm font-medium text-white bg-[#b91c1c] rounded-full hover:bg-[#991b1b] transition-colors hover-tooltip" data-tooltip="Login to Your Account">
                    <i class="fas fa-sign-in-alt mr-1"></i> Login
                </a>
                <a href="/register" class="px-4 py-2 text-sm font-medium border border-[#b91c1c] text-[#b91c1c] rounded-full hover:bg-[#b91c1c] hover:text-white transition-colors hover-tooltip" data-tooltip="Create an Account">
                    <i class="fas fa-user-plus mr-1"></i> Sign Up
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-[#8B0000] via-[#FF4C4C] to-[#FF0000] text-white min-h-screen flex items-center overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 bg-gradient-radial"></div>
        <div class="absolute top-20 left-10 w-20 h-20 bg-white opacity-10 rounded-full pulse"></div>
        <div class="absolute bottom-40 right-20 w-16 h-16 bg-white opacity-10 rounded-full pulse" style="animation-delay: 0.5s;"></div>
        <div class="absolute top-1/3 right-1/4 w-24 h-24 bg-white opacity-10 rounded-full pulse" style="animation-delay: 1s;"></div>
        
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row items-center justify-between relative z-10">
            <!-- Left - Welcome Text -->
            <div class="w-full md:w-1/2 text-center md:text-left mb-10 md:mb-0">
                <h1 class="text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg leading-tight">
                    SAVE LIVES WITH<br><span class="text-[#FFD5D5]">PULSEPOINT</span>
                </h1>
                <p class="text-xl mb-8 max-w-lg mx-auto md:mx-0">
                    Join our community of blood donors and make a difference today. Every donation can save up to three lives.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="/register" class="px-6 py-3 bg-white text-[#b91c1c] rounded-full font-semibold hover:bg-[#FFD5D5] transition-colors flex items-center justify-center">
                        <i class="fas fa-tint mr-2"></i> Become a Donor
                    </a>
                    <a href="#" class="px-6 py-3 border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-[#b91c1c] transition-colors flex items-center justify-center">
                        <i class="fas fa-search mr-2"></i> Find a Center
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="flex justify-around md:justify-start md:gap-12 mt-12">
                    <div class="text-center">
                        <div class="text-3xl font-bold">10K+</div>
                        <div class="text-sm">Active Donors</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold">50K+</div>
                        <div class="text-sm">Lives Saved</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold">100+</div>
                        <div class="text-sm">Partners</div>
                    </div>
                </div>
            </div>
            
            <!-- Right - 3D Cube Slideshow -->
            <div class="w-full md:w-1/2 flex flex-col items-center justify-center mt-10 md:mt-0">
                <h3 class="text-2xl font-bold mb-6 text-white text-center">Blood Donation Facts</h3>
                
                <div class="scene">
                    <div class="cube" id="cube">
                        <div class="cube-face cube-face-front">
                            <div class="cube-face-number">1</div>
                            <img src="{{ asset('gallery/img1.png') }}" >
                            <div class="cube-title">Did you know that?</div>
                        </div>
                        <div class="cube-face cube-face-back">
                            <div class="cube-face-number">2</div>
                            <img src="{{ asset('gallery/img2.png') }}">
                            <div class="cube-title">Did you know that?</div>
                        </div>
                        <div class="cube-face cube-face-right">
                            <div class="cube-face-number">3</div>
                            <img src="{{ asset('gallery/img3.png') }}">
                            <div class="cube-title">Did you know that?</div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="cube-controls">
                    <div class="cube-btn" id="prevBtn">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="cube-btn" id="nextBtn">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    <div class="cube-btn" id="spinBtn">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                </div>
                
                <p class="text-white mt-4 text-center">Click the image to zoom</p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 text-[#b91c1c]">Why Donate Blood?</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Your donation can make a significant impact in someone's life. Here's why you should consider becoming a donor.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-lg transition-shadow text-center">
                    <div class="w-16 h-16 bg-[#fee2e2] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heartbeat text-3xl text-[#b91c1c]"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Save Lives</h3>
                    <p class="text-gray-600">A single donation can save up to three lives. Your contribution matters.</p>
                </div>
                
                <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-lg transition-shadow text-center">
                    <div class="w-16 h-16 bg-[#fee2e2] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-stethoscope text-3xl text-[#b91c1c]"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Health Benefits</h3>
                    <p class="text-gray-600">Donating blood can help reduce iron overload and improve cardiovascular health.</p>
                </div>
                
                <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-lg transition-shadow text-center">
                    <div class="w-16 h-16 bg-[#fee2e2] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-3xl text-[#b91c1c]"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Community Support</h3>
                    <p class="text-gray-600">Join a community of donors making a tangible difference in people's lives.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-[#b91c1c] text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Make a Difference?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join thousands of donors who are saving lives every day. Your donation matters.</p>
            <a href="/register" class="inline-block px-8 py-4 bg-white text-[#b91c1c] rounded-full font-semibold hover:bg-[#FFD5D5] transition-colors">
                <i class="fas fa-tint mr-2"></i> Register as a Donor
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <div class="w-8 h-8 bg-[#b91c1c] flex items-center justify-center rounded-full mr-2">
                            <img src="{{ asset('gallery/character.png') }}" class="h-5 w-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 22s8-4.5 8-11a8 8 0 10-16 0c0 6.5 8 11 8 11z"/>
                            </svg>
                        </div>
                        PulsePoint
                    </h3>
                    <p class="text-gray-400">Connecting blood donors with those in need. Together, we can save lives.</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fas fa-angle-right mr-2"></i> Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fas fa-angle-right mr-2"></i> About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fas fa-angle-right mr-2"></i> Donate</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fas fa-angle-right mr-2"></i> Request Blood</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fas fa-angle-right mr-2"></i> Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fas fa-angle-right mr-2"></i> FAQs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fas fa-angle-right mr-2"></i> Eligibility</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fas fa-angle-right mr-2"></i> Tips</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center"><i class="fas fa-map-marker-alt mr-3 text-[#b91c1c]"></i> <span class="text-gray-400">123 Health St, Medical City</span></li>
                        <li class="flex items-center"><i class="fas fa-phone mr-3 text-[#b91c1c]"></i> <span class="text-gray-400">(123) 456-7890</span></li>
                        <li class="flex items-center"><i class="fas fa-envelope mr-3 text-[#b91c1c]"></i> <span class="text-gray-400">info@pulsepoint.org</span></li>
                    </ul>
                    
                    <div class="flex gap-4 mt-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-[#b91c1c] transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-[#b91c1c] transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-[#b91c1c] transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-[#b91c1c] transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 PulsePoint. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Modal for image view -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage" src="" alt="Enlarged view">
    </div>

    <!-- Scripts -->
    <script>
        // 3D Cube functionality
        const cube = document.getElementById('cube');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const spinBtn = document.getElementById('spinBtn');
        const cubeFaces = document.querySelectorAll('.cube-face');
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        
        let currentRotation = 0;
        let isSpinning = false;
        
        // Set initial rotation
        updateCubeRotation();
        
        // Previous button event
        prevBtn.addEventListener('click', () => {
            currentRotation -= 90;
            updateCubeRotation();
        });
        
        // Next button event
        nextBtn.addEventListener('click', () => {
            currentRotation += 90;
            updateCubeRotation();
        });
        
        // Spin button event
        spinBtn.addEventListener('click', () => {
            if (!isSpinning) {
                isSpinning = true;
                spinBtn.innerHTML = '<i class="fas fa-stop"></i>';
                
                const spinInterval = setInterval(() => {
                    currentRotation += 90;
                    updateCubeRotation();
                }, 800);
                
                // Stop spinning after 5 rotations
                setTimeout(() => {
                    clearInterval(spinInterval);
                    isSpinning = false;
                    spinBtn.innerHTML = '<i class="fas fa-sync-alt"></i>';
                }, 4000);
            }
        });
        
        // Update cube rotation
        function updateCubeRotation() {
            cube.style.transform = `translateZ(-150px) rotateY(${currentRotation}deg)`;
        }
        
        // Add click events to cube faces
        cubeFaces.forEach(face => {
            face.addEventListener('click', () => {
                const img = face.querySelector('img');
                modalImage.src = img.src;
                modal.style.display = 'flex';
            });
        });
        
        // Modal functionality
        function closeModal() {
            modal.style.display = 'none';
        }
        
        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target === modal) {
                closeModal();
            }
        }
        
        // Auto-rotate cube every 10 seconds
        setInterval(() => {
            if (!isSpinning) {
                currentRotation += 90;
                updateCubeRotation();
            }
        }, 10000);
    </script>
</body>
</html>