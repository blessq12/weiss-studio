<div class="container-fluid hero-banner">
    <video 
        src="{{ asset('/assets/video/hero-background.mp4') }}"
        playsinline
        autoplay 
        muted 
        loop
    ></video>
    <div class="overlay"></div>
    <div class="container position-relative" style="z-index: 1">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <h2>Эстетика, естественность и любовь</h2>
                <h1>Студия аппаратной и эстетической косметологии и коррекции фигуры</h1>
                <h5 class="text-white">В наших силах вернуть естественный румянец, улучшить цвет и состояние кожи. Для натурального омоложения это самый приятный способ</h5>
                <div class="d-flex align-items-center">
                    <a href="tel:{{ $phone }}" class="mad_button" style="margin-right: 10px">Консультация</a>
                    <a href="{{ $waLink .'?text=Ответы на вопросы и консультация специалистов в этом чате' }}" target="_blank" class="mad_button style2">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
    <svg class="separator_type_5_path" preserveAspectRatio="none" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0 L70 100 L100.1 0 L100.1 100 L0 100 Z" fill="#fff" stroke="#fff" stroke-width="-1"></path>
        <path d="M0 0 L0 0 L50 100 L100 0 L100 0 Z" fill="transparent"></path>
    </svg>
</div>