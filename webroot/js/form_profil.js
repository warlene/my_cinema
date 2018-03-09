window.onload = function()
{
   document.getElementById('info_user').onclick = function(e)
   {
       e.preventDefault(); /*prévient les bugs des navigateurs*/
       var form = document.getElementById('form_user');
       var recap = document.getElementById('recap');

       var display = window.getComputedStyle(form).display;

       if (display == 'block')
       {
           form.style.display = 'none';
           recap.style.display = 'block';
       }
       else
       {
           form.style.display = 'block';
           recap.style.display = 'none';
       }
   }
}
