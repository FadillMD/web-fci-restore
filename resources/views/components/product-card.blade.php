@props(['title', 'desc', 'img', 'link', 'isHot' => false])

<div class="overflow-hidden transition-all duration-500 transform bg-white border border-gray-100 shadow-sm group rounded-3xl hover:shadow-2xl hover:-translate-y-2">
    <div class="relative h-64 overflow-hidden">
        <img src="{{ $img }}" alt="{{ $title }}" class="object-cover w-full h-full transition duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
        
        @if($isHot)
            <span class="absolute top-4 left-4 bg-red-600 text-white text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-tighter">Safety Pick</span>
        @endif
    </div>
    
    <div class="p-8">
        <h3 class="mb-3 text-xl font-bold text-gray-900 transition group-hover:text-red-600">{{ $title }}</h3>
        <p class="mb-8 text-sm leading-relaxed text-gray-500 line-clamp-2">{{ $desc }}</p>
        
        <a href="{{ $link }}" class="flex items-center gap-2 text-sm italic font-black tracking-widest text-red-600 uppercase transition-all hover:gap-4">
            Lihat Detail 
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
    </div>
</div>