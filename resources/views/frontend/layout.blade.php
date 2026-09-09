<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Let's Go Travels — Explore the World</title>

    <!-- Google Fonts: Poppins & Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/android-chrome-512x512.png') }}">

    <!-- Apple -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">

    <!-- Manifest -->
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        montserrat: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f1f9f1',
                            100: '#def2df',
                            200: '#bee5c0',
                            300: '#92d296',
                            400: '#5fb865',
                            500: '#168d19', // Primary Client Green
                            600: '#127a15',
                            700: '#116013',
                            800: '#124c14',
                            900: '#103f12',
                            950: '#052307', // Darkest Forest
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="font-poppins text-slate-800 bg-[#fbfdfc] antialiased">

    @include('frontend.header')


    @yield('content')

    <div class="fixed bottom-6 left-6 z-50 group flex items-center">
        <a href="https://wa.me/919933072153" target="_blank" rel="noopener noreferrer"
            class="relative w-12 h-12 rounded-xl bg-[#25D366] hover:bg-[#20ba5a] text-white flex items-center justify-center shadow-[0_10px_25px_rgba(37,211,102,0.4)] transition-all duration-300 hover:scale-110 active:scale-95 border border-white/20"
            aria-label="Chat on WhatsApp">
            <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-white border-2 border-[#25D366]"></span>
            </span>

            <i class="fa-brands fa-whatsapp text-2xl"></i>
        </a>

        <span
            class="hidden sm:inline-block absolute left-16 bg-slate-900 text-white font-montserrat font-bold text-xs px-3.5 py-1.5 rounded-lg shadow-xl border border-white/10 opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all duration-300 pointer-events-none whitespace-nowrap">
            Chat with Us
        </span>
    </div>

    <button id="backToTopBtn" onclick="scrollToTop()"
        class="fixed bottom-6 right-6 z-50 opacity-0 translate-y-10 pointer-events-none transition-all duration-300 group w-11 h-11 rounded-xl bg-slate-950/80 hover:bg-brand-600 text-white flex items-center justify-center backdrop-blur-md border border-white/15 shadow-xl hover:scale-105 active:scale-95"
        aria-label="Back to top">
        <i class="fa-solid fa-arrow-up text-sm transition-transform duration-300"></i>
    </button>

    @include('frontend.footer')

    <script>
        const backToTopBtn = document.getElementById('backToTopBtn');

        // Show button after scrolling down 300px
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
                backToTopBtn.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');
            } else {
                backToTopBtn.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
                backToTopBtn.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
            }
        });

        // Smooth Scroll to Top
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

    <!-- Hero Slider Script -->
    <script>
        let isMobileMenuOpen = false;
        const mobileDrawer = document.getElementById('mobileDrawer');
        const drawerOverlay = document.getElementById('drawerOverlay');
        const drawerBody = document.getElementById('drawerBody');

        function toggleMobileMenu() {
            isMobileMenuOpen = !isMobileMenuOpen;

            if (isMobileMenuOpen) {
                mobileDrawer.classList.remove('pointer-events-none');
                mobileDrawer.classList.add('pointer-events-auto');
                drawerOverlay.classList.remove('opacity-0', 'pointer-events-none');
                drawerOverlay.classList.add('opacity-100', 'pointer-events-auto');
                drawerBody.classList.remove('translate-x-full');
                drawerBody.classList.add('translate-x-0');
                document.body.style.overflow = 'hidden';
            } else {
                drawerOverlay.classList.remove('opacity-100', 'pointer-events-auto');
                drawerOverlay.classList.add('opacity-0', 'pointer-events-none');
                drawerBody.classList.remove('translate-x-0');
                drawerBody.classList.add('translate-x-full');
                setTimeout(() => {
                    mobileDrawer.classList.remove('pointer-events-auto');
                    mobileDrawer.classList.add('pointer-events-none');
                }, 300);
                document.body.style.overflow = 'auto';
            }
        }

        // Accordion Expand/Collapse Function
        function toggleAccordion(contentId, iconId) {
            const content = document.getElementById(contentId);
            const icon = document.getElementById(iconId);

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180', 'text-brand-600');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180', 'text-brand-600');
            }
        }
    </script>


    <script>
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.slider-dot');
        let currentSlide = 0;
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('opacity-0', 'pointer-events-none');
                    slide.classList.add('opacity-100', 'pointer-events-auto');
                } else {
                    slide.classList.remove('opacity-100', 'pointer-events-auto');
                    slide.classList.add('opacity-0', 'pointer-events-none');
                }
            });

            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-white/40');
                    dot.classList.add('bg-white', 'scale-125');
                } else {
                    dot.classList.remove('bg-white', 'scale-125');
                    dot.classList.add('bg-white/40');
                }
            });

            currentSlide = index;
        }

        document.getElementById('nextBtn').addEventListener('click', () => {
            let next = (currentSlide + 1) % totalSlides;
            showSlide(next);
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            let prev = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(prev);
        });

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => showSlide(i));
        });

        setInterval(() => {
            let next = (currentSlide + 1) % totalSlides;
            showSlide(next);
        }, 6000);
    </script>

    <!-- ==================== MODAL JAVASCRIPT ==================== -->
    <script>
        const searchModal = document.getElementById('searchModal');
        const searchInput = document.getElementById('modalSearchInput');

        function openSearchModal() {
            searchModal.classList.remove('hidden');
            searchInput.focus();
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        function closeSearchModal() {
            searchModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside box
        searchModal.addEventListener('click', (e) => {
            if (e.target === searchModal) {
                closeSearchModal();
            }
        });

        // Filter tour list dynamically
        function filterTours() {
            const query = searchInput.value.toLowerCase();
            const items = document.querySelectorAll('.tour-item');

            items.forEach(item => {
                const name = item.querySelector('.tour-name').innerText.toLowerCase();
                if (name.includes(query)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>

    <script>
        const promoSlides = document.querySelectorAll('.promo-slide');
        const promoDots = document.querySelectorAll('.promo-dot');
        let currentPromo = 0;
        const totalPromos = promoSlides.length;

        function showPromoSlide(index) {
            promoSlides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('opacity-0', 'pointer-events-none');
                    slide.classList.add('opacity-100', 'pointer-events-auto');
                } else {
                    slide.classList.remove('opacity-100', 'pointer-events-auto');
                    slide.classList.add('opacity-0', 'pointer-events-none');
                }
            });

            promoDots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-white/30');
                    dot.classList.add('bg-emerald-400', 'w-6');
                } else {
                    dot.classList.remove('bg-emerald-400', 'w-6');
                    dot.classList.add('bg-white/30');
                }
            });

            currentPromo = index;
        }

        // Initialize first dot style
        promoDots[0].classList.add('w-6');

        document.getElementById('promoNextBtn').addEventListener('click', () => {
            let next = (currentPromo + 1) % totalPromos;
            showPromoSlide(next);
        });

        document.getElementById('promoPrevBtn').addEventListener('click', () => {
            let prev = (currentPromo - 1 + totalPromos) % totalPromos;
            showPromoSlide(prev);
        });

        promoDots.forEach((dot, i) => {
            dot.addEventListener('click', () => showPromoSlide(i));
        });

        // Auto-slide every 5 seconds
        setInterval(() => {
            let next = (currentPromo + 1) % totalPromos;
            showPromoSlide(next);
        }, 5000);
    </script>

    <script>
        // Smooth scroll left and right
        function scrollTestimonials(direction) {
            const slider = document.getElementById('testiSlider');
            const scrollAmount = 360;
            slider.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }

        // Video Lightbox Handler
        function playVideo(videoUrl) {
            const modal = document.getElementById('videoModalBox');
            const iframe = document.getElementById('modalIframe');
            iframe.src = videoUrl + "?autoplay=1";
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeVideo() {
            const modal = document.getElementById('videoModalBox');
            const iframe = document.getElementById('modalIframe');
            iframe.src = "";
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Click outside to close
        document.getElementById('videoModalBox').addEventListener('click', function(e) {
            if (e.target === this) closeVideo();
        });
    </script>
</body>

</html>
