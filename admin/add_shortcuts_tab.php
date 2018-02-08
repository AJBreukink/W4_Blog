<div class="form-placeholder">

  <h1> Add a new shortcut</h1>

    <form id="shortcuts_form"  method="post">
      <p>
      <label for="Shortcut">Shortcut</label>
      <input id="shortcut_name" type="text" name="shortcut_name" >
      </p>
      <p>
      <label for="Shortcut">Expansion</label>
      <input id="shortcut_value" type="text" name="shortcut_value" >
      </p>



        <input id="add_shortcuts" class="link-button" type="submit" value="Submit">

      </form>
    <div id='keywords_table_wrap'>
      <?php include("get_shortcuts.php") ?> </div>

    </div>
