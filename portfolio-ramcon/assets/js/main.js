(function (root, $, undefined) {
  $(document).ready(function () {
    // Burguer menu show and hide to click
    burguerMenuFunctionality();    

  })
  console.log("Main script loaded");

  // ✅
  function burguerMenuFunctionality() {
    let burguerBtn = $("header nav .burguer");
    let navMenu = $("header nav");

    burguerBtn.click(() => {
      navMenu.toggleClass('active');
    });

    $(document).click((e) => {
      if (
        navMenu.hasClass('active') &&
        !navMenu.is(e.target) &&
        navMenu.has(e.target).length === 0 &&
        !burguerBtn.is(e.target) &&
        burguerBtn.has(e.target).length === 0
      ) {
        navMenu.removeClass('active');
      }
    });
  }

})(this, jQuery);