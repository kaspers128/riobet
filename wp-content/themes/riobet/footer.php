<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>


	<footer class="footer">
		<div class="footer-icon">
            <div class="footer-icon__item">
                <div><img src="<?php echo (get_template_directory_uri())?>/img/visa.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/mastercard.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/payeer.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/bitcoin.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/yandex.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/qiwi.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/neteller.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/skrill.png" alt="" /></div>
            </div>
            <div class="footer-icon__item">
            <div><img src="<?php echo (get_template_directory_uri())?>/img/netent.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/amatic.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/microgaming.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/betsoft.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/evolution-gaming.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/ainsworth.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/habanero.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/evoplay.png" alt="" /></div>
            </div>
            <div class="footer-icon__item">
            <div>
                <img src="<?php echo (get_template_directory_uri())?>/img/yggdrasilgaming.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/endorphina.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/ezugi.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/playson.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/lucky_streak.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/pragmaticplay.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/quickspin.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/igrosoft.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/egt.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/tomhorn.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/playngo.png" alt="" /></div>
                <div><img src="<?php echo (get_template_directory_uri())?>/img/redtiger.png" alt="" /></div>
            </div>
        </div>
        <div class="dop-icon">
            <div>
                <img src="<?php echo (get_template_directory_uri())?>/img/license-logo.png" alt="">
            </div>
            <div>
                <img src="<?php echo (get_template_directory_uri())?>/img/fair-safe-gold.svg" alt="">
            </div>
            <div>
                <img src="<?php echo (get_template_directory_uri())?>/img/icon-18.png" alt="">
            </div>
        </div>
        <nav>
            <?php
                $args = array( 
                    'theme_location'=>'footer',
                    'menu_class'=>'footer-menu',
                    'container'=>'',
                    'depth'=> 0);
                wp_nav_menu($args);
            ?>
        </nav>
        <div class="copyright">
            <div class="container">
            Riobet.com is operated by RIOTECH N.V, with its registered address at: Curaçao, Netherlands Antilles, Wilhelminalaan 13 (license № 8048/JAZ2015-010)
            </div>
        </div>
	</footer>

    </div>
</main>

<div class="modal modal-auth popup">
    <div class="modal__title">Вход 
        <a href="#" class="closeModal modal__close">
            <svg viewBox="0 0 21.436 21.438" id="remove" xmlns="http://www.w3.org/2000/svg"><path d="M21.053 17.784c.252.253.381.564.383.923 0 .36-.131.673-.383.927l-1.418 1.417a1.252 1.252 0 0 1-.926.383c-.361 0-.674-.125-.929-.38l-7.057-7.06-7.04 7.039c-.27.268-.586.404-.945.404-.36 0-.671-.131-.924-.387l-1.42-1.417a1.271 1.271 0 0 1-.384-.924c0-.364.126-.671.384-.926l7.057-7.06-7.037-7.04A1.323 1.323 0 0 1 0 2.75c-.009-.354.127-.671.395-.939L1.815.393A1.26 1.26 0 0 1 2.74.009c.355.006.666.127.924.387l7.06 7.06L17.76.416c.27-.271.582-.406.938-.415a1.25 1.25 0 0 1 .937.393l1.418 1.418c.255.255.383.567.383.929 0 .36-.128.669-.383.926l-7.06 7.06 7.06 7.057z"></path></svg>
        </a>
    </div>
    <div class="modal__body">
        <div class="modal__line">
            <input type="email" placeholder="Email" class="input" />
        </div>
        <div class="modal__line">
            <input type="password" placeholder="Пароль" class="input" />
        </div>
        <a href="#" class="forgein-pass">Забыли пароль?</a>
    </div>
    <div class="modal__bottom">
        <button type="submit" class="btn btn-style">Вход</button>
    </div>
</div>
<div class="modal modal-reg popup">
    <div class="modal__title">Регистрация 
        <a href="#" class="closeModal modal__close">
            <svg viewBox="0 0 21.436 21.438" id="remove" xmlns="http://www.w3.org/2000/svg"><path d="M21.053 17.784c.252.253.381.564.383.923 0 .36-.131.673-.383.927l-1.418 1.417a1.252 1.252 0 0 1-.926.383c-.361 0-.674-.125-.929-.38l-7.057-7.06-7.04 7.039c-.27.268-.586.404-.945.404-.36 0-.671-.131-.924-.387l-1.42-1.417a1.271 1.271 0 0 1-.384-.924c0-.364.126-.671.384-.926l7.057-7.06-7.037-7.04A1.323 1.323 0 0 1 0 2.75c-.009-.354.127-.671.395-.939L1.815.393A1.26 1.26 0 0 1 2.74.009c.355.006.666.127.924.387l7.06 7.06L17.76.416c.27-.271.582-.406.938-.415a1.25 1.25 0 0 1 .937.393l1.418 1.418c.255.255.383.567.383.929 0 .36-.128.669-.383.926l-7.06 7.06 7.06 7.057z"></path></svg>
        </a>
    </div>
    <form action="/" class="form-reg">
    <div class="modal__body">
        <div class="modal__line">
            <input type="email" placeholder="Email" name="mail" class="input" />
        </div>
        <div class="modal__line">
            <input type="password" placeholder="Пароль" name="password" class="input" />
        </div>
        <div class="modal__line">
            <select name="cur" class="input">
                <option value="1">Валюта в EUR</option>
                <option value="1">Валюта в mBTC</option>
                <option value="1" selected>Валюта в RUB</option>
                <option value="1">Валюта в UAH</option>
                <option value="1">Валюта в USD</option>
            </select>
        </div>
        <div class="modal__line">
            <input type="text" placeholder="Промокод(необязатель)" name="promokod" class="input" />
        </div>
    </div>
    <div class="modal__bottom">
        <button type="submit" class="btn btn-style">Регистрация</button>
        <div class="modal__line rul">С <a href="#">"Правилами и условиями"</a> согласен полностью и мой возраст старше 18 лет</div>
    </div>
    </form>
</div>
<div class="overlay"></div>
<script src="<?php echo (get_template_directory_uri())?>/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>