$(document).ready(function() {
  $("form").submit(function(event) {
    let json;
    event.preventDefault();
    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(result) {
        json = $.parseJSON(result);
        alert(`${json.status}: ${json.message}`);
        if (json.url) window.location.href = json.url;
      }
    });
  });
});
