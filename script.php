<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
   const myBtn=document.querySelector(".my-btn");
   const alertBox=document.querySelector(".alert-box");
   const closeBtn=document.querySelector(".close-alert")     
   let timer;
   myBtn.addEventListener("click",function () {
        showAlertBox();
   })
   closeBtn.addEventListener("click",function () {
        hideAlertBox();
        clearTimeout(timer);
   })

   function showAlertBox(){
      alertBox.classList.remove("hide");
      alertBox.classList.add("show");
      // hide animation onload 
      if(alertBox.classList.contains("hidden")){
          alertBox.classList.remove("hidden");
      }
      timer=setTimeout(function(){
          hideAlertBox();
      },2000)
   }
    
   function hideAlertBox(){
     alertBox.classList.remove("show");
      alertBox.classList.add("hide");
   }
 </script>
<body>
    
</body>
</html>