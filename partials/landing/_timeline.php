<?php
  $slides = [
    [
      "year" => "2008",
      "title" => "Graduada en Teología y Consejería.",
      "description" => "CFNI, Dllas TX",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-0.png"
    ],
    [
      "year" => "2009",
      "title" => "Emprendedora, deportista y músico.",
      "description" => "Basquetbolista por Sonora y Baterista",
      "subtitle" => "2000 - 2009",
      "image" => "/assets/img/landing/img_timeline-slide-1.png"
    ],
    [
      "year" => "2013",
      "title" => "",
      "description" => "",
      "subtitle" => "",
      "image" => ""
    ],
    [
      "year" => "2013",
      "title" => "",
      "description" => "",
      "subtitle" => "",
      "image" => ""
    ],
    [
      "year" => "2014",
      "title" => "",
      "description" => "",
      "subtitle" => "",
      "image" => ""
    ],
    [
      "year" => "2015",
      "title" => "",
      "description" => "",
      "subtitle" => "",
      "image" => ""
    ],
    [
      "year" => "2016",
      "title" => "",
      "description" => "",
      "subtitle" => "",
      "image" => ""
    ],
    [
      "year" => "2018",
      "title" => "",
      "description" => "",
      "subtitle" => "",
      "image" => ""
    ],
    [
      "year" => "2019",
      "title" => "",
      "description" => "",
      "subtitle" => "",
      "image" => ""
    ],
    [
      "year" => "2020",
      "title" => "",
      "description" => "",
      "subtitle" => "",
      "image" => ""
    ],
    [
      "year" => "2021",
      "title" => "",
      "description" => "",
      "subtitle" => "",
      "image" => ""
    ],
    [
      "year" => "2022",
      "title" => "",
      "description" => "",
      "subtitle" => "",
      "image" => ""
    ]
  ];
?>

<section id="mi-recorrido" class="landing__timeline">
  <div class="slick">
    <?php
      foreach ($slides as $slide) {
        echo '<div
                class="slide"
                data-year="'.$slide["year"].'"
                data-title="'.$slide["title"].'"
                data-description="'.$slide["description"].'"
                data-subtitle="'.$slide["subtitle"].'"
                style="background-image: url('.$slide["image"].')">
              </div>';
      }
    ?>
  </div>
  <div class="l-main-wrapper">
    <div class="wrapper">
      <h1 class="magic-title"></h1>
      <p></p>
      <h2></h2>
      <h1></h1>
    </div>
    <div class="slick-controls">
      <div class="buttons">
        <button type="button" class="prev">
          <img src="/assets/img/icons/ic_link_white.svg" alt="Anterior">
        </button>
        <button type="button" class="next">
          <img src="/assets/img/icons/ic_link_white.svg" alt="Siguiente">
        </button>
      </div>
      <div class="dots"></div>
    </div>
  </div>
</section>