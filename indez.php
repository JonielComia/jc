<!doctype html>
<html lang="en-US">
        <!--Initial Web-page design attempt-->
        
<head>
<style>
    
    h1   {color: blue;font-size: 48;}
    p    {color: red;}
    div  { background-color: whitesmoke}
   
    .row{
        font-size: 21px;
    }
    
    .buttonRed 
    {
        background-color: red; /* Red*/
        border: none;
        color: white;
        padding: 8px 18px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-weight: bold;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
    }
    
    .buttonRed:hover {
         background-color: rgba(255, 115, 0, 0.767)}

    .buttonBlue 
    {
        background-color:rgb(0, 0, 255);
        border: none;
        color: white;
        padding: 8px 18px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-weight: bold;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
    }
    .buttonBlue:hover {
         background-color: rgba(38, 0, 255, 0.623)}
    
    { /* might create issues the brackets */
        .buttonBlue {background-color: #008CBA;} /* Blue */
        .buttonRed {background-color: #f44336;} /* Red */ 
        .buttonGray {background-color: #e7e7e7; color: black;} /* Gray */ 
        .buttonBlack {background-color: #555555;} /* Black */
    }
        /* Create four equal columns that floats next to each other */

        *  
            {
                box-sizing: border-box;
            }

        /* Create four equal columns that floats next to each other */
        .column25 {
        float: left;
        font-weight: bold;
        width: 15%;
        padding: 10px;
        }
    

        /* Create two equal columns that floats next to each other */
        .column50 {
        float: left;
        width: 50%;
        padding: 10px;
        }

        /* Clear floats after the columns  50*/
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        /* Create columns 67% that floats next to each other */
        .column67 {
        float: left;
        width: 67%;
        padding: 10px;
        }

        /* Clear floats after the columns   67*/
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Create columns 33% that floats next to each other */
        .column33 {
        float: left;
        width: 33%;
        padding: 10px;
        }

        /* Clear floats after the columns  33*/
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        /* Create columns 40% that floats next to each other */
        .column40 {
        float: left;
        width: 40%;
        padding: 10px;
        }

        /* Clear floats after the columns  40*/
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        /* Create columns 60% that floats next to each other */
        .column60 {
        float: left;
        width: 60%;
        padding: 10px;
        }

        /* Clear floats after the columns  60*/
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        /* Create columns 100% that floats next to each other */
        .column100 {
        float: left;
        width: 100%;
        padding: 10px;
        }

        /* Clear floats after the columns  100*/
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        /* Create columns 75% that floats next to each other  */
        .column75 {
        float: left;
        width: 85%;
        padding: 10px;
        }

        /* Clear floats after the columns   75*/
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
   
.type {
    text-align: center;
    color: #756bea;
    font-size:29px;
}
    
    p{
        max-width: 500px;
    }
    
    #column1{
        background: #bfbfbf;
        display: inline-block;
        width: 76%;
        float: left;
    }
    #column2{
        background: #bfbfbf;
        float: left;
        width: 24%;
    }
  
    #background{
        border: 4px solid #5a5a5a;
        background: #d8d8d8;
        width: 730px;
        
        height: 740px;
        display: inline-block;
        border-radius: 65px;
    }
    #parent{
        text-align: center;
    }
    
    #signin{
        background: #83d8ff;
        margin-left: 210px;
        margin-top: 25px;
        width: 308px;
        text-align: center;
        align-content: center;
        box-shadow: 0px 0px 0px 3px #5a5a5a inset;
    }
    #forgot{
        display: table;
        margin-left: 170px;
        margin-top: -50px;
        font-size: 18px;
        color: darkgreen;
        padding-bottom: 10px;
    }
    .userImage{
        width:50px;
        margin-top: 15px;
        border: 2px solid #5a5a5a;
        background: #9f9f9f;
        align-content: center;
        border-radius: 7px;
        margin-left: -80px;
        text-align: center;
        display: inline-block;
    }
    .input{
        width: 90px;
        display: inline-block;
        margin-left: 10px;
        height: 50px;
    }
    textarea{
        border: 2px solid #5a5a5a;
        resize: none;
        padding-left: 5px;
        padding-top: 6px;
        padding-bottom: 6px;
        text-align: center;
        font-size: 16px;
    }
    #regi{
        width: 180px;
        height: 50px;
        color: #fff;
        margin-left: 60px;
        font-size: 22px;
        background: #3096eb;
        border: 2px solid #5a5a5a;
        display: inline-block;
        border-radius: 7px;
    }
    #container{
        width: 100%;
        background: #d8d8d8;
        display: inline-block;
    }
    #back{
        margin-left: 5px;
        height: 50px;
        color: #fff;
        width: 180px;
        font-size: 22px;
        padding-left: 0px;
        padding-right: 0px;
        background: #ea3939;
        border: 2px solid #5a5a5a;
        display: inline-block;
        border-radius: 7px;
    }
    #remember{
        margin-left: -230px;
        width: 17px;
        height: 17px; 
    }
    #newUser{
        margin-left: -42px;
        color: #000;
        margin-top: 40px;
        font-size: 20px;
    }
    #reg{
        margin-left: -45px;
        color: #1660d6;
        margin-top: -10px;
        font-size: 21px;
    }
    .buttons{
        margin-top: 30px;
    }
    #row1{
        text-align: center;
        float: left;
    }
   
    .center{
        text-align: center;
    }
    p{
        color: black;
        font-size: 18px;
    }
    .column{
        float:left;
        background: #d8d8d8;
        width:50%;
    }
        /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        background: #d8d8d8;
        clear: both;
    }
}    

</style>
        
<title>Register</title> 
</head>

<body>
    
        <div id="1">
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color: #aacbff; width: 730px;">
                        <tr>
                            <td style="margin-left:5px">
                                    <h2> Website Name</h2>
                            </td>
                            <td>
                                    <h1>Registration Page</h1>
                            </td>
                            <td style="margin-top: 4px";>
                                    <form action="/exit_icon.php">
                                       <img style="margin-top: 10px; margin-left: 20px"  src="ExitGlyph_a2.png" alt="Exit!">
                                      </form> 
                            </td>
                        </tr>
                        <tr>
                                <td>
                                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;border-radius: 5px ;color: rgb(102, 102, 102); line-height: 15px;  font-size: 16 px; margin-left: 5px;"  > <i> Slogan</i></p>
                                </td>
                                <td>  
                                        <h1></h1>
                                </td>
                                
                            </tr>
                    </table>
    

        </div>
    <div id="parent">
        <div id="background">
            <div id="signin">
                <h2 style="font-size: 29px; text-align: center; padding-left: 15px; padding-top: 10px; display: table;
     padding-bottom: 7px;">Create a New Account</h2>

            </div>
            <div class = "center">
                <div id="container">
                    <p style="width: 190px;display:inline-block; margin-left: 15px; ">First Name</p>
                    <p style="width: 195px;display:inline-block; margin-left: 40px;">Last Name</p>
                    <p style="width: 195px; margin-left: 10px; display:inline-block;">M.I.</p>
                    <textarea rows="1" style="padding-top: -10px; display:inline-block; margin-left: 10px;"></textarea>
                    <textarea rows="1" style="padding-top: -10px;display:inline-block; margin-left: 30px;"></textarea>
                    <textarea rows="1" maxlength="1" style="width: 45px; margin-left: 30px; display:inline-block;"></textarea>
                    <br>
                    <p style="width: 190px;display:inline-block; margin-left: 10px; ">Email ID</p>
                    <p style="width: 195px;display:inline-block; margin-left: 40px;">Password</p>
                    <p style="width: 195px; margin-left: 10px; display:inline-block;"></p>
                    <textarea rows="1" style="padding-top: -10px; display:inline-block; margin-left: 10px;"></textarea>
                    <textarea rows="1" style="padding-top: -10px;display:inline-block; margin-left: 30px;"></textarea>
                    <p style="padding-top: -10px;width: 45px; margin-left: 30px; display:inline-block;"></p>
                    <br>
                    <p style="width: 190px;display:inline-block; margin-left: 62px; ">Phone Number</p>
                    <p style="width: 195px;display:inline-block; margin-left: 50px;">Confirm Password</p>
                    <p style="width: 195px; margin-left: 10px; display:inline-block;"></p>
                    <textarea rows="1" style="padding-top: -10px; display:inline-block; margin-left: 10px;"></textarea>
                    <textarea rows="1" style="padding-top: -10px;display:inline-block; margin-left: 30px;"></textarea>
                    <p style="padding-top: -10px;width: 45px; margin-left: 30px; display:inline-block;"></p>
                    <br>
                    <br>
                
                </div>
            </div>
            <div class="center" id ="questions">
                <div style="display: inline-block;background: #d8d8d8; width:100%"><h2>Challenge Questions</h2></div>
                <div class="row">
                    <div class = "column">
                        <p style="margin-top: 5px;">What is your mother's maiden name?</p>
                    </div>
                    
                    <div class = "column">
                        <textarea rows="1" style="width: 300px;"></textarea>
                    </div>
                
                </div>
                <div class="row">
                    <div class = "column">
                        <p style="margin-top: 5px;">What make is your first car?</p>
                    </div>
                    
                    <div class = "column">
                        <textarea rows="1" style="width: 120px; display: inline-block"></textarea>
                        <textarea rows="1" style="width: 160px; display: inline-block; margin-left: 20px;"></textarea>
                    </div>
                
                </div>
                <div class="row">
                    <div class = "column">
                        <p style="margin-top: 5px;">What is your birthday (month and year)?</p>
                    </div>
                    
                    <div class = "column">
                        <textarea rows="1" style="width: 120px; display: inline-block"></textarea>
                        <textarea rows="1" style="width: 60px; display: inline-block; margin-left: 20px;"></textarea>
                        <textarea rows="1" style="width: 80px; display: inline-block; margin-left: 20px;"></textarea>
                    </div>
                
                </div>
                
            </div>
            
            <div>
                
                <div class = "column">
                    <a href="http://127.0.0.1:55909/Login%20Page.html"><button class="buttons" id="regi">Register Me</button></a>
                </div>
                <div class = "column">
                    <a href="http://127.0.0.1:55909/Login%20Page.html"><button class="buttons" id="back">Back to Login</button> </a>
                </div>
                           
            </div>
            
        </div>
    </div>
    

</body>
</html>
