<?php
  $quotes = [
    [
      'text' => 'Life is like riding a bicycle. To keep your balance you must keep moving.',
      'author' => 'Albert Einstein'
    ],
    [
      'text' => 'Set your goals high, and don’t stop till you get there.',
      'author' => 'Bo Jackson'
    ],
    [
      'text' => 'Our potential is one thing. What we do with it is quite another.',
      'author' => 'Angela Duckworth'
    ]
  ];
?>

<section class="landing__quotes">
  <div class="desktop-wrapper">
    <?php
      foreach($quotes as $quote) {
        echo '
          <div class="magic-quote">
            <div>
              <span>
                <h1>'.$quote['text'].'</h1>
                <h2>'.$quote['author'].'</h2>
              </span>
            </div>
          </div>
        ';
      }
      unset($quote);
    ?>
  </div>
  <div class="mobile-wrapper">
    <?php
      foreach($quotes as $quote) {
        echo '
          <div>
            <h1>'.$quote['text'].'</h1>
            <h2>'.$quote['author'].'</h2>
          </div>
        ';
      };
      unset($quote);
      unset($quotes);
    ?>
  </div>
</section>