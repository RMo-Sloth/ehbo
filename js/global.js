window.addEventListener('load', () => {
  const header = document.querySelector('header');
  const toggleIcon = document.querySelector('header>i.toggle-icons');
  header.addEventListener( 'click', function( event ) {
    if( this !== event.target )
      return;

    toggleIcon.classList.toggle( 'fa-bars' );
    toggleIcon.classList.toggle( 'fa-times' );

    this.classList.toggle( 'opened' );
    this.classList.toggle( 'closed' );
  });
});
