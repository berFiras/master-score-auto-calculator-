<div class="alert alert-danger" role="alert">
<?php
if (isset($error)) {
    echo 'Error: ', $error;
} else {
    echo 'Error: Unkown error';
}?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>