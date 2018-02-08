

//BUTTONS for ajax call to toggle comment/article status 

$('#comments_status').on('click', '.delete_button_comment', function() {
  var id = $(this).data('id');
  updateDatabase(id, "delete_comments.php", "#comments_status", "get_comments.php" );
} );
$('#comments_status').on('click', '.restore_button_comment', function() {
  var id = $(this).data('id');
  updateDatabase(id, "restore_comments.php", "#comments_status", "get_comments.php" );
} );

$('#article_status').on('click', '.delete_button_posts', function() {
  var id = $(this).data('id');
  updateDatabase(id, "delete_post.php", "#article_status", "get_posts_admin.php" );
} );
$('#article_status').on('click', '.restor_button_posts', function() {
  var id = $(this).data('id');
  updateDatabase(id, "restor_post.php", "#article_status", "get_posts_admin.php" );
} );

$('#article_status').on('click', '.off_button_posts', function() {
  var id = $(this).data('id');
  updateDatabase(id, "stop_comments.php", "#article_status", "get_posts_admin.php" );
} );

$('#article_status').on('click', '.pause_button_posts', function() {
  var id = $(this).data('id');
  updateDatabase(id, "pause_comments.php", "#article_status", "get_posts_admin.php" );
} );

$('#article_status').on('click', '.on_button_posts', function() {
  var id = $(this).data('id');
  updateDatabase(id, "on_comments.php", "#article_status", "get_posts_admin.php" );
} );

$('#shortcuts_form').on('click', '#add_shortcuts', function() {
  event.preventDefault();
  shortcutsForm();
} );

function shortcutsForm(){
          var shortcut_name = $("#shortcut_name").val();
          var shortcut_value = $("#shortcut_value").val();

                  $.ajax({
                      type: "POST",
                      url:"insert_shortcuts.php",
                      data:{
                          "shortcut_name": shortcut_name,
                          "shortcut_value": shortcut_value,
                          },
                      dataType: "text",
                      success: function(html) {
                        reloadPagePart("#keywords_table_wrap", "get_shortcuts.php");
                        reloadPagePart("#keywords_wrap", "get_shortcuts_json.php");
                        refreshShortcuts();

                      }
                  });
          return false;
}

//after ajax refresh shortcuts used
function refreshShortcuts (){
      setTimeout(function(){
      expandShortcuts();}, 1000);
}


//ajax constructor to update enteries
function updateDatabase(id, path, selector, content){
       $.ajax({
            type: "POST",
            url: path,
            data: {data: id}
       }).done(function( msg ) {

            reloadPagePart(selector,content);

       });
    };

//on ajax refresh updated enteries
function reloadPagePart(selector, content) {

       $(selector).fadeOut('slow').load(content).fadeIn("fast");

   };



function expandShortcuts() {
  var shortcuts = $("#keywords").data('keywords');
        //get expand keywords from hidden object on page

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

          };

jQuery(function ($) {
      expandShortcuts();

      //tabs for admin menu
      $('ul.tabs li').click(function(){
    		var tab_id = $(this).attr('data-tab');

    		$('ul.tabs li').removeClass('current');
    		$('.tab-content').removeClass('current');

    		$(this).addClass('current');
    		$("#"+tab_id).addClass('current');
    	})

});
