

$('#anonymousCheckbox').change(function() {
  var checked =  document.getElementById('story_name');
  if (checked.readOnly === false) {
    checked.value='Anonymous' ;
    checked.readOnly = true;
  }else{
      checked.value = '';
      checked.readOnly = false;
  }

});

function checkform(){
  console.log("ran");
  if (document.getElementById('story_name').value === ""){
    alert('Please enter a name.');
    return false;
  }else if (document.getElementById('story_state').value === ""){
    alert('Please enter a state.');
    return false;
  }else if (document.getElementById('story_story').value === ""){
    alert('Please enter a story.');
    return false;
  }else if (document.getElementById('story_age').value === "") {
    alert('Please enter an age.');
    return false;
  }
  return true;
}

function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    $(window).scroll(function(){

        if (isScrolledIntoView('.infoBar') === true) {
            $('.infoBar').addClass('in-view')
        }

    });


    var figure = $(".video").hover( hoverVideo, hideVideo );

    function hoverVideo(e) {
        $('video', this).get(0).play();
        $('video', this).css("visibility", "visible");
    }

    function hideVideo(e) {
        $('video', this).get(0).pause();
        $('video', this).css("visibility", "hidden");
    }
