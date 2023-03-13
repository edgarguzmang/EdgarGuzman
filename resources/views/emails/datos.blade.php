<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Responsive Email Template</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <!--STYLESHEETS-->
  <style type="text/css">
    p {
      margin: 0 0 10px;
      line-height: 1.3em;
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
      font-size: 14px;
    }

    img {
      display: inline-block;
      max-width: 100%;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      color: #2A2A2A;
      margin-top: 5px;
      margin-bottom: 5px;
      line-height: 1.3em;
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
    }

    h1 {
      font-size: 35px;
    }

    h2 {
      font-size: 31px;
    }

    h3 {
      font-size: 27px;
    }

    h4 {
      font-size: 23px;
    }

    h5 {
      font-size: 21px;
    }

    h6 {
      font-size: 17px;
    }

    @media screen and (max-width: 414px) {
      h1 {
        font-size: 30px;
      }
      h2 {
        font-size: 26px;
      }
      h3 {
        font-size: 24px;
      }
      h4 {
        font-size: 20px;
      }
      h5 {
        font-size: 18px;
      }
      h6 {
        font-size: 16px;
      }
    }

    ul {
      margin: 0 0 10px;
      line-height: 1.3em;
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
      font-size: 14px;
      color: #333333;
    }

    ol {
      margin: 0 0 10px;
      line-height: 1.3em;
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
      font-size: 14px;
      color: #333333;
    }

    li {
      color: #006DB4;
      padding: 2px 4px 7px 4px;
    }

    li span {
      color: #333333;
    }

    sup {
      font-size: 80%;
      line-height: 0;
      position: relative;
      vertical-align: baseline;
      top: -0.3em;
      padding-left: 1px;
    }

    table {
      mso-table-lspace: 0pt;
      text-decoration: none;
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
    }

    table td {
      border-collapse: collapse;
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
    }

    .hvr-float {
      display: inline-block;
      vertical-align: middle;
      -webkit-transform: perspective(1px) translateZ(0);
      transform: perspective(1px) translateZ(0);
      box-shadow: 0 0 1px transparent;
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s;
      -webkit-transition-property: transform;
      transition-property: transform;
      -webkit-transition-timing-function: ease-out;
      transition-timing-function: ease-out;
    }

    .hvr-float:hover,
    .hvr-float:focus,
    .hvr-float:active {
      -webkit-transform: translateY(-8px);
      transform: translateY(-8px);
    }

    @media screen and (max-width: 600px) {
      .container {
        width: 95% !important;
        text-align: left !important;
        overflow: hidden;
      }
      table[class="responsive-table"] {
        width: 95% !important;
        text-align: left !important;
      }
      table[class="responsive-table"] {
        width: 95% !important;
        text-align: center;
      }
      table[class="responsive-table2"] {
        width: 100% !important;
        display: inline-block;
        text-align: center !important;
      }
    }

    .container-footer {
      width: 100% !important;
      text-align: left !important;
      overflow: hidden;
    }

    .clickhere {
      text-decoration: none;
      color: white;
      font-family: verdana, sans-serif;
      font-style: normal;
      text-align: center;
      font-size: 10px;
    }

    a {
      color: #333333;
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
    }

    a:link {
      text-decoration: none;
    }

    a:visited {
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    a:active {
      text-decoration: none;
    }

    .red {
      color: #006DB4;
    }

    a.learn-more-link {
      color: #006DB4;
      -webkit-transition: .25s all;
      transition: .25s all;
      text-decoration: none;
    }

    a.learn-more-link:hover {
      color: #fff;
    }

    @media screen and (max-width: 350px) {
      a.learn-more-link {
        color: #006DB4;
        -webkit-transition: .25s all;
        transition: .25s all;
        text-decoration: none;
        display: block;
      }
    }

    body {
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
      color: #3A3A3A;
      padding: 0;
      margin: 0;
      -webkit-text-size-adjust: none;
    }

    .hover-me-1 {
      transition: all 0.3s ease-in-out !important;
    }

    .hover-me-1:hover {
      background-color: #006DB4 !important;
      color: #ffffff !important;
      font-size: 15px !important;
      font-weight: 700;
    }

    .center-align {
      margin: auto;
    }

    .bold {
      font-weight: 700;
    }

    .OptOutText {
      color: #9a9a9b !important;
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
      font-size: 10px;
      text-decoration: none;
      text-align: center;
    }

    .OptOutText a {
      color: #9a9a9b !important;
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
      font-size: 10px;
      text-decoration: none;
    }

    .OptOutText a:hover {
      color: #9a9a9b !important;
      font-family: 'Century Gothic, Verdana, Arial', sans-serif;
      font-size: 10px;
      text-decoration: underline;
    }

    .logo-padding {
      padding-bottom: 10px;
    }

    .tag-padding {
      padding-top: 5px;
    }

    @media screen and (max-width: 600px) {
      .logo-padding {
        padding-bottom: 0;
      }
      .tag-padding {
        padding-top: 0;
      }
    }

    a.opacity-hover {
      opacity: 1;
    }

    a:hover.opacity-hover {
      opacity: 0.5;
    }

    a:hover.rotate-hover {
      transform: rotateY(180deg);
    }

    .uc {
      text-transform: uppercase;
    }
  </style>
  <!--END STYLESHEETS-->
</head>

<body>
  <!--WRAPPER-->
  <table width="100%" height="100%" bgcolor="black" cellspacing="0" cellpadding="0" border="0" style="padding: 20px 0;">
    <tbody>
      <tr>
        <td align="center">
          <!--PREHEADER TEXT-->

          <table width="600" cellspacing="0" cellpadding="5" border="0" class="container">
            <tbody>
              <tr>
             
                  <br></td>
              </tr>
            </tbody>
          </table>

          <!--END PREHEADER TEXT-->

          <!--CONTENT-->

          <table width="600" bgcolor="#ffffff" cellspacing="0" cellpadding="0" border="0" class="container" style="font-size: 14px; border: 2px solid #fff;">

            <!--IMAGE SECTION-->
            <tbody>
              <tr>
                <td style="width: 100%; height: 100%; position: relative;"><img src="images/banner1.jpg" alt=""></td>
              </tr>
              <!--END IMAGE SECTION-->

              <!--HEADER SECTION-->
              <tr>
                <td style="text-align: center; padding: 5px 0 0 0;">
                  <h1><strong>LARAVEL PROYECTO</strong></h1>
                </td>
              </tr>
              <!--END HEADER SECTION-->

              <!--2 COLUMN SECTION-->
              <tr>
                <td style="text-align: left; vertical-align: top; font-size: 0;">
                  <!--[if (gte mso 9)|(IE)]>
                            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="width: 268px; padding: 0 15px; display: inline-block; vertical-align: top;">
                            <![endif]-->

                  <div class="container" style="width: 268px; padding: 0 15px; display: inline-block; vertical-align: top;">
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td style="text-align: center;">
                            <p>¿Has ingresado al sitio edgarguzman.online?</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!--[if (gte mso 9)|(IE)]>
                                    </td><td style="width: 268px; padding: 0 15px; display: inline-block; vertical-align: top;">
                                    <![endif]-->

                  <div class="container" style="width: 268px; padding: 0 15px; display: inline-block; vertical-align: top;">
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td style="text-align: left;">
                            <p>Si eres tu da click al boton verificar,si no ignora el mensaje.</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
                </td>
              </tr>
              <!--END 2 COLUMN SECTION-->

            

             

              <!--SECTION BUTTON-->

              <tr>
                <td style="text-align:center">
                  <table border="0" cellspacing="0" cellpadding="0" class="center-align" style="padding:0 0 20px 0">
                    <tbody>
                      <tr>
                        <td width="140" height="45" bgcolor="#ffffff" align="center" style="
 font-family: verdana, sans-serif;
font-size: 15px !important;
    font-weight: 700; 
color:#ffffff; 
display:block;
vertical-align:middle;
font-weight:400; 
-webkit-text-size-adjust: none;
border:2px solid #006DB4;
text-transform: uppercase;
text-align: center;
">  
                          <font face="Century Gothic, Verdana, Arial, sans-serif" style="font-size: 15px; font-weight: 700"> <a class="hover-me-1" href="{{$url}}" target="_blank" style="color:#006DB4; text-decoration:none !important; display:inline-block; width:100%; line-height:45px;">Verificar</a> </font>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <!--END SECTION BUTTON-->

                <!--CTA-->
              </tr>
              <tr>
                <td style="text-align: center; vertical-align: center; background-color:#C5D1D3; color: white; padding-top: 12px">
                  <!--[if (gte mso 9)|(IE)]>
            </td><td style="width: 100px; padding: 0 15px; display: inline-block; vertical-align: top;">
            <![endif]-->

                  

                  <!--[if (gte mso 9)|(IE)]>
                            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="width: 386px; display: inline-block; vertical-align: top;">
                            <![endif]-->

                  <div class="container" style="width: 386px; display: inline-block; vertical-align: center;">
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td style="text-align: center; color: white;" class="tag-padding">
                            <h6 class="uc"><strong>PROJECT LARAVEL</strong></h6>
                            <p style="font-size: 14px;"> Email:<a href="https://github.com/Guzmansito06069" class="learn-more-link" target="_blank"> guzman@gmail.com</a>&nbsp; Number:<a href="tel:87-12-69-53-49" class="learn-more-link" target="_blank"> 8712695349</a></p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
                </td>
              </tr>
              <!--END CTA-->

            </tbody>
          </table>

          <!--END CONTENT-->

          <!--Footer-->

          <table width="600" cellspacing="0" cellpadding="0" border="0" class="responsive-table">
            <!-- Section -->
            <tbody>
              <tr style="text-align: center;">
                <td style="padding: 7px 0; text-align: center; vertical-align: bottom; font-size: 0;">
                  <!--[if (gte mso 9)|(IE)]>
            </td><td style="padding: 5px 0; text-align: center; vertical-align: bottom; font-size: 0;">
            <![endif]-->

                 

                  <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
                </td>
              </tr>
              <!-- #section end -->
            </tbody>
          </table>
          <table width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="" class="responsive-table">
            <tbody>
              <tr style="border-top: 1px solid #e0e0e0; border-bottom: 1px solid #e0e0e0; text-align: center;">
                <td style="padding-bottom: 0px; text-align: center; vertical-align: bottom; font-size: 0;">
                  <!--[if (gte mso 9)|(IE)]>
            </td><td style="width: 550px; display: inline-block; vertical-align: center;">
            <![endif]-->

                  <div class="responsive-table" style="display: inline-block; vertical-align: center;">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="" class="responsive-table">
                      <tbody>
                        <tr>
                          <td align="center" bgcolor="" style="font-size: 10px; color: white;">©2022, EDGAR GUZMAN<sup>®</sup>. Derechos reservados </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
                </td>
              </tr>
            </tbody>
          </table>

          <!--footer end-->
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>

