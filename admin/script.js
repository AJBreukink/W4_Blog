

$('#comments_status').on('click', '.delete_button_comment', function() {
  var id = $(this).data('id');
  updateDatabase(id, "delete_comments.php", "#comments_status", "get_comments" );
} );


//ajax xonstructor to update enteries
function updateDatabase(id, path, selector, content){
       $.ajax({
            type: "POST",
            url: path,
            data: {data: id}
       }).done(function( msg ) {

            alert( msg);
            reloadPagePart(selector,content);

       });
    };

//on ajax refresh updated enteries
function reloadPagePart(selector, content) {
     var filepath = content + ".php";

       $(selector).fadeOut('slow').load(filepath).fadeIn("slow");

   };


//get expand keywords from hidden object on page
var shortcuts = $("#keywords").data('keywords');


jQuery(function ($) {

      //tabs for admin menu
      $('ul.tabs li').click(function(){
    		var tab_id = $(this).attr('data-tab');

    		$('ul.tabs li').removeClass('current');
    		$('.tab-content').removeClass('current');

    		$(this).addClass('current');
    		$("#"+tab_id).addClass('current');
    	})
      //function to expand keywords
      //first check if textbox present
      if ( $("#post-text").length ) {

            var post = $("#post-text")[0];
            var timer = 0;
            // expand string
            var expand = new RegExp("\\b(" + Object.keys(shortcuts).join("|") + ")\\b", "g");

            //updates text input
            update = function () {
                  post.value = post.value.replace(expand, function ($0, $1) {
                      return shortcuts[$1.toLowerCase()];
                  });
            }

            post.onkeyup = function (e){
              //update if space,tab or enter key is pressed (to prevent updating in middle of a word)
                  if(e.keyCode == 13 || e.keyCode == 32 || e.keyCode == 32 ){

                    clearTimeout(timer);
                      timer = setTimeout(update, 200);
                  }
            }
          };
});
