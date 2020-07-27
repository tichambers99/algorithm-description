  var kq = document.getElementById("get_two_user");
  var error_content =  document.getElementById("show_errors");
  var a =0, b= 0;//luu vi tri cac phan tu duoc danh dau

  function checked_count(){
    var checkbox =  document.getElementsByName("check_select");
    var count_ck = 0;
    for (var i = 0; i < checkbox.length; i++){
          if (checkbox[i].checked === true){
            count_ck ++;
            if(count_ck == 1) a = i;
            if(count_ck == 2) b = i;
          }
      }
    if (count_ck != 2){
      return false;
    }else{
      return true;
    }
  }

  function checked_sex(){
    if(checked_count() === true){
      var cell1 = document.getElementById("dataTable").rows[a+1].cells;//do trong bang hang dau tien ghi tieu de
      var cell2 = document.getElementById("dataTable").rows[b+1].cells;
      if( cell1[2].innerHTML != cell2[2].innerHTML){
        return true;
      }
      else{
        return false;
      }
    }else{
      return false;
    }
  }

  function checked_state(){
    if(checked_count() === true){
      var cell1 = document.getElementById("dataTable").rows[a+1].cells;
      var cell2 = document.getElementById("dataTable").rows[b+1].cells;
      if( cell1[6].innerHTML == "Dating" || cell2[6].innerHTML == "Dating"){
        return false;
      }
      else{
        return true;
      }
    }else{
      return false;
    }
  }

  function checked_all(){
    if((checked_sex() === true) && (checked_state() === true)){
      kq.style.backgroundColor  = "green";
      kq.innerHTML  = "OK!";
      error_content.innerHTML = "Sellect successful!";
      error_content.style.color = "blue";
      return true;
    }else{
      kq.style.backgroundColor = "red";
      kq.innerHTML = "Check Again";
      error_content.innerHTML = "Sex must is not same and is not Dating now!";
      error_content.style.color = "red";
      return false;
    }
  }

