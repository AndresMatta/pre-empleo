  function toggle(elemento, id) {
          if(elemento.value=="SI") {
              document.getElementById(id).style.display = "block";
            }else{
              document.getElementById(id).style.display = "none";
            }

  }

  function showContent(id1, id2) {
        element = document.getElementById(id2);
        check = document.getElementById(id1);
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
 