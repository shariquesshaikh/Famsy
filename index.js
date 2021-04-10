function pageOpener(i_option,r_option){
  var x= i_option;
  var y= r_option;

  if(x==1){
        if(y==1)
        {
          window.open("SignInAdmin.php");
        }else if (y==2) {
          window.open("SignInTeacher.php");
        }else {
          window.open("SignInStudent.php");
        }
      }


}



function validate(){
  var institute = document.getElementById( "i_select" );
  var i_option=institute.options[ institute.selectedIndex ].value;

  var role = document.getElementById( "r_select" );
  var r_option=role.options[ role.selectedIndex ].value;

  pageOpener(i_option,r_option);
}
