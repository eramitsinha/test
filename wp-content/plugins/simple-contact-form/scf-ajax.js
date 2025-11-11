jQuery(document).ready(function($){ 
  $('#scf-form').on('submit', function(e){ 
    e.preventDefault(); 
 
    var name  = $('#scf_name').val(); 
    var email = $('#scf_email').val(); 
 
    if (!name || !email) { 
      $('#scf-message').css('color','red').text('Please fill both fields.'); 
      return; 
    } 
 
    $('#scf-message').css('color','blue').text('Submitting...'); 
 
    $.post(scf_obj.ajax_url, { 
      action: 'scf_submit', 
      nonce: scf_obj.nonce, 
      name: name, 
      email: email 
    }, function(response){ 
      if (response.success) { 
        $('#scf-message').css('color','green').text(response.data); 
        $('#scf-form')[0].reset(); 
      } else { 
        $('#scf-message').css('color','red').text(response.data || 'Error'); 
      } 
    }, 'json').fail(function(){ 
      $('#scf-message').css('color','red').text('Request failed.'); 
    }); 
  }); 
});