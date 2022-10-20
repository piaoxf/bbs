function check(){
  
  //名前が空の場合、エラーメッセージを出力
  if (formData1.username.value == "") {
    alert("名前を記入してください。");
    return false;
  
    //コメントが空の場合、エラーメッセージを出力
  } else if(formData1.body.value =="") {
    alert("コメントを記入してください。");
    return false;
  
  //名前、コメント両方が空ではない場合、正常処理する
  } else {
    return true;
  }
}