

<!doctype html>
<html class="no-js" lang="ru">

    <head>
        [[$Head]]
    </head>
    
    <body>
    <!-- Header -->
    <header class="header">
        <div class="container">

            <!-- Header Top -->
            [[$HeaderTop]]
            <!-- Enod of Header Top -->

            <!-- Navigation -->
            [[$HeaderNav]]
            <!-- End of Navigation -->

            <h1>Песочное шоу</h1>
            <div class="header__text">Видеоролик с записью Вашей программы (песочная анимация) в HD качестве в подарок каждому заказавшему песочное шоу.</div>
            <div class="text-center">
                <a href="#show_stock" class="btn btn-white">готовый сценарий</a>
                <a href="#show_personal" class="btn btn-white">индивидуальный сценарий</a>
            </div>
            <a href="#" class="header__shop-link">Магазин подарков</a>
        </div>
    </header>
    <!-- End of Header -->


        <article class="show-type">
            <div class="container">
                <h2>Закажите у нас шоу на любое мероприятие</h2>
                <ul class="clearfix">
                    <li class="item1">Свадьбу</li>
                    <li class="item2">Юбилей</li>
                    <li class="item3">Корпоратив</li>
                    <li class="item4">Детский праздник</li>
                    <li class="item5">Концерт</li>
                </ul>
            </div>
        </article>

        <article class="what">
            <div class="container">
                <h2>Что такое песочное шоу?</h2>
                <p class="text-center">
                    Хотите узнать, что же такое песочное шоу? А мы спросим вас: "Вы верите в чудеса?". Это важно, потому, что на нашем представлении вас ждет настоящее чудо.
                    Представьте  себе: вы сидите в затемненном помещении. Перед вами большой экран. Недалеко от него вы видите свет - это подсветка стола, рядом с которым стоит художник. Экран еще совсем пустой.
                    Вы ждете.... И тут из глубины зала звучит музыка... Вы прислушиваетесь...И вдруг, "оживает экран".  Вы видите образы, которые плавно перетекают из одного в другой, меняются города, пейзажи, лица...
                    И каждая картинка "живет" всего лишь мгновение. Вы понимаете, что целые миры создаются одним взмахом руки художника. Время останавливается...
                    На столе с подсветкой с помощью песка художник продолжает творить, создавая причудливые образы и фигуру, увлекая вас за собой. И вот, заканчивается музыка. Включается свет.
                    Вы оглядываетесь кругом. Видите большой зал, людей. И тут понимаете. что только что вы были где-то совсем далеко...может быть в сказке? А теперь мы спросим вас: <strong>"Вы верите в чудеса?"</strong>
                </p>
                <div class="form__large">
                    <form class="form">
                        <div class="form-title">Заказать песочное шоу</div>
                        <ul class="clearfix">
                            <li>
                                <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                            </li>
                            <li>
                                <input type="text" name="phone" class="form-control" placeholder="Ваш телефон">
                            </li>
                            <li>
                                <input type="text" name="email" class="form-control" placeholder="Ваш E-mail">
                            </li>
                            <li>
                                <button type="submit" class="btn btn-orange">Отправить</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </article>

        <!-- Gallery -->
        [[$GalleryCarousel]]
        <!-- End of Gallery -->

        <article class="cooperation">
            <div class="container">
                <h2>как начать сотрудничество</h2>
                <ul class="clearfix">
                    <li class="item1">Вы звоните нам по телефону 8 (964) 586-20-20. Рассазываете нам свои пожелания и идеи</li>
                    <li class="item2">Мы формируем  основную концепцию будуюшего сценария. Рисуем эскизы будующего сюжеты.</li>
                    <li class="item3">После утвержления эскизов мы начинаем подготовку к выступлению или съемкам видеоролика.</li>
                </ul>
            </div>
        </article>

        <article class="order">
            <div class="container">
                <h2>Заказать песочное шоу</h2>
                <div class="form-order-title" id="show_stock">По готовому сценарию</div>
                [[$tpl.order.Show.stock]]

                <div class="form-order-title" id="show_personal">По индивидуальному сценарию</div>
                [[$tpl.order.Show.personal]]

            </div>
        </article>

        [[$Footer]]
    </body>
</html>


