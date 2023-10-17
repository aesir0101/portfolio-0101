//
$(document).ready(function () {
    $("#toggleIcon").click(function () {
      $("ul").toggleClass("showNavbar");
    });
  });
  // End


  const toggleButton = $('#toggleIcon');
  const body = $('body');
  
  toggleButton.click(function () {
      if (body.hasClass('menu-open')) {
          // Feche o menu e reabilite a rolagem
          body.removeClass('menu-open');
      } else {
          // Abra o menu e desabilite a rolagem
          body.addClass('menu-open');
      }
  });

  
