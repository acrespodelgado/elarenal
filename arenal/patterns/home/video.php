<div id="video-promocional">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>50 Años <span class="accent">formando futuro</span></h3>
            </div>
            <?php
            $video_url = get_site_url() . '/documentos/PROMO CPIF EL ARENAL 2026.mp4';
            $poster_url = get_site_url() . '/documentos/PROMO_CPIF_EL_ARENAL_2026-poster.png';
            ?>
            <div class="video-wrapper" style="margin:0 auto;">
                <video
                    class="w-100"
                    controls
                    preload="metadata"
                    playsinline
                    poster="<?php echo esc_url($poster_url); ?>"
                    aria-label="<?php echo esc_attr__('Video institucional', 'arenal'); ?>"
                >
                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                    <?php printf( '<p>%s <a href="%s">%s</a></p>',
                        esc_html__( 'Tu navegador no soporta el elemento <video>. Puedes descargar el video aquí:', 'arenal' ),
                        esc_url( $video_url ),
                        esc_html__( 'Descargar video', 'arenal' )
                    ); ?>
                </video>
            </div>
        </div>
    </div>
</div>