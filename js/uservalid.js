// JavaScript Document

       

                function validateUser(){
                    console.log("button pressed");
                    var password = document.getElementById("passwordS") , 
                    confirm_password = document.getElementById("confirm_passwordS"),
                    username = document.getElementById("username");
                        console.log("checking user");
                        if(username.value = <?php mysqli_query($link ,'SELECT FROM users WHERE username') ;?>){
                            console.log("username is taken");
                            username.setCustomValidity("Username is taken!");
                           }else{
                               console.log("user ok");
                               username.setCustomValidity('');
                               console.log("checking passwords");
                            if(password.value != confirm_password.value) {
                                confirm_password.setCustomValidity("Passwords Don't Match");
                                console.log("passwords dont match");
                                  } else {
                                    confirm_password.setCustomValidity('');
                                    console.log("password ok. sending to server");
                                      $.ajax({
                                            url: "functions.php",
                                            data: "insert_new",
                                        });
                                  }
                           }

                }

                password.onchange = validateUser();
                confirm_password.onkeyup = validateUser();
