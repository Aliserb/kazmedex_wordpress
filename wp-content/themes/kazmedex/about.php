<?php
/*

	Template Name: о нас
 	Template Post Type: page

*/

get_header();
?>

	<div class="about-page-section">
        <div class="container">
            <h2 class="page-title">
                <?php the_title(); ?>
            </h2>

			<div class="about-content">
                <div class="about-text">
                    <div class="about-title">
                        <?php 
                        $my_lang = pll_current_language();  
                        if ( $my_lang == 'ru' ) { 
                            echo 'ТОО «КазМед Экспертиза»';
                        } elseif ( $my_lang == 'kk' ) { 
                            echo 'ЖШС <b>«КазМед Экспертиза»</b>';
                        } else { 
                            echo 'LLP <b>KazMed Expertiza</b>';
                        }
                        ?>
                    </div>

                    <div class="about-desc">
                        <?php 
                        $my_lang = pll_current_language();  
                        if ( $my_lang == 'ru' ) { 
                            echo 'ТОО «КазМед Экспертиза» имеет большой опыт в сфере здравоохранения в Республике Казахстан, в проектировании объектов здравоохранения и экспертизе стоимости и потребности медицинской техники, а также многолетний опыт взаимодействия с государственными органами
                            и квазигосударственными организациями. ТОО «КазМед Экспертиза» (далее – Товарищество) – эта команда квалифицированных специалистов предоставляющая свои услуги с 2017 года. ТОО «КазМед Экспертиза» имеет большой опыт в сфере здравоохранения
                            в Республике Казахстан, в проектировании объектов здравоохранения и экспертизе стоимости и потребности медицинской техники, а также многолетний опыт взаимодействия с государственными органами и квазигосударственными организациями.
                            ТОО «КазМед Экспертиза» (далее – Товарищество) – эта команда квалифицированных специалистов предоставляющая свои услуги с 2017 года.';
                        } elseif ( $my_lang == 'kk' ) { 
                            echo '"КазМед Экспертиза" ЖШС-нің Қазақстан Республикасында денсаулық сақтау саласында, денсаулық сақтау объектілерін жобалауда және медициналық техниканың құны мен қажеттілігін сараптауда үлкен тәжірибесі, сондай-ақ мемлекеттік органдар мен квазимемлекеттік ұйымдармен өзара іс-қимылда көп жылдық тәжірибесі бар. КазМед Экспертиза " ЖШС (бұдан әрі – серіктестік) - өз қызметтерін 2017 жылдан бері ұсынып келе жатқан білікті мамандар тобы. "КазМед Экспертиза" ЖШС-нің Қазақстан Республикасында денсаулық сақтау саласында, денсаулық сақтау объектілерін жобалауда және медициналық техниканың құны мен қажеттілігін сараптауда үлкен тәжірибесі, сондай-ақ мемлекеттік органдар мен квазимемлекеттік ұйымдармен өзара іс-қимылда көп жылдық тәжірибесі бар. КазМед Экспертиза " ЖШС (бұдан әрі – серіктестік) - өз қызметтерін 2017 жылдан бері ұсынып келе жатқан білікті мамандар тобы.';
                        } else { 
                            echo 'LLP "KazMed Expertiza" has extensive experience in the field of healthcare in the Republic of Kazakhstan, in the design of healthcare facilities and the examination of the cost and needs of medical equipment, as well as many years of experience in interaction with government agencies
                            and quasi-state organizations. KazMed Expertiza LLP (hereinafter referred to as the Partnership) is a team of qualified specialists providing their services since 2017. LLP "KazMed Expertiza" has extensive experience in the field of healthcare
                            in the Republic of Kazakhstan, in the design of healthcare facilities and the examination of the cost and needs of medical equipment, as well as many years of experience in interaction with government agencies and quasi-governmental organizations.
                            KazMed Expertiza LLP (hereinafter referred to as the Partnership) is a team of qualified specialists providing their services since 2017.';
                        }
                        ?>
                    </div>
                </div>

                <div class="about-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card/about-1.png" alt="about">
                </div>
            </div>

            <div class="about-content">
                <div class="about-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card/about-2.png" alt="about">
                </div>

                <div class="about-text">
                    <div class="about-title">
                        <?php 
                        $my_lang = pll_current_language();  
                        if ( $my_lang == 'ru' ) { 
                            echo 'ТОО «КазМед Экспертиза»';
                        } elseif ( $my_lang == 'kk' ) { 
                            echo 'ЖШС <b>«КазМед Экспертиза»</b>';
                        } else { 
                            echo 'LLP <b>KazMed Expertiza</b>';
                        }
                        ?>
                    </div>

                    <div class="about-desc">
                    <?php 
                        $my_lang = pll_current_language();  
                        if ( $my_lang == 'ru' ) { 
                            echo 'ТОО «КазМед Экспертиза» имеет большой опыт в сфере здравоохранения в Республике Казахстан, в проектировании объектов здравоохранения и экспертизе стоимости и потребности медицинской техники, а также многолетний опыт взаимодействия с государственными органами
                            и квазигосударственными организациями. ТОО «КазМед Экспертиза» (далее – Товарищество) – эта команда квалифицированных специалистов предоставляющая свои услуги с 2017 года. ТОО «КазМед Экспертиза» имеет большой опыт в сфере здравоохранения
                            в Республике Казахстан, в проектировании объектов здравоохранения и экспертизе стоимости и потребности медицинской техники, а также многолетний опыт взаимодействия с государственными органами и квазигосударственными организациями.
                            ТОО «КазМед Экспертиза» (далее – Товарищество) – эта команда квалифицированных специалистов предоставляющая свои услуги с 2017 года.';
                        } elseif ( $my_lang == 'kk' ) { 
                            echo '"КазМед Экспертиза" ЖШС-нің Қазақстан Республикасында денсаулық сақтау саласында, денсаулық сақтау объектілерін жобалауда және медициналық техниканың құны мен қажеттілігін сараптауда үлкен тәжірибесі, сондай-ақ мемлекеттік органдар мен квазимемлекеттік ұйымдармен өзара іс-қимылда көп жылдық тәжірибесі бар. КазМед Экспертиза " ЖШС (бұдан әрі – серіктестік) - өз қызметтерін 2017 жылдан бері ұсынып келе жатқан білікті мамандар тобы. "КазМед Экспертиза" ЖШС-нің Қазақстан Республикасында денсаулық сақтау саласында, денсаулық сақтау объектілерін жобалауда және медициналық техниканың құны мен қажеттілігін сараптауда үлкен тәжірибесі, сондай-ақ мемлекеттік органдар мен квазимемлекеттік ұйымдармен өзара іс-қимылда көп жылдық тәжірибесі бар. КазМед Экспертиза " ЖШС (бұдан әрі – серіктестік) - өз қызметтерін 2017 жылдан бері ұсынып келе жатқан білікті мамандар тобы.';
                        } else { 
                            echo 'LLP "KazMed Expertiza" has extensive experience in the field of healthcare in the Republic of Kazakhstan, in the design of healthcare facilities and the examination of the cost and needs of medical equipment, as well as many years of experience in interaction with government agencies
                            and quasi-state organizations. KazMed Expertiza LLP (hereinafter referred to as the Partnership) is a team of qualified specialists providing their services since 2017. LLP "KazMed Expertiza" has extensive experience in the field of healthcare
                            in the Republic of Kazakhstan, in the design of healthcare facilities and the examination of the cost and needs of medical equipment, as well as many years of experience in interaction with government agencies and quasi-governmental organizations.
                            KazMed Expertiza LLP (hereinafter referred to as the Partnership) is a team of qualified specialists providing their services since 2017.';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>