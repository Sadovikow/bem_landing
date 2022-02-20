<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дом в Софьино");
$APPLICATION->SetAdditionalCSS('/frontend/landing/fonts.css');
$APPLICATION->SetAdditionalCSS('/frontend/landing/styles.css');
$APPLICATION->SetAdditionalCSS('/frontend/landing/js/animate.min.css');
$APPLICATION->SetAdditionalCSS('/frontend/landing/js/fancybox.css');
use Bitrix\Main\Mail\Event;

?>

<div class="sofyno">
    <section class="sofyno__banner page-top page-top--landing">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="row">
                    <div class="s-banner col-md-12 wow fadeIn">
                        <div class="s-banner__left col-md-5">
                            <h1>Дом с Софьино</h1>
                            <div class="s-banner__descr">
                                Двухэтажный каменный дом в стиле Райт
                            </div>
                            <table class="s-banner__params">
                                <tbody>
                                    <tr class="s-banner__row">
                                        <td class="s-banner__icon"><img src="images/ploshyad.svg" alt="Расчетная площадь"></td>
                                        <td class="s-banner__lable">Расчетная площадь:</td>
                                        <td class="s-banner__value">266 м<sup>2</sup></td>
                                    </tr>
                                    <tr class="s-banner__row">
                                        <td class="s-banner__icon"><img src="images/spalni.svg" alt="Количество спален"></td>
                                        <td class="s-banner__lable">Количество спален:</td>
                                        <td class="s-banner__value">4</td>
                                    </tr>
                                    <tr class="s-banner__row">
                                        <td class="s-banner__icon"><img src="images/sanuzel.svg" alt="Количество санузлов"></td>
                                        <td class="s-banner__lable">Количество санузлов:</td>
                                        <td class="s-banner__value">4</td>
                                    </tr>
                                    <tr class="s-banner__row">
                                        <td class="s-banner__icon"><img src="images/arh.svg" alt="Архитектурный стиль"></td>
                                        <td class="s-banner__lable">Архитектурный стиль:</td>
                                        <td class="s-banner__value">Райт</td>
                                    </tr>
                                    <tr class="s-banner__row">
                                        <td class="s-banner__icon"><img src="images/steklo.svg" alt="Остекление"></td>
                                        <td class="s-banner__lable">Остекление:</td>
                                        <td class="s-banner__value">Панорамное</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="s-banner__order">
                                <div class="s-order row">
                                    <div class="s-order__left col-md-7">
                                        <a class="s-button s-button--order is-blicked" rel="nofollow" href="javascript:void(0);" data-fancybox data-type="ajax" data-src="form-consultation.php?ajax=y" title="Получить консультацию">Получить консультацию</a>
                                    </div>
                                    <div class="s-order__right col-md-5">
                                        <div class="s-order__price">25 940 руб за м<sup>2</sup></div>
                                        <div class="s-order__descr">6 900 000 руб</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- s-banner__left-->

                        <div class="s-banner__right col-md-7">
                            <div class="s-banner__images row">
                                <div class="s-banner__big-image col-md-12">
                                    <a data-fancybox="gallery" data-src="images/sofyno1.jpg" class="js-gallery" rel="group" title="Дом в Софьино" href="images/sofyno1.jpg"><img src="images/house1.png" alt="Дом в Софьино"></a>
                                </div>
                                <div class="s-banner__small-images col-md-12 hidden-xs hidden-sm">
                                    <div class="s-banner__list row">
                                        <div class="s-banner__image-item col-md-4">
                                            <a data-fancybox="gallery" data-src="images/sofyno2.jpg" class="js-gallery" rel="group" title="" href="images/sofyno2.jpg"><img src="images/house2.png" alt=""></a>
                                        </div>
                                        <div class="s-banner__image-item col-md-4">
                                            <a data-fancybox="gallery" data-src="images/sofyno3.jpg" class="js-gallery" rel="group" title="" href="images/sofyno3.jpg"><img src="images/house3.png" alt=""></a>
                                        </div>
                                        <div class="s-banner__image-item col-md-4">
                                            <a data-fancybox="gallery" data-src="images/sofyno4.jpg" class="js-gallery" rel="group" title="" href="images/sofyno4.jpg"><img src="images/house4.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- s-banner__right -->
                    </div> <!-- s-banner -->
                </div>
            </div>
        </div>
    </section> <!-- sofyno__top -->

    <section class="sofyno__about">
        <div class="row">
            <div class="maxwidth-theme">
                    <h2 class="wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" >О проекте</h2>
                    <div class="s-about clearfix wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s">
                        <div class="s-about__left col-md-6 js-readparent">
                            <p>
                                «Дом в Софьино» — это один из наиболее популярных двухэтажных коттеджей в стиле Райта. Внешние строгие очертания, придающие солидность данной постройки, отлично впишутся в любой пейзаж и не оставят равнодушным даже самого изысканного ценителя. Панорамные окна обеспечат много естественного света и простора, а тщательно-продуманная планировка позволит наслаждаться каждым днём, прожитым в этом доме. Проект «Дом в Софьино» прекрасно подходит для загородной жизни большой семьи
                            </p>
                            <p>
                                Первый этаж отдан совместному времяпрепровождению и развлечениям: просторная гостиная, светлая за счёт панорамных окон столовая, кухня с кладовой, гардеробная, а также совмещённый санузел и гостевая комната.
                            </p>
                            <p>
                                Второй этаж является зоной отдыха и уединения хозяев. Здесь удобно расположились три спальни, два санузла, большая гардеробная и кабинет хозяина с большими видовыми окнами. Таким личным зонам будут рады все — дети, родители и их гости.
                            </p>
                            <p class="hidden-lg hidden-md"><a class="js-readmore" rel="nofollow" href="javascript:void(0);">Читать далее →</a></p>
                        </div> <!-- s-about__left -->
                        <div class="s-about__right col-md-6">
                            <div class="s-about__osobennosty">
                                <div class="s-osobennosty">
                                    <div class="s-osobennosty__wrapper">
                                        <h3 class="hidden-xs">Особенности</h3>
                                        <div class="s-osobennosty__list clearfix">
                                            <div class="s-osobennosty__item">
                                                <div class="s-osobennosty__number">01</div>
                                                <div class="s-osobennosty__lable">Просторная гостиная, совмещенная с кухней</div>
                                            </div>
                                            <div class="s-osobennosty__item">
                                                <div class="s-osobennosty__number">02</div>
                                                <div class="s-osobennosty__lable">Отдельный кабинет</div>
                                            </div>
                                            <div class="s-osobennosty__item">
                                                <div class="s-osobennosty__number">03</div>
                                                <div class="s-osobennosty__lable">Мастер-спальня со своим санузлом</div>
                                            </div>
                                            <div class="s-osobennosty__item">
                                                <div class="s-osobennosty__number">04</div>
                                                <div class="s-osobennosty__lable">Две большие гардеробные на первом и втором этаже</div>
                                            </div>
                                            <div class="s-osobennosty__item">
                                                <div class="s-osobennosty__number">05</div>
                                                <div class="s-osobennosty__lable">Отдельное помещение для стирки и глажки</div>
                                            </div>
                                            <div class="s-osobennosty__item">
                                                <div class="s-osobennosty__number">06</div>
                                                <div class="s-osobennosty__lable">Кухня с кладовой</div>
                                            </div>
                                        </div>
                                        <div class="s-osobennosty__bottom hidden-xs">
                                            <a data-fancybox data-type="ajax" data-src="form-planirovka.php?ajax=y" href="javascript:void(0);" class="s-button s-button--transparent is-blicked">Обсудить планировку</a>
                                        </div>
                                    </div>
                                </div> <!-- s-osobennosty -->
                            </div>
                        </div> <!-- s-about__right -->
                    </div> <!-- s-about -->
                    <div class="s-planirovka col-md-12 clearfix wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s">
                        <div class="s-planirovka__item col-md-6">
                            <div class="s-planirovka__name">1 этаж</div>
                            <div class="s-planirovka__img">
                                <a data-fancybox="about" data-src="images/plan1.jpg" class="js-gallery" rel="group" title="Дом в Софьино" href="images/plan1.jpg"><img src="images/planirovka1.png" alt="Планировка дома в Софьино"></a>
                            </div>
                        </div>
                        <div class="s-planirovka__item col-md-6">
                            <div class="s-planirovka__name">2 этаж</div>
                            <div class="s-planirovka__img">
                                <a data-fancybox="about" data-src="images/plan2.jpg" class="js-gallery" rel="group" title="Дом в Софьино" href="images/plan2.jpg"><img src="images/planirovka2.png" alt="Планировка дома в Софьино"></a>
                            </div>
                        </div>
                    </div> <!-- s-planirovka -->
                    <div class="s-osobennosty__bottom hidden-md hidden-lg">
                        <a data-fancybox data-type="ajax" data-src="form-planirovka.php?ajax=y" href="javascript:void(0);" class="s-button s-button--transparent is-blicked">Обсудить планировку</a>
                    </div>
            </div>
        </div>
    </section> <!-- sofyno__about -->

    <section class="sofyno__complect wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
        <div class="row">
            <div class="maxwidth-theme">
                <h2>Комплектация</h2>
                <div class="s-complect col-md-12">
                    <div class="s-complect__tabs">
                        <div class="tabs toggle_block">
                            <div class="tabs__item toggleobject active" data-target="fundament" data-toggle_block="toggle_block">Фундамент</div>
                            <div class="tabs__item toggleobject" data-target="stenovoy" data-toggle_block="toggle_block">Стеновой комплект</div>
                            <div class="tabs__item toggleobject" data-target="krovlya" data-toggle_block="toggle_block">Кровля</div>
                            <div class="tabs__item toggleobject" data-target="engeneer" data-toggle_block="toggle_block"x>Инженерная система</div>
                        </div>
                    </div>
                    <div class="s-complect__list row">
                        <div class="s-complect__item  active toggle_target" id="fundament-content" data-toggle_block="toggle_block">
                            <div class="s-complect__left col-md-6">
                                <div class="s-complect__text">
                                    В базовую комплектацию проекта «Дом в Софьино» входит утепленный монолитный фундамент «плита с ребрами жесткости вверх» толщиной 200 мм. Бетонные ребра выполняют функцию цоколя, а также служат усиливающими элементами конструкции. Такой тип фундамента подходит практически для любого грунта. Кроме того, это позволяет сэкономить при последующих черновых работах.
                                </div>
                                <div class="s-complect__adds">
                                    <div class="s-complect__adds-item">Монолитная ж/б плита 200 мм с ребрами вверх</div>
                                    <div class="s-complect__adds-item">Утеплитель (XPS) ТЕХНОНИКОЛЬ CARBON ECO</div>
                                    <div class="s-complect__adds-item">Бетон класса B25</div>
                                    <div class="s-complect__adds-item">Арматура A500C</div>
                                </div>
                            </div>
                            <div class="s-complect__right col-md-6">
                                <img data-fancybox="complect" data-src="images/komplektaciya1.png" src="images/komplektaciya1.png" alt="Фундамент" class="s-complect__img">
                            </div>
                        </div>

                        <div class="s-complect__item toggle_target" id="stenovoy-content" data-toggle_block="toggle_block">
                            <div class="s-complect__left col-md-6">
                                <div class="s-complect__text">
                                    Основной материал стен дома – газобетон плотностью D500. Это крупноформатные экологически чистые блоки, обладающие превосходными теплотехническими и звукоизоляционными характеристиками. Дом из таких блоков возводится быстро, имеет высокие энергосберегающие показатели и здоровый микроклимат для всей вашей семьи. В базовой комплектации планировки дома свободные и мы бесплатно адаптируем их под состав вашей семьи.
                                </div>
                                <div class="s-complect__adds">
                                    <div class="s-complect__adds-item">Марка плотности D500</div>
                                    <div class="s-complect__adds-item">Точная геометрия блоков</div>
                                    <div class="s-complect__adds-item">Безопасность и экологичность</div>
                                    <div class="s-complect__adds-item">Экономия на отоплении</div>
                                    <div class="s-complect__adds-item">Хорошая тепло- и звукоизоляция</div>
                                    <div class="s-complect__adds-item">Долговечность</div>
                                </div>
                            </div>
                            <div class="s-complect__right col-md-6">
                                <img data-fancybox="complect" data-src="images/komplektaciya1.png" src="images/komplektaciya2.png" alt="Стеновой комплект" class="s-complect__img">
                            </div>
                        </div>

                        <div class="s-complect__item toggle_target" id="krovlya-content" data-toggle_block="toggle_block">
                            <div class="s-complect__left col-md-6">
                                <div class="s-complect__text">
                                    Крыша дома – вальмовая, с утеплением по перекрытию второго этажа. Такая кровля позволяет более эффективно отводить осадки, а также выглядит более эстетично по сравнению с традиционными двускатными кровлями. Финишное покрытие кровли – металлочерепица Grand Line Satin.
                                </div>
                                <div class="s-complect__adds">
                                    <div class="s-complect__adds-item">Вальмовая кровля</div>
                                    <div class="s-complect__adds-item">Утепление по перекрытию второго этажа</div>
                                    <div class="s-complect__adds-item">Утеплитель Технониколь Техноблок Стандарт, 100мм</div>
                                    <div class="s-complect__adds-item">Стропительная система с пароизоляцией</div>
                                    <div class="s-complect__adds-item">Обработка всех конструкций защитными составами</div>
                                    <div class="s-complect__adds-item">Металлочерепица Grand Line Satin 0,5</div>
                                </div>
                            </div>
                            <div class="s-complect__right col-md-6">
                                <img data-fancybox="complect" data-src="images/komplektaciya3.png" src="images/komplektaciya3.png" alt="Кровля" class="s-complect__img">
                            </div>
                        </div>

                        <div class="s-complect__item toggle_target" id="engeneer-content" data-toggle_block="toggle_block">
                            <div class="s-complect__left col-md-6">
                                <div class="s-complect__text">
                                    В базовом варианте наш дом уже имеет инженерную подготовку под системы отопления, водоснабжения, канализации и электрики. Благодаря используемому типу фундамента, прокладывать коммуникации можно по полу, значительно сэкономив средства на дальнейшую черновую отделку.
                                </div>
                                <div class="s-complect__adds">
                                    <div class="s-complect__adds-item">Скрытая электропроводка с выводами под розетки, выключатели и осветительные приборы – 34 точки</div>
                                    <div class="s-complect__adds-item">Разводка труб отопления по помещениям, выводы под радиаторы – 14 точек</div>
                                    <div class="s-complect__adds-item">Скрытая разводка труб ХВС, ГВС – 12 точек</div>
                                    <div class="s-complect__adds-item">Разводка шумоизолированных труб канализации – 7 точек</div>
                                </div>
                            </div>
                            <div class="s-complect__right col-md-6">
                                <img data-fancybox="complect" data-src="images/komplektaciya4.png" src="images/komplektaciya4.png" alt="Инженерная система" class="s-complect__img">
                            </div>
                        </div>
                    </div> <!-- s-complect__list -->
                </div>
            </div>
        </div>
    </section> <!-- sofyno__complect -->

    <div class="sofyno__added-wrapper wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
        <section class="sofyno__added">
            <div class="row">
                <div class="maxwidth-theme">
                    <h2>Дополнительно можно заказать</h2>
                    <div class="s-added col-md-12">
                        <div class="s-added__list">
                            <div class="s-added__item">
                                <div class="s-added__cell">
                                    Изменение строительных материалов проекта
                                </div>
                            </div>
                            <div class="s-added__item">
                                <div class="s-added__cell">
                                    Проектирование и монтаж фасадов
                                </div>
                            </div>
                            <div class="s-added__item">
                                <div class="s-added__cell">
                                    Строительство гаражей, беседок, заборов
                                </div>
                            </div>
                            <div class="s-added__item">
                                <div class="s-added__cell">
                                    Отопление, водоснабжение, электрику
                                </div>
                            </div>
                            <div class="s-added__item">
                                <div class="s-added__cell">
                                    Дизайн-проект дома и отделочные работы
                                </div>
                            </div>
                            <div class="s-added__item">
                                <div class="s-added__cell">
                                    Ландшафтный дизайн с реализацией проекта
                                </div>
                            </div>
                            <div class="s-added__item">
                                <div class="s-added__cell">
                                    Консалтинг в сфере домостроения
                                </div>
                            </div>
                            <div class="s-added__item">
                                <div class="s-added__cell">
                                    Газификация участка
                                </div>
                            </div>
                        </div> <!-- s-added__list -->
                        <div class="s-added__bottom">
                            <a data-fancybox data-type="ajax" data-src="form-price.php?ajax=y" href="javascript:void(0);" rel="nofollow" class="s-button is-blicked">Запросить точный расчет</a>
                        </div>
                    </div> <!-- s-added -->
                </div>
            </div>
        </section> <!-- sofyno__added -->
    </div>

    <section class="sofyno__quality wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
        <div class="s-quality row">
            <div class="maxwidth-theme">
                <div class="s-quality__left col-md-6">
                    <div class="s-quality__border">
                        <h3>Надежность и качество</h3>
                        <div class="s-quality__text">
                            Мы всегда исходим из правила строить, как для самих себя. За годы работы нами накоплен колоссальный опыт в строительстве, что позволяет выполнять работы максимально качественно и с соблюдением сроков.
                        </div>
                        <div class="s-quality__bottom">
                            <div class="s-quality__link">
                                <a href="javascript:void(0);" data-fancybox data-type="ajax" data-src="form-consultation.php?ajax=y" class="s__link">Получить консультацию →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-quality__right col-md-6">
                    <div class="s-quality__list">
                        <div class="s-quality__item">
                            <div class="s-quality__icon">
                                <img src="images/kachestvo1.svg" alt="">
                            </div>
                            <div class="s-quality__lable">
                                Используем современные и энергоэффективные строительные материалы
                            </div>
                        </div>
                        <div class="s-quality__item">
                            <div class="s-quality__icon">
                                <img src="images/kachestvo2.svg" alt="">
                            </div>
                            <div class="s-quality__lable">
                                Каждый этап стройки принимает независимый инженер технадзора
                            </div>
                        </div>
                        <div class="s-quality__item s-quality__item--bigmargin">
                            <div class="s-quality__icon">
                                <img src="images/kachestvo3.svg" alt="">
                            </div>
                            <div class="s-quality__lable">
                                Применяем технологии BIM-проектирования
                            </div>
                        </div>
                        <div class="s-quality__item s-quality__item--bigmargin">
                            <div class="s-quality__icon">
                                <img src="images/kachestvo4.svg" alt="">
                            </div>
                            <div class="s-quality__lable">
                                Соблюдаем все действующие СНиПы и ГОСТы
                            </div>
                        </div>
                        <div class="s-quality__item">
                            <div class="s-quality__icon">
                                <img src="images/kachestvo5.svg" alt="">
                            </div>
                            <div class="s-quality__lable">
                                Конструктивные решения разрабатываются исходя из лабораторных исследований грунта и архитектуры
                            </div>
                        </div>
                        <div class="s-quality__item">
                            <div class="s-quality__icon">
                                <img src="images/kachestvo6.svg" alt="">
                            </div>
                            <div class="s-quality__lable">
                                IT-решения для планирования оптимальных сроков стройки
                            </div>
                        </div>
                    </div>
                </div> <!-- s-quality__right -->
            </div>
        </div>
    </section> <!-- sofyno__quality -->

    <section class="sofyno__company wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="s-company__left col-md-12 hidden-lg hidden-md hidden-sm">
                    <img src="images/dc1.png" alt="Domconsult" class="s-company__image">
                </div> <!-- s-company__left -->
                <h2>Строительная компания, <br>которой есть чем гордиться</h2>
                <div class="s-company col-md-12">
                    <div class="row">
                        <div class="s-company__left col-md-3 hidden-xs">
                            <img src="images/dc1.png" alt="Domconsult" class="s-company__image">
                        </div> <!-- s-company__left -->
                        <div class="s-company__right col-md-9">
                            <p>
                                <b>Компания Domconsult основана в 2018 году специалистами-строителями</b>, опыт работы которых исчисляется не одним десятком лет. Основная цель нашей компании — предоставить заказчикам полный цикл работ, связанных со строительством частных частных домов в Москве и Московской области, а также обеспечение заказчика полным комфортом и спокойствием по принципу - <b>«вы заключаете с нами договор, а мы предоставляем вам готовое решение без хлопот!».</b>
                            </p>
                            <p>
                                Наши специалисты готовы взять на себя любые заботы от подготовки проекта будущего дома и получения необходимых разрешительных документов до непосредственного возведения объекта и его ввода в эксплуатацию!
                            </p>
                        </div> <!-- s-company__right -->
                    </div>
                </div> <!-- s-company -->
                <div class="s-company__list col-md-12">
                    <div class="s-company__item">
                        <div class="s-company__icon">
                            <img src="images/gordost1.svg" alt="Персональный менеджер">
                        </div>
                        <div class="s-company__lable">
                            Персональный менеджер, который закрепляется за вами навсегда
                        </div>
                    </div>
                    <div class="s-company__item">
                        <div class="s-company__icon">
                            <img src="images/gordost2.svg" alt="Регулярные фотоотчеты">
                        </div>
                        <div class="s-company__lable">
                            Регулярные фотоотчеты о ходе строительства
                        </div>
                    </div>
                    <div class="s-company__item">
                        <div class="s-company__icon">
                            <img src="images/gordost3.svg" alt="Экспертные консультации">
                        </div>
                        <div class="s-company__lable">
                            Экспертные консультации с любыми профильными специалистами
                        </div>
                    </div>
                    <div class="s-company__item">
                        <div class="s-company__icon">
                            <img src="images/gordost4.svg" alt="Регулярная аттестация">
                        </div>
                        <div class="s-company__lable">
                            Все сотрудники проходят регулярную аттестацию и обучение
                        </div>
                    </div>
                </div> <!-- s-company__list -->
                <div class="s-company__bottom col-md-12">
                    <a href="/company/" title="О компании" class="s-button">О компании</a>
                </div>
            </div>
        </div>
    </section> <!-- sofyno__company -->

    <section class="sofyno__steps wow fadeInUp" data-wow-delay="0" data-wow-duration="2s">
        <div class="row">
            <div class="maxwidth-theme">
                <h2>Этапы работы с нами</h2>

                <div class="s-steps col-md-12">
                    <div class="s-steps__table">
                        <div class="s-steps__row s-steps__row--numbers">
                            <div class="s-steps__cell s-steps__cell--number">
                                <div class="s-steps__number">01</div>
                            </div>
                            <div class="s-steps__cell s-steps__cell--number">
                                <div class="s-steps__number">02</div>
                            </div>
                            <div class="s-steps__cell s-steps__cell--number">
                                <div class="s-steps__number">03</div>
                            </div>
                            <div class="s-steps__cell s-steps__cell--number">
                                <div class="s-steps__number">04</div>
                            </div>
                        </div>
                        <div class="s-steps__row s-steps__row--title">
                            <div class="s-steps__cell s-steps__title">Консультация</div>
                            <div class="s-steps__cell s-steps__title">Договор</div>
                            <div class="s-steps__cell s-steps__title">Строительство</div>
                            <div class="s-steps__cell s-steps__title">Приемка объекта</div>
                        </div>
                        <div class="s-steps__row">
                            <div class="s-steps__cell">
                                <span class="s-steps__descr">
                                    <span class="s-steps__title hidden-lg hidden-md">Консультация</span>
                                    На встрече с нашими специалистами вы озвучиваете свои пожелания
                                </span>
                            </div>
                            <div class="s-steps__cell">
                                <span class="s-steps__descr">
                                    <span class="s-steps__title hidden-lg hidden-md">Договор</span>
                                    Заключаем договор с четкими сроками и фиксированной ценой
                                </span>
                            </div>
                            <div class="s-steps__cell">
                                <span class="s-steps__descr">
                                    <span class="s-steps__title hidden-lg hidden-md">Строительство</span>
                                    Выполняем строительные работы. Контроль качества на всех этапах
                                </span>
                            </div>
                            <div class="s-steps__cell">
                                <span class="s-steps__descr">
                                    <span class="s-steps__title hidden-lg hidden-md">Приемка объекта</span>
                                    Вводим в эксплуатацию реализованный под ключ объект
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- sofyno__steps -->

    <section class="sofyno__form wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.6s">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="s-form col-md-12">
                    <div class="s-form__border clearfix">
                        <div class="s-form__left col-md-7">
                            <h3>У вас уже есть проект? Интересует индивидуальное проектирование?</h3>
                            <div class="s-form__descr">
                                Свяжитесь с нами и получите точный расчет стоимости, а также персональный подарок от строительной компании «Domconsult».
                            </div>
                            <form class="s-form__form" action="" method="POST" id="sofyno-bottom-form">
                                <div class="s-form__row">
                                    <input class="s-form__input" type="text" placeholder="Ваше имя" name="NAME">
                                </div>
                                <div class="s-form__row s-form__row--col2">
                                    <input class="s-form__input" name="PHONE" type="tel" placeholder="*Ваш телефон" required>
                                    <input class="s-form__input" name="EMAIL" type="email" placeholder="Ваш email">
                                </div>
                                <div class="s-form__row s-form__row--col2">
                                    <div class="s-form__file">
                                        <div class="s-form__file-annotation">Есть проект? <br>Рассчитаем смету!</div>
                                        <label class="s-form__label s-button s-button--dark s-button--file" for="s-form__file">Приложить файл</label>
                                    </div>

                                    <button type="submit" name="submit" class="s-form__submit s-button is-blicked" title="Отправить" value="Отправить">Отправить</button>
                                </div>
                                <div class="s-form__row s-form__row--col2">
                                    <div class="s-form__empty"><input type="file" class="s-form__input s-form__file-button" id="s-form__file" placeholder="Ваш email" title="Приложить файл" name="FILE"></div>
                                    <div class="s-form__policy">
                                        Нажимая на кнопку, вы соглашаетесь с Политикой обработки персональных данных.
                                    </div>
                                </div>
                                <input type="hidden" value="Получить консультацию эксперта" name="TYPE">
                            </form>
                        </div> <!-- s-form__left -->
                        <div class="s-form__right col-md-5 hidden-xs hidden-sm">
                            <div class="s-form__image">
                                <img src="images/man1.png" alt="Индивидуальное предложение" class="s-form__man">
                            </div>
                        </div>
                    </div> <!-- s-form__border -->
                </div> <!-- s-form -->
            </div>
        </div>
    </section> <!-- sofyno__complect -->

</div>

<script src="js/fancybox.umd.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/inputmask.js"></script>
<script src="js/jquery.inputmask.js"></script>

<script>
new WOW().init(); // Animations

$(document).ready(function () {
    // Читать еще
    $('.js-readmore').on('click', function(e) {
        $(this).parents('.js-readparent').addClass('readmore');
        $(this).remove();
    });

});

// Всплывашки галерей
Fancybox.bind('[data-fancybox="gallery"]', {
    infinite: false
});

Fancybox.bind('[data-fancybox="about"]', {
    infinite: false
});

Fancybox.bind('[data-fancybox="complect"]', {
    infinite: false
});

// ПЕРЕКЛЮЧЕНИЕ ЛЮБЫХ БЛОКОВ

	function toggleEach(e) {
		var toggleObject = $(e).data('toggle');
		var turnOffObject = $(e).data('toggle-off');
		var option = $(e).data('on'); // yes/no

		$('.'+turnOffObject).each(function() {
			$(this).removeClass('active');
		});

		$('.'+toggleObject).each(function() {
			if(option == 'yes') {
				if(!$(this).hasClass('active'))
					$(this).addClass('active');
			}
			if(option == 'no') {
				$(this).removeClass('active');
			}
		});
	}

	function toggleObject(e) {
		var toggleObject = $(e).data('target'); // Находим цель
		var toggleBlock = $(e).data('toggle_block'); // Объединение между выбором и блоками вывода
		$('.toggle_target[data-toggle_block="'+toggleBlock+'"]').each(function() {
			$(this).removeClass('active'); // Сначала все скрываем
		});
        $('.toggleobject').removeClass('active');
		$('.toggle_target#'+toggleObject+'-content').addClass('active'); // Выводим нужный блок
        $(e).addClass('active');
	}

	// Любые переключающиеся объекты
	$('.toggleobject').on('click', function(e) {
		toggleObject(this);
	});

</script>

<?if ($_POST['submit'] && $_POST['PHONE']):
    $IBLOCK = 31; // Получить консультацию эксперта
    $arFields = array(
        "ACTIVE" => "Y",
        "IBLOCK_ID" => $IBLOCK,
        "DATE_ACTIVE_FROM" => ConvertTimeStamp(false, "FULL"),
        "NAME" => $_POST['PHONE'],
    );
    $oElement = new CIBlockElement();
    $idElement = $oElement->Add($arFields, false, false, true);
    /* Свойства */
    if($_POST['EMAIL'])
        CIBlockElement::SetPropertyValueCode($idElement, "EMAIL", $_POST['EMAIL']);
    if($_POST['NAME'])
        CIBlockElement::SetPropertyValueCode($idElement, "FIO", $_POST['NAME']);
    if($_POST['TYPE'])
        CIBlockElement::SetPropertyValueCode($idElement, "TYPE", $_POST['TYPE']);
    if($_POST['FILE']) {
        $arFile = CFile::MakeFileArray($_POST['FILE']);
        CIBlockElement::SetPropertyValueCode($idElement, "FILE", $arFile);
    }
    /* Свойства */

    /* Отправка почтового события */
    Event::send(array(
        "EVENT_NAME" => "LANDING_FORM",
        "LID" => "s1",
        "C_FIELDS" => array(
            "EMAIL" => "sadovikow@gmail.com",
            "NAME" => $_POST["NAME"],
            "TYPE" => $_POST["TYPE"],
            "PHONE" => $_POST["PHONE"],
        ),
    ));

    ?>
    <script>
        Fancybox.show([{ src: "thanks.php", type: "ajax" }]);
    </script>
<?endif;?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
