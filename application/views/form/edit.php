<div id="container">
    <div class="inner-wrap">
        <div class="table-sec">
            <h2><?php echo $app_name; ?> Form Add Page</h2>
            <a href="<?= base_url() ?>applications" class="backBtn">Back</a>

            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <tbody>
                    <tr>
                        <td>
                            <form action="<?= base_url() ?>form/edit/<?php echo $form_id ?>" 
                            method="POST" class="full validate add_task_form" enctype="multipart/form-data"/>
                            <div class="row">
                                <label for="d1_textfield">
                                    <strong>Form Name</strong>
                                </label>
                                <div>
                                    <input class="required" type="text" name="form_name" id="d1_textfield"
                                     value="<?php echo $form_name; ?>"/>
                                    <input type="hidden" name="app_id" id="d1_textfield" value="<?php echo $app_id;?>" />
                                </div>
                            </div>
                            <div class="row">
                                <label for="d1_textfield">
                                    <strong>Form Icon (.png only)</strong>
                                </label>
                                <div>
                                    <input type="file" name="userfile" id="userfile" accept="*.png" 
                                    onchange="check_file()"/>
                                </div>
                                
                                    <?php
                                    if(!empty($form_icon))
                                    {
                                       ?>
                                <div>
                                           <img src="<?php echo FORM_IMG_DISPLAY_PATH.'../form_icons/'.$app_id.'/'.$form_icon?>" alt="" />
                                            </div>
                                           <?php 
                                    }
                                    ?>
                               
                            </div>
                            <div class="actions">
                                <div class="right">
                                    <button class="submit">Edit Form</button>
                                </div>

                            </div>

                            </form>
                        </td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
        function check_file() {
            str = document.getElementById('userfile').value.toUpperCase();
            suffix = ".png";
            suffix2 = ".PNG";
            if (!(str.indexOf(suffix, str.length - suffix.length) !== -1 ||
                    str.indexOf(suffix2, str.length - suffix2.length) !== -1)) {
                alert('File type not supported, only (.png) files allowed.');
                document.getElementById('userfile').value = '';
            }
        }
</script>