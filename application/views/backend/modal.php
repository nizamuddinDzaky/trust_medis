    <script type="text/javascript">
	function showAjaxModal(url)
	{
		jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="assets/images/preloader.gif" /></div>');
		jQuery('#modal_ajax').modal('show', {backdrop: 'true'});
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#modal_ajax .modal-body').html(response);
                  $(".mydatepicker").datepicker({
                    dateFormat: 'dd-mm-yy'
                })
			}
		});
	}

    function showAjaxModalPasien(url, idPasien) {
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'json',
            success: function(response)
            {
                console.log();
                if (response['status'] == 0) {
                    alert(response['message']);
                }else{
                    showAjaxModal('<?php echo base_url();?>index.php?modal/popuprawatjalan/add_rawat_jalan/<?=$idPasien?>');
                }
            }
        });
    }
	</script>
    
    <div class="modal fade" id="modal_ajax">
        <div class="modal-dialog">
            <div class="modal-content">            
                <div class="modal-body"  overflow:auto;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo get_phrase('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
	function confirm_modal(delete_url)
	{
		jQuery('#modal-4').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link').setAttribute('href' , delete_url);
	}
	</script>

    <div class="modal fade" id="modal-4">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:center;"><?php echo get_phrase('Are-you-sure'); ?></h4>
                </div>
                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="#" class="btn btn-danger" id="delete_link"><?php echo get_phrase('Delete'); ?></a>
                    <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo get_phrase('Cancel'); ?></button>
                </div>
            </div>
        </div>
    </div>