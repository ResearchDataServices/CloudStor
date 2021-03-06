<?php
/**
 * [add_folder_modal.php]
 * Collections - Research data packaging for the rest of us
 * Copyright (C) 2017 Intersect Australia Ltd (https://intersect.org.au)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
*/
?>

<div class="modal" id="addFolderModal" tabindex="-1" role="dialog" aria-labelledby="addFolderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="addFolderModalLabel">Add Folder</h4>
      </div>
      <div class="modal-body">
        <p>Folder Name</p>
        <input id="add-folder" type="text" class="modal-input">
        <p>
          <label id="add_folder_error" name="Error Message" style="color:red;display:none"></label>
        <p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" disabled>Add</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->