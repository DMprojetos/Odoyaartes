<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>

<div class="creditos" id="creditos">
    <p>&copy; <?php echo date("Y"); ?> Direitos Autorais <a href="https://dmprojetos.com">DMprojetos.com</a></p>
    <p id="frase"></p> <!-- Um elemento separado para a frase -->
</div>

<script>
    const frase = 'Deus não escolhe os capacitados, Ele capacita os escolhidos.'; // Frase estática
    let charIndex = 0;
    let typingInterval;

    function digitarTexto() {
        const fraseElement = document.getElementById('frase');
        if (charIndex < frase.length) {
            fraseElement.textContent += frase.charAt(charIndex); // Adiciona um caractere por vez
            charIndex++;
        } else {
            clearInterval(typingInterval); // Para a animação de digitação
            setTimeout(sumirFrase, 5000); // Espera 5 segundos antes de desaparecer
        }
    }

    function sumirFrase() {
        const fraseElement = document.getElementById('frase');
        fraseElement.textContent = ''; // Limpa a frase
        charIndex = 0; // Reinicia o índice de caracteres
        setTimeout(iniciarDigitação, 5000); // Espera 1 segundo antes de reiniciar a digitação
    }

    function iniciarDigitação() {
        const fraseElement = document.getElementById('frase');
        fraseElement.textContent = ''; // Limpa o conteúdo antes de começar a digitar
        typingInterval = setInterval(digitarTexto, 100); // Digita um caractere a cada 100ms
    }

    // Inicia o ciclo de digitação
    iniciarDigitação(); // Inicia a primeira digitação
</script>

<style>
    .creditos {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        padding: 20px 0;
        background-color: #A9DCDF; /* Azul mar */
        color: black; /* Texto preto */
    }

    .creditos a {
        text-decoration: none;
        color: white; /* Links em branco */
    }

    .creditos a:hover {
        color: #ccc; /* Cor ao passar o mouse sobre o link */
    }
</style>

	</body>
</html>
