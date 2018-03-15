window.onload = function()
{
   document.getElementById('info_user').onclick = function(e)
   {
       e.preventDefault(); /*prévient les bugs des navigateurs*/
       var info_form = document.getElementById('form_info');
       var recap = document.getElementById('recap_info');

       var display = window.getComputedStyle(info_form).display;
       if (display == 'none')
       {
         info_form.style.display = 'block';
         recap.style.display = 'none';
       }
   }

   document.getElementById('preference').onclick = function(e)
   {
       e.preventDefault(); /*prévient les bugs des navigateurs*/
       var form = document.getElementById('form_pref');
       var recap = document.getElementById('recap_pref');

       var display = window.getComputedStyle(form).display;

       if (display == 'none')
       {
           form.style.display = 'block';
           recap.style.display = 'none';
       }
   }

   $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })
}
