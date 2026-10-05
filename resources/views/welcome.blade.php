<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trickanglepicture - Elite Photography</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;400;600;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { 
            font-family: 'Outfit', sans-serif; 
            background-color: #050505; 
            color: #f5f5f5; 
        }
        
        .hero-bg {
            background-image: radial-gradient(circle at center, rgba(37, 150, 190, 0.2) 0%, rgba(5, 5, 5, 1) 70%), url('/images/trickanglepicture.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-blend-mode: overlay;
        }
        
        .text-scrub-word { opacity: 0.1; }
        main { overflow-x: hidden; max-width: 100vw; }
        
        .bento-card {
            position: relative;
            overflow: hidden;
            border-radius: 1.5rem;
            background-color: #111;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: border-color 0.5s ease;
        }
        
        .bento-card:hover {
            border-color: rgba(255, 152, 0, 0.4);
        }
        
        .bento-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        .bento-card:hover .bento-img {
            transform: scale(1.08);
        }
        
        .bento-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(5,5,5,0.95) 0%, rgba(5,5,5,0.2) 50%, transparent 100%);
        }
        
        /* Custom scrollbar for a premium feel */
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: #050505; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 5px; }
        ::-webkit-scrollbar-thumb:hover { background: #555; }
    </style>
</head>
<body class="antialiased selection:bg-[#ff9800] selection:text-white">

<main class="w-full">
    <!-- NAVIGATION (Glass Pill) -->
    <nav class="fixed top-6 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-5xl bg-white/5 backdrop-blur-xl border border-white/10 rounded-full px-6 py-4 flex items-center justify-between transition-all duration-300" id="mainNav">
        <a href="#" class="text-xl font-bold tracking-tight text-white flex items-center gap-3">
            <span class="w-8 h-8 rounded-full bg-[#ff9800] block shadow-[0_0_15px_rgba(255,152,0,0.5)]"></span>
            Trickanglepicture
        </a>
        <div class="hidden md:flex gap-10 text-sm font-medium text-gray-400">
            <a href="#portfolio" class="hover:text-white transition-colors">Portfolio</a>
            <a href="#services" class="hover:text-white transition-colors">Services</a>
            <a href="#contact" class="hover:text-white transition-colors">Contact</a>
        </div>
        <a href="#contact" class="bg-white text-black px-8 py-2.5 rounded-full text-sm font-bold hover:scale-105 transition-transform duration-300">Book Now</a>
    </nav>

    <!-- HERO SECTION (Attention) -->
    <section class="relative hero-bg h-[100svh] flex flex-col justify-center items-center text-center px-4 pt-20">
        <div class="absolute inset-0 bg-black/60 z-0"></div>
        <div class="z-10 w-full max-w-7xl mx-auto flex flex-col items-center mt-10">
            <h1 class="hero-text opacity-0 translate-y-12 text-[clamp(3.5rem,9vw,8.5rem)] font-black leading-[0.95] tracking-tighter mb-10 text-white">
                Capturing emotion <br>
                <span class="text-gray-500 font-medium italic tracking-normal">beyond</span> the lens.
            </h1>
            <div class="hero-btns opacity-0 translate-y-8 flex flex-col sm:flex-row gap-5 w-full sm:w-auto justify-center">
                <a href="#portfolio" class="bg-white text-black px-12 py-5 rounded-full text-lg font-bold hover:bg-gray-200 transition-colors shadow-[0_0_40px_rgba(255,255,255,0.2)]">
                    Lihat Portfolio
                </a>
                <a href="#contact" class="bg-transparent border border-white/20 text-white px-12 py-5 rounded-full text-lg font-medium hover:bg-white/10 transition-colors">
                    Booking Jadwal
                </a>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 opacity-50 flex flex-col items-center gap-2 animate-bounce">
            <span class="text-xs uppercase tracking-widest">Scroll</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </div>
    </section>

    <!-- SCRUBBING TEXT (Desire) -->
    <section id="services" class="py-32 md:py-56 px-6 w-full flex justify-center bg-[#050505]">
        <div class="max-w-6xl text-center">
            <p id="scrub-text" class="text-[clamp(2rem,5vw,4.5rem)] font-medium leading-[1.1] text-white tracking-tight">
                Setiap momen memiliki ceritanya sendiri. Kami tidak sekadar memotret, kami menangkap esensi murni yang tak akan terulang untuk kedua kalinya.
            </p>
        </div>
    </section>

    <!-- BENTO GRID (Interest) -->
    <section id="portfolio" class="py-24 md:py-32 px-4 md:px-8 w-full max-w-[1600px] mx-auto bg-[#050505]">
        <!-- Note: 4 columns. Total slots filled = 2x2(4) + 1x2(2) + 1x1(1) + 1x1(1) + 3x1(3) + 1x1(1) = 12 slots = 3 exact rows -->
        <div class="grid grid-cols-1 md:grid-cols-4 grid-flow-dense gap-4 md:gap-6 auto-rows-[350px]">
            
            <!-- Large Focus Card -->
            <div class="bento-card col-span-1 md:col-span-2 md:row-span-2 group gsap-card opacity-0 translate-y-16">
                <img src="/images/gallery1.webp" alt="Event Coverage" class="bento-img grayscale group-hover:grayscale-0" onerror="this.src='https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2000&auto=format&fit=crop'">
                <div class="bento-overlay"></div>
                <div class="absolute bottom-10 left-10 right-10 z-10 flex justify-between items-end">
                    <div>
                        <h3 class="text-4xl font-bold text-white mb-2">Sports & Action Events</h3>
                        <p class="text-gray-300 text-lg">Raw action and high-impact moments captured perfectly.</p>
                    </div>
                    <div class="w-14 h-14 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center group-hover:bg-white group-hover:text-black transition-colors duration-500 border border-white/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                </div>
            </div>

            <!-- Tall Portrait Card -->
            <div class="bento-card col-span-1 md:col-span-1 md:row-span-2 group gsap-card opacity-0 translate-y-16">
                <img src="/images/gallery2.webp" alt="Wedding" class="bento-img" onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1000&auto=format&fit=crop'">
                <div class="bento-overlay"></div>
                <div class="absolute bottom-10 left-8 right-8 z-10">
                    <h3 class="text-3xl font-bold text-white mb-2">Wedding & Prewed</h3>
                    <p class="text-sm text-gray-400">Timeless memories.</p>
                </div>
            </div>

            <!-- Small Square Card 1 -->
            <div class="bento-card col-span-1 md:col-span-1 md:row-span-1 group gsap-card opacity-0 translate-y-16 flex flex-col justify-center items-start p-10 bg-[#ff9800] border-none">
                <h3 class="text-6xl font-black text-black leading-none mb-3">500+</h3>
                <p class="text-black/80 font-bold text-lg">Projects<br>Delivered</p>
            </div>

            <!-- Small Square Card 2 -->
            <div class="bento-card col-span-1 md:col-span-1 md:row-span-1 group gsap-card opacity-0 translate-y-16">
                <img src="/images/gallery3.webp" alt="Event" class="bento-img opacity-60" onerror="this.src='https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=1000&auto=format&fit=crop'">
                <div class="bento-overlay bg-black/40"></div>
                <div class="absolute bottom-8 left-8 z-10">
                    <h3 class="text-2xl font-bold text-white">Event<br>Coverage</h3>
                </div>
            </div>

            <!-- Wide Card -->
            <div class="bento-card col-span-1 md:col-span-3 md:row-span-1 group gsap-card opacity-0 translate-y-16">
                <img src="/images/gallery4.webp" alt="Studio" class="bento-img" onerror="this.src='https://images.unsplash.com/photo-1600861194942-f883de0e815b?q=80&w=2000&auto=format&fit=crop'">
                <div class="bento-overlay"></div>
                <div class="absolute bottom-10 left-10 z-10 max-w-xl">
                    <h3 class="text-3xl font-bold text-white mb-3">Studio Sessions</h3>
                    <p class="text-gray-300 text-lg">Professional lighting and pristine environments for perfect, high-resolution portraits.</p>
                </div>
            </div>

            <!-- Final Info Card (WhatsApp CTA) -->
            <a href="https://wa.me/6281234567890" target="_blank" class="bento-card col-span-1 md:col-span-1 md:row-span-1 group gsap-card opacity-0 translate-y-16 flex items-center justify-center bg-[#25D366] border-none cursor-pointer no-underline block">
                <div class="text-center p-6">
                    <div class="w-20 h-20 mx-auto bg-white/20 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-white group-hover:text-[#25D366] transition-all duration-500 text-white">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.82 9.82 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
                    </div>
                    <span class="text-white font-bold text-xl leading-tight block">Tanya<br>Pricelist</span>
                </div>
            </a>
            
        </div>
    </section>

    <!-- ACTION FOOTER SECTION -->
    <section class="py-32 md:py-48 px-6 bg-white text-black text-center mt-48 rounded-t-[4rem] relative z-20">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-[clamp(3.5rem,7vw,6.5rem)] font-black leading-[0.95] mb-16 tracking-tighter">
                Let's create something <br>iconic together.
            </h2>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="mailto:trickanglepicture@gmail.com" class="bg-black text-white px-14 py-7 rounded-full text-xl font-bold hover:bg-[#ff9800] transition-colors shadow-2xl hover:-translate-y-2 transform duration-300">
                    trickanglepicture@gmail.com
                </a>
                <a href="https://instagram.com/trickanglepicture" target="_blank" class="bg-transparent border-2 border-black text-black px-14 py-7 rounded-full text-xl font-bold hover:bg-black hover:text-white transition-all duration-300">
                    DM on Instagram
                </a>
            </div>
        </div>
        
        <footer class="mt-40 pt-10 border-t border-black/10 flex flex-col md:flex-row justify-between items-center text-base font-medium text-gray-500">
            <p>&copy; 2026 Trickanglepicture. All rights reserved.</p>
            <div class="flex gap-8 mt-6 md:mt-0">
                <a href="#" class="hover:text-black transition-colors">Instagram</a>
                <a href="#" class="hover:text-black transition-colors">Twitter</a>
                <a href="#" class="hover:text-black transition-colors">Privacy Policy</a>
            </div>
        </footer>
    </section>
</main>

<!-- GSAP Core & ScrollTrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        gsap.registerPlugin(ScrollTrigger);

        // 1. Hero Entrance Animation
        const tl = gsap.timeline();
        tl.to(".hero-text", { y: 0, opacity: 1, duration: 1.5, ease: "power4.out", delay: 0.3 })
          .to(".hero-btns", { y: 0, opacity: 1, duration: 1.2, ease: "power3.out" }, "-=1");

        // 2. Scrubbing Text Reveal
        const textElement = document.getElementById('scrub-text');
        const words = textElement.innerText.split(' ');
        textElement.innerHTML = '';
        words.forEach(word => {
            const span = document.createElement('span');
            span.innerText = word + ' ';
            span.className = 'text-scrub-word inline-block';
            textElement.appendChild(span);
        });

        gsap.to(".text-scrub-word", {
            scrollTrigger: {
                trigger: "#scrub-text",
                start: "top 80%",
                end: "bottom 50%",
                scrub: 1,
            },
            opacity: 1,
            stagger: 0.1,
            ease: "none"
        });

        // 3. Staggered Bento Cards Reveal
        gsap.utils.toArray('.gsap-card').forEach((card, i) => {
            gsap.to(card, {
                scrollTrigger: {
                    trigger: card,
                    start: "top 85%",
                    toggleActions: "play none none reverse"
                },
                y: 0,
                opacity: 1,
                duration: 1.2,
                ease: "power3.out",
                delay: i * 0.1 // slight stagger if in same view
            });
        });
        
        // 4. Dynamic Navbar styling on scroll
        const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                nav.classList.add('bg-black/60', 'border-white/20');
                nav.classList.remove('bg-white/5', 'border-white/10');
            } else {
                nav.classList.add('bg-white/5', 'border-white/10');
                nav.classList.remove('bg-black/60', 'border-white/20');
            }
        });
    });
</script>

</body>
</html>
