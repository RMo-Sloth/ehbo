<?php
  include_once 'modules/featured-items.php';
  get_header();
?>

<main>
  <section class='max-text-width'>
    <h1 class='section-header'>over ehbo vereniging Berkenwoude</h1>
    <p>EHBO (Eerste Hulp Bij Ongelukken) vereniging Berkenwoude is opgericht in 1929. Op dit moment bestaat de vereniging uit ongeveer 60 leden welke uit Berkenwoude en omstreken komen. De vereniging kenmerkt zich door het 'open karakter' en de 'dorpse gezelligheid'.</p>
  </section>

  <section class='featured-items'>
    <h1 class='section-header'>het laatste nieuws</h1>
    <?php $featuredItems = new FeaturedItems();
    $featuredItems->compile(); ?>
  </section>

  <section class='max-container-width'>
    <h1 class='section-header'>wij zijn aangesloten bij</h1>
    <p>Onze vereniging is aangesloten bij een aantal landelijke organisaties: EHBO Nederland, het Oranje Kruis en de Hartstichting.</p>
    <div class='associations'>
      <a href='https://www.hartstichting.nl/' target='_blank' rel="noopener" >
        <img src='<?php echo get_template_directory_uri().'/images/de-hartstichting.png'; ?>' alt='logo van de hartstichting' />
      </a>
      <a href='https://www.ehbonederland.nl/' target='_blank' rel="noopener" >
        <img src='<?php echo get_template_directory_uri().'/images/ehbo-nederland.png'; ?>' alt='logo van ehbo Nederland' />
      </a>
      <a href='https://www.hetoranjekruis.nl/' target='_blank' rel="noopener" >
        <img src='<?php echo get_template_directory_uri().'/images/het-oranje-kruis.png'; ?>' alt='logo van het oranje kruis' />
      </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
