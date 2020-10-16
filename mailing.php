<?php
// error_reporting(E_ALL);
//   ini_set('display_errors', '1');

function htmlMail($t, $sub, $name, $teamname, $event){


    $to = $t;

    $subject = $sub;

    $html = "<!DOCTYPE html>
              <html>
                  <head>
                      <style>
                          li{
                              padding:10px;
                          }
                          p{
                              font-size:16px;
                          }

                          *{
                              font-family:Helvetica,Arial,sans-serif;
                          }

                          h2
                          {
                            font-size: 1.3rem;
                          }
                          html, body{
                              background-color:#f7f9fb;
                              margin: 0;
                          }
                          h3,h4
                          {
                            font-size: 1rem;
                          }
                          .context {
                              font-size: 12px;
                              padding: 40px 60px;
                              margin-left:10%;
                              margin-right: 10%;
                          }

                          .context p{
                              font-size: 12px;
                          }
                          #conditions
                          {
                            font-size: 0.7rem;
                          }
                          p{
                              margin: 15px 0px;
                          }

                      </style>
                  </head>
                  <body>

                      <div style='background: #0b0b0b; padding:10px 30px;'><img src='https://www.ecellvnit.org/img/logo-ecell.png'></div>

                      <div class='context'>


                          <h2><b>Greetings ".$name."!</b></h2>


                          <p>Thank you for  showing interest in our <b>Campus Ambassador Program</b> through which we aim to extend our entrepreneurial network across the country.</p>
                          <div>
                            <h4>Pre-hiring Task:</h4>
                            <p>E-Cell VNIT is conducting a IPL  Fantasy League Auction, an event where in people get an opportunity to form their own dream team. *</p>

                            <a href='https://www.instagram.com/p/CGXhsAvncO1/?igshid=ed7n548sbsp6'>Ecell VNIT on Instagram | IPL Auction</a>

                            <p style='font-size: 0.7rem;'>
                              * Further details shall be shared later
                            </p>
                            <h4>Perks: </h4>
                            <p>
                              On bringing at least four teams from their college candidate shall receive the following benefits:
                              <ol>
                                <li>Free entry in <b>IPL Auction</b></li>
                                <li><b>Certificate</b> as a part of organising team for 'IPL Auction' by <b>E-Cell VNIT</b></li>
                                <li>Direct entry to the <b>CA program</b> for E-Cell VNIT for the calendar year 2020-21</li>
                              </ol>
                            </p>
                          </div>

                          <p>
                            Regards<br />
                            <b>Team E-Cell VNIT</b>
                          </p>
                      </div>
                  </body>
                                      </html>";

    $url = 'https://startupconclave.ecellvnit.org/send';
    $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'Entrepreneurs2020');

    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) {
        $msg = 'We are facing problem in sending email. Please use this link to pay your registration fees.';
        return false;
    }

    return true;

  }
?>