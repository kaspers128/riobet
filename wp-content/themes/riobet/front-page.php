<?php
/*
Template Name: MainPage
Шаблон главной страницы
*/
?>
<?php 
get_header();

//slider param
$argsSlider = array(
    'cat' => 8,
    'posts_per_page' => 10,
    'orderby' => 'date',
);
$slider = new WP_Query($argsSlider);

//mainmenu param
$argsMainMenu = array( 
    'theme_location'=>'left',
    'container'=>'',
    'depth'=> 0);

//popular param
$argsPopular = array(
    'cat' => 5,
	'posts_per_page' => 6,
	'orderby' => 'rand',
);

$popular = new WP_Query($argsPopular);


//new
$argsNew = array(
    'cat' => 6,
    'posts_per_page' => 6,
    'orderby' => 'date',
);

$new = new WP_Query($argsNew);

?>

<section class="slider">
    <a href="#" class="slider__str slider__prev">
        <svg viewBox="0 0 8.898 14.784" id="slider-arrow" xmlns="http://www.w3.org/2000/svg"><path d="M7.773 14.784a1.03 1.03 0 0 1-.73-.303L0 7.439 7.136.303a1.03 1.03 0 1 1 1.46 1.459L2.92 7.439l5.583 5.583a1.031 1.031 0 0 1-.73 1.762z"></path></svg>
    </a>
    <div class="slider__inner">
    <?    
        if($slider->have_posts()) {
            while($slider->have_posts()){ $slider->the_post();?>
                <div class="slider__item">
                    <img src="<? the_field("slider-img"); ?>" alt="" />
                    <div class="slider__info">
                        <div class="slider__title"><? the_field("slider-text"); ?></div>
                        <div class="slider__btn">
                            <a href="#" class="btn btn-style"><? the_field("slider-btn"); ?></a>
                        </div>
                    </div>
                </div>
            <? }
        }
        wp_reset_postdata();
    ?>
    </div>
    <a href="#" class="slider__str slider__next">
        <svg viewBox="0 0 8.898 14.784" id="slider-arrow" xmlns="http://www.w3.org/2000/svg"><path d="M7.773 14.784a1.03 1.03 0 0 1-.73-.303L0 7.439 7.136.303a1.03 1.03 0 1 1 1.46 1.459L2.92 7.439l5.583 5.583a1.031 1.031 0 0 1-.73 1.762z"></path></svg>
    </a>
</section>
<nav>
    <?php
        wp_nav_menu($argsMainMenu);
    ?>
</nav>
<section class="main-wrap">
    <div class="content">
        <div class="content__item">
            <div class="h2">
                <svg viewBox="0 0 41.499 53.284" id="popular-games" xmlns="http://www.w3.org/2000/svg"><path fill="#D5B577" d="M38.507 35.521c-.048-.626-.206-1.272-.423-1.936-.089-11.28 3.415-15.954 3.415-15.954s-5.269.127-11.359 3.477a60.664 60.664 0 0 1-.382-.55c.187-4.574 1.073-9.141 2.359-12.518-.764.419-3.982 1.781-7.235 4.216C23.21 8.264 22.691 4.137 24.679 0 9.214 11.084.004 23.454 0 33.4c-.01 7.748 1.93 19.884 20.665 19.884 11.033 0 16.652-4.227 17.697-12.425l.248.248c-.048-.375-.076-.712-.117-1.066.124-1.407.145-2.893.014-4.52m-9.21 8.805c-1.207 2.104-1.812 2.724-9.577 2.944-7.762.22-9.206-1.469-10.637-4.11-4.086-7.535 1.069-12.288.773-11.737-.292.55-1.86 5.396 5.623 9.354-3.677-4.581 3.006-10.052 5.481-12.583 0 6.493 2.635 12.583 2.635 12.583s4.264-2.507 7.335-11.521c1.617 7.009 1.896 8.934-1.633 15.07"></path></svg>
                Популярные
            </div>
            <div class="game">
            <?
                if($popular->have_posts()) {
                    while($popular->have_posts()){ $popular->the_post();?>
                    <div class="game__item">
                        <div>
                            <div class="game__top">
                                <img src="<? the_field("img-game"); ?>" alt="">
                                <div class="labels">
                                    <? 
                                    $lab = get_field("new"); 
                                    foreach($lab as $l){ ?>
                                        <span class="label label-new"><?=$l;?></span>
                                    <? } ?>
                                </div>
                                <span class="info"><? the_field("percent"); ?></span>
                                <div class="game__hidden">
                                    <a href="#" class="game__play">Играть</a>
                                    <a href="<?=get_permalink()?>" class="game__demo">Демо</a>
                                </div>
                            </div>
                            <div class="game__name"><?=get_the_title();?></div>
                        </div>
                    </div>
                    <? }
                    }
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <div class="content__item">
            <div class="h2">
                <svg viewBox="0 0 42.002 34.995" id="fresh-games" xmlns="http://www.w3.org/2000/svg"><path fill="#D5B577" d="M40.062.942a18.563 18.563 0 0 1 1.822 6.165c.241 2.166.116 4.524-.393 7.058-1.313 7.116-5.544 12.517-12.687 16.211-3.368 1.796-6.777 2.689-10.217 2.689-2.256 0-4.494-.394-6.731-1.18a7.396 7.396 0 0 1-.992-.438 35.31 35.31 0 0 1-.974-.545c-.429-.236-.849-.46-1.26-.67-.42-.215-.777-.317-1.09-.317-.139.031-.309.156-.505.38a12.47 12.47 0 0 0-.612.769 17.12 17.12 0 0 0-.58.897 9.431 9.431 0 0 1-.447.732c-.205.335-.397.639-.58.907-.179.272-.349.509-.492.715-.361.455-.83.679-1.402.679h-.085a2.774 2.774 0 0 1-1.085-.272 2.698 2.698 0 0 1-1.179-1.161c-.107-.21-.184-.376-.21-.496-.394-.536-.469-1.107-.215-1.706.291-.773.692-1.421 1.22-1.952a24.29 24.29 0 0 1 1.555-1.416c.429-.34.795-.652 1.108-.947.316-.291.518-.604.599-.938a.345.345 0 0 0 0-.264 6.48 6.48 0 0 0-.215-.549 4.468 4.468 0 0 1-.25-.599 6.435 6.435 0 0 1-.215-.777c-.357-2.337-.268-4.494.286-6.46a15.704 15.704 0 0 1 2.627-5.315 18.715 18.715 0 0 1 4.271-4.061 21.916 21.916 0 0 1 5.146-2.653c1.197-.42 2.516-.666 3.932-.737 1.429-.076 2.912-.125 4.458-.156.894 0 1.818-.014 2.778-.04a24.41 24.41 0 0 0 2.801-.246 12.142 12.142 0 0 0 2.483-.621c.76-.29 1.381-.683 1.858-1.197.291-.29.572-.589.849-.889.264-.313.545-.571.827-.795.29-.219.599-.397.938-.536.347-.144.772-.211 1.289-.211.331 0 .639.085.93.255.281.17.495.392.639.687m-10.051 15.22c.482.066.902-.085 1.26-.434.361-.335.554-.746.58-1.224.027-.519-.12-.938-.442-1.287-.335-.348-.75-.536-1.264-.563-2.145-.085-4.173.036-6.066.366a23.335 23.335 0 0 0-5.405 1.608 23.128 23.128 0 0 0-4.896 2.912c-1.56 1.197-3.064 2.649-4.521 4.355-.335.397-.491.831-.464 1.305.026.474.241.875.634 1.197.295.259.67.402 1.117.411.54 0 .991-.197 1.357-.59 1.313-1.487 2.636-2.766 3.967-3.833a18.548 18.548 0 0 1 4.19-2.56 19.076 19.076 0 0 1 4.65-1.358c1.621-.26 3.391-.363 5.303-.305"></path></svg>
                Новинки
            </div>
            <div class="game">
            <?
            if($new->have_posts()) {
                while($new->have_posts()){ $new->the_post();?>
                    <div class="game__item">
                        <div>
                            <div class="game__top">
                                <img src="<? the_field("img-game"); ?>" alt="">
                                <div class="labels">
                                    <? 
                                    $lab = get_field("new"); 
                                    foreach($lab as $l){ ?>
                                        <span class="label label-new"><?=$l;?></span>
                                    <? } ?>
                                </div>
                                <span class="info"><? the_field("percent"); ?></span>
                                <div class="game__hidden">
                                    <a href="#" class="game__play">Играть</a>
                                    <a href="<?=get_permalink()?>" class="game__demo">Демо</a>
                                </div>
                            </div>
                            <div class="game__name"><?=get_the_title();?></div>
                        </div>
                    </div>
                <? }
            }
                wp_reset_postdata();?>
            </div>
        </div>

        <a href="#" class="btn btn-style2 btn-100 all-games">Все игры</a>

        <div class="main-text">
            <h1><?the_title();?></h1>
            <? the_content(); ?>
        </div>

    </div>
    <aside class="aside-top">
        <div class="container">
            <div class="aside-top__head">
                <div class="h2 with-icon">
                    <svg viewBox="0 0 24.832 26.28" id="jackpot-bag" xmlns="http://www.w3.org/2000/svg"><path d="M15.994.683l-.726 1.213a.491.491 0 0 1-.841-.503l.616-1.03a9.656 9.656 0 0 0-4.688-.142l1.048 2.839a.49.49 0 1 1-.918.339L9.405.477a9.72 9.72 0 0 0-1.955.886l2.379 3.985a8.137 8.137 0 0 1 5.579.148l2.26-3.954a9.681 9.681 0 0 0-1.674-.859M22.142 22.601v-5.917c0-5.372-4.354-9.727-9.726-9.727S2.69 11.312 2.69 16.684v5.917A4.161 4.161 0 0 0 0 26.28h24.832a4.164 4.164 0 0 0-2.69-3.679m-9.159-1.329v1.646h-1.311v-1.551c-1.008-.032-2.015-.319-2.59-.703l.432-1.502c.624.368 1.518.703 2.492.703 1.009 0 1.695-.496 1.695-1.263 0-.719-.559-1.182-1.742-1.613-1.678-.608-2.766-1.375-2.766-2.862 0-1.375.959-2.429 2.573-2.717V9.844h1.312v1.485c1.007.033 1.695.272 2.206.528l-.432 1.471c-.385-.175-1.088-.543-2.174-.543-1.119 0-1.52.575-1.52 1.119 0 .655.575 1.023 1.935 1.567 1.791.671 2.59 1.534 2.59 2.957.002 1.357-.941 2.556-2.7 2.844"></path></svg> 
                    Джекпот
                </div>
                <a href="#" class="jackpot-top">
                    <div class="jackpot-top__title">Mega Molah</div>
                    <div class="jackpot-top__img">
                        <img src="<?php echo (get_template_directory_uri())?>/img/jackpot-top.jpeg" alt="">
                    </div>
                    <div class="jackpot-top__sum">427 964 384 <span>₽</span></div>
                </a>
            </div>
        </div>
    </aside>
    <aside class="aside-bottom">
        <div class="container">
            <div class="h2 with-icon">
                <svg viewBox="0 0 38.911 35.914" id="winners" xmlns="http://www.w3.org/2000/svg"><path fill="#D5B577" d="M38.911 8.231v2.993c0 1.107-.328 2.222-.97 3.344-.647 1.123-1.52 2.136-2.619 3.04-1.099.904-2.448 1.668-4.045 2.28a15.918 15.918 0 0 1-5.04 1.041 12.49 12.49 0 0 1-2.221 2.222c-.593.53-1.006 1.095-1.228 1.695-.226.6-.339 1.298-.339 2.097 0 .838.234 1.547.713 2.124.475.577 1.235.861 2.28.861 1.169 0 2.21.358 3.122 1.068.912.709 1.368 1.602 1.368 2.677v1.497c0 .218-.07.398-.21.538s-.32.207-.534.207H9.728c-.222 0-.397-.066-.538-.207s-.21-.32-.21-.538v-1.497c0-1.076.452-1.968 1.368-2.677a4.944 4.944 0 0 1 3.122-1.068c1.044 0 1.805-.285 2.276-.861.479-.577.717-1.286.717-2.124 0-.799-.117-1.497-.339-2.097-.23-.6-.636-1.166-1.228-1.695a12.49 12.49 0 0 1-2.221-2.222 15.85 15.85 0 0 1-5.04-1.041c-1.6-.612-2.946-1.376-4.047-2.28-1.097-.904-1.972-1.917-2.617-3.04C.323 13.446 0 12.331 0 11.224V8.231c0-.624.22-1.153.655-1.59s.964-.655 1.588-.655H8.98V3.742c0-1.029.362-1.91 1.099-2.643C10.811.366 11.692 0 12.721 0h13.465c1.033 0 1.914.366 2.646 1.099.733.732 1.099 1.613 1.099 2.643v2.245h6.73c.624 0 1.158.218 1.594.655s.656.965.656 1.589M10.71 17.655C9.556 15.13 8.98 12.238 8.98 8.98H2.993v2.245c0 1.216.739 2.479 2.212 3.789 1.471 1.308 3.307 2.189 5.505 2.641m25.208-6.431V8.979h-5.986c0 3.258-.577 6.15-1.73 8.675 2.198-.452 4.034-1.333 5.507-2.642s2.209-2.572 2.209-3.788"></path></svg>
                Победители
            </div>
            <div class="winners">
                <div class="winners__item winner">
                    <a href="#" class="winner__img">
                        <img src="<?php echo (get_template_directory_uri())?>/img/winner1.png" alt="" />
                    </a>
                    <div class="winner__info">
                        <a href="#" class="winner__name">Salex</a>
                        <div class="winner__time">выигрыш за последние 48ч</div>
                    </div>
                    <div class="winner__sum">154 042 <span>₽</span></div>
                </div>
                <div class="winners__item winner">
                    <a href="#" class="winner__img">
                        <img src="<?php echo (get_template_directory_uri())?>/img/winner1.png" alt="" />
                    </a>
                    <div class="winner__info">
                        <a href="#" class="winner__name">Salex</a>
                        <div class="winner__time">выигрыш за последние 48ч</div>
                    </div>
                    <div class="winner__sum">154 042 <span>₽</span></div>
                </div>
                <div class="winners__item winner">
                    <a href="#" class="winner__img">
                        <img src="<?php echo (get_template_directory_uri())?>/img/winner1.png" alt="" />
                    </a>
                    <div class="winner__info">
                        <a href="#" class="winner__name">Salex</a>
                        <div class="winner__time">выигрыш за последние 48ч</div>
                    </div>
                    <div class="winner__sum">154 042 <span>₽</span></div>
                </div>
                <div class="winners__item winner">
                    <a href="#" class="winner__img">
                        <img src="<?php echo (get_template_directory_uri())?>/img/winner1.png" alt="" />
                    </a>
                    <div class="winner__info">
                        <a href="#" class="winner__name">Salex</a>
                        <div class="winner__time">выигрыш за последние 48ч</div>
                    </div>
                    <div class="winner__sum">154 042 <span>₽</span></div>
                </div>
                <div class="winners__item winner">
                    <a href="#" class="winner__img">
                        <img src="<?php echo (get_template_directory_uri())?>/img/winner1.png" alt="" />
                    </a>
                    <div class="winner__info">
                        <a href="#" class="winner__name">Salex</a>
                        <div class="winner__time">выигрыш за последние 48ч</div>
                    </div>
                    <div class="winner__sum">154 042 <span>₽</span></div>
                </div>
                <div class="winners__item winner">
                    <a href="#" class="winner__img">
                        <img src="<?php echo (get_template_directory_uri())?>/img/winner1.png" alt="" />
                    </a>
                    <div class="winner__info">
                        <a href="#" class="winner__name">Salex</a>
                        <div class="winner__time">выигрыш за последние 48ч</div>
                    </div>
                    <div class="winner__sum">154 042 <span>₽</span></div>
                </div>
            </div>
        </div>
    </aside>
</section>



<?php 
    get_footer();
?>