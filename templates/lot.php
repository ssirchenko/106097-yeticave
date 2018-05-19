  <nav class="nav">
    <ul class="nav__list container">
      <?php $index = 0;
                $num = count($template_data['categories']);
                while ($index < $num) {
                $cat = $template_data['categories'][$index];
                print ('<li class="nav__item"><a href="all-lots.html">' . $cat['category'] . '</a></li>');
                $index = $index + 1;
            }?>
    </ul>
  </nav>
  <section class="lot-item container">
    <h2><?=htmlspecialchars($template_data['lot']['title']);?></h2>
    <div class="lot-item__content">
      <div class="lot-item__left">
        <div class="lot-item__image">
          <img src="img/lot-image.jpg" width="730" height="548" alt="Сноуборд">
        </div>
        <p class="lot-item__category">Категория: <span><?=htmlspecialchars($template_data['lot']['category']);?></span></p>
        <p class="lot-item__description"><?=htmlspecialchars($template_data['lot']['description']);?></p>
      </div>
      <div class="lot-item__right">
        <div class="lot-item__state">
          <div class="lot-item__timer timer">
            10:54:12
          </div>
          <div class="lot-item__cost-state">
            <div class="lot-item__rate">
              <span class="lot-item__amount">Текущая цена</span>
              <span class="lot-item__cost"><?=htmlspecialchars(format_price($template_data['lot']['price']));?></span>
            </div>
            <div class="lot-item__min-cost">
              Мин. ставка <span><?=htmlspecialchars(format_price($template_data['lot']['min_bid']));?></span>
            </div>
          </div>
          <form class="lot-item__form" action="https://echo.htmlacademy.ru" method="post">
            <p class="lot-item__form-item">
              <label for="cost">Ваша ставка</label>
              <input id="cost" type="number" name="cost" placeholder="12 000">
            </p>
            <button type="submit" class="button">Сделать ставку</button>
          </form>
        </div>
        <div class="history">
          <h3>История ставок (<span>10</span>)</h3>
          <table class="history__list">
            <?php 
                $num = count($template_data['bids']);
            if ($num > 0) {
                $index = 0;
                $max_bids_to_show = 9;
                while (($index < $num) or $index == $max_bids_to_show) {
                    $bid = $template_data['bids'][$index];
                    print ('<tr class="history__item"><td class="history__name">' . htmlspecialchars($bid['name']) . '</td><td class="history__price">' . htmlspecialchars(format_price($bid['bid'])) . '<td class="history__time">' . human_time_diff(strtotime($bid['datetime'])) . '</td>');
                    $index = $index + 1;
                }
            } else {
                print('У данного лота пока нет ставок');
            }?>
            <tr class="history__item">
              <td class="history__name">Иван</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">5 минут назад</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Константин</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">20 минут назад</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Евгений</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">Час назад</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Игорь</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 08:21</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Енакентий</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 13:20</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Семён</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 12:20</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Илья</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 10:20</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Енакентий</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 13:20</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Семён</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 12:20</td>
            </tr>
            <tr class="history__item">
              <td class="history__name">Илья</td>
              <td class="history__price">10 999 р</td>
              <td class="history__time">19.03.17 в 10:20</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
