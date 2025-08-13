jQuery(document).ready(function($) {

    // Carousel opiniones
    const carousel = document.querySelector('#carouselOpiniones');

    if (carousel) {
        const prevBtn = carousel.querySelector('.carousel-control-prev');
        const nextBtn = carousel.querySelector('.carousel-control-next');

        function updateButtons() {
            const items = carousel.querySelectorAll('.carousel-item');
            const activeItem = carousel.querySelector('.carousel-item.active');
            const activeIndex = Array.from(items).indexOf(activeItem);

            prevBtn.style.display = activeIndex <= 0 ? 'none' : 'flex';
            nextBtn.style.display = activeIndex >= items.length - 1 ? 'none' : 'flex';
        }

        carousel.addEventListener('slid.bs.carousel', updateButtons);
        updateButtons();
    }

    // Función para manejar FAQs
    function handleFAQs() {
        $('.faq-item .faq-header').on('click', function() {
            const $faqItem = $(this).closest('.faq-item');
            const $content = $faqItem.find('.faq-content');
            const $icon = $(this).find('i');
            
            // Cerrar otros FAQs
            $('.faq-item').not($faqItem).removeClass('active')
                .find('.faq-content').slideUp();
            $('.faq-item').not($faqItem).find('i')
                .css('transform', 'rotate(0deg)');
            
            // Toggle actual FAQ
            $faqItem.toggleClass('active');
            if ($faqItem.hasClass('active')) {
                $content.slideDown();
                $icon.css('transform', 'rotate(90deg)');
            } else {
                $content.slideUp();
                $icon.css('transform', 'rotate(0deg)');
            }
        });
    }

    handleFAQs();

    // Función para cambiar la sección visible en la oferta educativa
    function carouselOferta() {
        const buttons = document.querySelectorAll('[data-target]');
        const sections = document.querySelectorAll('.oferta-contenido');

        if (buttons.length === 0 || sections.length === 0) return;

        buttons.forEach(btn => {
            btn.addEventListener('click', function () {
                // Ocultar todo
                sections.forEach(sec => sec.classList.add('d-none'));
                buttons.forEach(b => b.classList.remove('active'));

                // Mostrar seleccionado
                const target = this.getAttribute('data-target');
                const selected = document.querySelector(target);
                if (selected) {
                    selected.classList.remove('d-none');
                    this.classList.add('active');
                }
            });
        });
    }

    carouselOferta();
});
