<?php
  $slides = [
    [
      "year" => "2008",
      "title" => "Graduada en <br> Teología y <br> Consejería.",
      "description" => "CFNI, Dllas TX",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-0.png"
    ],
    [
      "year" => "2009",
      "title" => "Emprendedora, <br> deportista y músico.",
      "description" => "Basquetbolista por Sonora <br> y Baterista",
      "subtitle" => "2000 - 2009",
      "image" => "/assets/img/landing/img_timeline-slide-1.png"
    ],
    [
      "year" => "2013",
      "title" => "Lic. En Nutrición <br> Nutrióloga.",
      "description" => "INDE, N.L. con participación <br> con atletas en ciclo de <br> Londres 2012",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-2.png"
    ],
    [
      "year" => "2013",
      "title" => "Clinica deportiva <br> 3cientos.",
      "description" => "Plantando la nutrición <br> deportiva alrededor <br> de Nuevo León",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-3.png"
    ],
    [
      "year" => "2014",
      "title" => "Docente en la <br> Universidad del <br> Valle de México.",
      "description" => "",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-4.png"
    ],
    [
      "year" => "2015",
      "title" => "Se suman más de <br> 50 conferencias.",
      "description" => "Alrededor de México en <br> diferentes eventos.",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-5.png"
    ],
    [
      "year" => "2016",
      "title" => "Participación <br> en los Juegos <br> Olimpicos de Rio.",
      "description" => "",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-6.png"
    ],
    [
      "year" => "2018",
      "title" => "Conferencista <br> Internacional <br> en sudamérica.",
      "description" => "Chile, Argentina y Perú.",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-7.png"
    ],
    [
      "year" => "2019",
      "title" => "Maestria en <br> Nutrición Clínica.",
      "description" => "Docente en ITESM",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-8.png"
    ],
    [
      "year" => "2020",
      "title" => "Laboratorio <br> Tr3slab.",
      "description" => "Ha atendido a mas de <br> 30,000 mil pacientes.",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-9.png"
    ],
    [
      "year" => "2021",
      "title" => "Tokyo 2020.",
      "description" => "Midei Mx",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-10.png"
    ],
    [
      "year" => "2022",
      "title" => "Primer libro e <br> impulso de marca <br> personal.",
      "description" => "",
      "subtitle" => "",
      "image" => "/assets/img/landing/img_timeline-slide-11.png"
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