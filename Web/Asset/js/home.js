function Search() {
  var id = $("#search-bar")[0];
  $(id).removeClass("d-none");
  $(id).addClass("search-active");
  $(id).attr("onfocusout", "outSearch()");
  $(id).focus();
}

function outSearch() {
  var id = $("#search-bar")[0];
  $(id).removeClass("search-active");
  $(id).addClass("d-none");
}
