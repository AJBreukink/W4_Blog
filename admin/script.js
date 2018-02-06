

  //Expand keywords
 shortcuts = {
    "cci": "customer called in",
    "rfc": "request for comments",
    "www": "world wide web"


}
jQuery(function ($) {
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
