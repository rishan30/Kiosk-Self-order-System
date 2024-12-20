<?php 
    $userid=$_SESSION["kuid"];
    $itemModalSql = "SELECT * FROM `food`";
    $itemModalResult = mysqli_query($conn, $itemModalSql);
    while($itemModalRow = mysqli_fetch_assoc($itemModalResult)){
        $foodid = $itemModalRow['foodId'];
        $foodname = $itemModalRow['foodName'];
        $custom1 = $itemModalRow['custom1'];
        $custom2 = $itemModalRow['custom2'];
    
?>

<!-- Modal -->
<div class="modal fade" id="#Customize<?php echo $foodid;?>" tabindex="-1" role="dialog" aria-labelledby="Customize<?php echo $foodid; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(111 202 203);">
        <h5 class="modal-title" id="Customize<?php echo $foodid; ?>">Customize</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="partials/_customManage.php" method="post" style="border-bottom: 2px solid #dee2e6;">
            <div class="text-left my-2">    
                <b><label for="name">customize</label></b>
                <div class="row mx-2">
                
                <label for="opt1"><?php echo $custom1; ?></label>
                <input class="form-control col-md-3" id="opt1" name="custom" value="<?php echo $custom1; ?>" type="radio"> 
                <br>
                <label for="opt2"><?php echo $custom2; ?></label>
                <input class="form-control col-md-3" id="opt2" name="custom" value="<?php echo $custom2; ?>" type="radio">
                
                
                
                </div>
            </div>
            <input type="hidden" id="userid" name="userid" value="<?php echo $userid; ?>">
            <input type="hidden" id="foodId" name="foodid" value="<?php echo $foodid; ?>">
            <button type="submit" class="btn btn-success mb-2" name="updateCustom">Update</button>
        </form>
      </div>
    </div>
  </div>
  </div>

<?php
    }

    ?>

<style>
.popover {
        top: -77px !important;
}
</style>

<script>
    $(function () {
        $('[data-toggle="popover"]').popover();
    });
</script>