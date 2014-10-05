                <h2>Add Images To Your Greeting</h2>
                <div class="errors"><?php echo $error ?></div>

                <div class="add-slides">

                        <div class="hidden">
                            <div class="slide border-up">
                                <div class="close">X</div>
                                <div class="image left"><span>Image:</span><input type="file" name="userfile[]" size="20" /></div>
                                <div class="caption left"><span>Caption</span><input type="text" name="caption[]" /></div>
                                <div class="subcaption left"><span>Sub Caption</span><input type="text" name="subcaption[]" /></div>
                            </div>
                        </div>
                        <?php echo form_open_multipart('slides/do_upload');?>
                            <div class="slides">
                                <div class="slide">
                                    <div class="image left"><span>Image:</span><input type="file" name="userfile[]" size="20" /></div>
                                    <div class="caption left"><span>Caption</span><input type="text" name="caption[]" /></div>
                                    <div class="subcaption left"><span>Sub Caption</span><input type="text" name="subcaption[]" /></div>
                                </div>
                            </div>
                            <input type="button" class="btn btn-primary" id="add_slide" value="Add another slide" />
                            <input type="submit" class="btn btn-primary" value="Publish Your Greeting" />
                        </form>
                </div>

                <form action="" method="post">
                    <input type="submit" class="btn btn-primary" name="delete" value="Return to previous page"/>
                </form>

               <script type="text/javascript">
                   //$('form').validate();
                   $( document ).ready(function() {
                       $("#add_slide").bind("click",function(){
                           $( ".hidden .slide" ).clone().appendTo( ".slides" );

                           $(".close").bind("click",function(){
                               $(this).parent().remove();
                           });
                       });
                   });
               </script>
