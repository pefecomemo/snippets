<?php if (have_rows('nome_do_repetidor')) { ?>
    <div class="accordion" id="perguntasAccordion">
        <?php
            $contador = 0; 
            while (have_rows('nome_do_repetidor')) { 
            the_row(); 
            ++$contador;
            ?>
            <div class="accordion-item " id="perguntas<?php echo $contador; ?>">
                <h2 class="accordion-header" id="perguntaHeading<?php echo $contador; ?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#respostaContent<?php echo $contador; ?>" aria-expanded="true" aria-controls="respostaContent<?php echo $contador; ?>">
                      <?php echo get_sub_field('nome_do_campo_para_pergunta'); ?>
                    </button>
                </h2>
                <div id="respostaContent<?php echo $contador; ?>" class="accordion-collapse collapse show" aria-labelledby="perguntaHeading<?php echo $contador; ?>" data-bs-parent="#perguntasAccordion">
                    <div class="accordion-body">
                    <?php echo get_sub_field('nome_do_campo_para_resposta'); ?>
                    </div>
                </div>
            </div>
        <?php
        } ?>
    </div>
<?php } ?>