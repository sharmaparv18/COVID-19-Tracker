<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>COVID19</title>
         <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
     <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,400;1,400&display=swap" rel="stylesheet">
     
     <style>
         html{
             scroll-behavior:smooth;
         }
         *{
             margin: 0;
             padding: 0;
             box-sizing: border-box; 
             font-family: 'Muli', sans-serif;
         }
         .row{
             margin-left: 0! important;
             margin-right: 0! important;
         }
         .nav_style{
             background-color: #a29bfe! important;
             
         }
         .nav_style a{
             color: white;
         }
         .main_header{
             height: 450px;
             width: 100%;
         }
         .rightside h1{
             font-size: 3rem;
         }
         .corona_tr img{
             animation: gocorona 3s linear infinite;
         }
         @keyframes gocorona{
             0% {transform: rotate(0);}
              100% {transform: rotate(360deg);}
             
         }
         .corona_update{
             margin:0 0 30px 0;
         }
         .corona_update h3{
             color:#ff7675;
             
         }
         .corona_update h1{
             font-size: 2rem;
             text-align: center;
         }
         .sub_section{
             background-color: #F5F5F5;
         }
         .abt_img{
             margin-left: 0! important;
         }
         
          .ftr{     
                          background-color: #a29bfe;
                          width: 100%;
                          color:white;
                          text-align: center;
                          padding: 10px 0;
                       
                      }
                      @media(max-width: 768px){
                          .main_header{
                              height: 700px;
                              text-align: center;
                              padding: 0;
                              margin: 0;
                          }
                          .main_header h1{
                              text-align: center;
                              width: 100%;
                              padding: 0;
                              font-size: 30px;
                          }
                          .update{
                              display: inline! important;
                          }
                          .update p{
                              text-align: center;
                          }
                      }
                      canvas{    margin:auto;
                                background-image: url(assets/back.jpeg);
                                border: 5px solid black;
                                
                            }
                            .center {
                                
                                margin:auto;
                                background-color:green;
                            }
     </style>
    </head>
    <body onload="fetch()">
        <nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon " ></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptom">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#pre">Precautions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact us</a>
      </li>
    
    </ul>
   
  </div>
</nav>
        <div class="main_header">
            <div class="row w-100 h-100 ">
                <div class="col-md-5 col-12 order-md-1 order-2">
                    <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                        <img src="f2.jpg" height="300px" width="300px">
                    </div>
                </div>
                <div class="col-md-7 col-12 order-md-1 order-1" >
                     <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
                         <h1 style="font-weight:bold">Let's Fight With Cor<span class="corona_tr"><img src="c2.png"></span>na Virus Together</h1>
                     </div>
                </div>
            </div>
        </div>
      
            <section class="corona_update container-fluid">
                <div class="mb-3">
                    <h3 class="text-center">COVID-19 Updates</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center" id="tbval">
                            <tr>
                                <th>Country</th>
                                <th>Total Confirmed</th>
                                <th>Total Recovered</th>
                                <th>Total Deaths</th>
                                <th>New Confirmed</th>
                                <th>New Recovered</th>
                                <th>New Deaths</th>
                                
                                
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        
        
        <div class="container-fluid sub_section pt-5 pb-5 " id='about'>
            <div class="section_header text-center mb-5 mt-4">
                <h1>About COVID-19</h1>
            </div>
            <div class="row pt-5">
                <div class="col-lg-5 col-md-6 col-12 ml-5 abt_img">
                    <img src="covid.jpg" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>What is COVID-19 ?</h2>
                    <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                    Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover
                    without requiring special treatment.</p><p>  Older people, and those with underlying medical problems like cardiovascular 
                    disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
                       </div>
            </div>
        </div>
        
         <div class="container-fluid  pt-5 pb-5 " id='symptom'>
            <div class="section_header text-center mb-5 mt-4">
                <h1>Coronavirus Symptoms</h1>
            </div>
             <div class="container">
                 <div class="row">
                     <div class="col-md-4 col-12 mt-5">
                         <figure class="text-center">
                             <img src="images/cough.png" class="img-fluid" height="120" width="120">
                         <figcaption>Cough</figcaption>
                         </figure>
                     </div>
                       <div class="col-md-4 col-12 mt-5">
                         <figure class="text-center">
                             <img src="images/nose.png" class="img-fluid" height="120" width="120">
                         <figcaption>Running nose</figcaption>
                         </figure>
                     </div>
                       <div class="col-md-4 col-12 mt-5">
                         <figure class="text-center">
                             <img src="images/sick.png" class="img-fluid" height="120" width="120">
                         <figcaption>Fever</figcaption>
                         </figure>
                     </div>
                       <div class="col-md-4 col-12 mt-5">
                         <figure class="text-center">
                             <img src="images/cold.png" class="img-fluid" height="120" width="120">
                         <figcaption>Cold</figcaption>
                         </figure>
                     </div>
                       <div class="col-md-4 col-12 mt-5">
                         <figure class="text-center">
                             <img src="images/sleep.png" class="img-fluid" height="120" width="120">
                         <figcaption>Tired</figcaption>
                         </figure>
                     </div>
                       <div class="col-md-4 col-12 mt-5">
                         <figure class="text-center">
                             <img src="images/breathing.png" class="img-fluid" height="120" width="120">
                         <figcaption>Difficulty in breathing</figcaption>
                         </figure>
                     </div>
                     
                 </div>
             </div>
         </div>
        
          <div class="container-fluid  pt-5 pb-5 sub_section " id='pre'>
            <div class="section_header text-center mb-5 mt-4 ">
                <h1>6 Steps Prevention Against Coronavirus</h1>
            </div>
              <div class="container">
                  <div class="row ">
                      <div class="col-md-4 col-12 mt-5">
                          <div class="row">
                              <div class="col-md-4 col-12">
                                   <figure class="text-center">
                                       <img src="images/handwash.png" class="img-fluid" height="90" width="90">
                              </div>
                              <div class="col-md-8 col-12">
                                  <p>Wash your hands regularly for 20 seconds with soap and water or alcohol-based hand rub</p>
                              </div>
                          </div>
                          
                      </div>
                         <div class="col-md-4 col-12 mt-5">
                          <div class="row">
                              <div class="col-md-4 col-12">
                                   <figure class="text-center">
                                       <img src="images/covid.png" class="img-fluid" height="90" width="90">
                              </div>
                              <div class="col-md-8 col-12">
                                  <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
                              </div>
                          </div>
                          
                      </div>
                         <div class="col-md-4 col-12 mt-5">
                          <div class="row">
                              <div class="col-md-4 col-12">
                                   <figure class="text-center">
                                       <img src="images/social-distancing.png" class="img-fluid" height="90" width="90">
                              </div>
                              <div class="col-md-8 col-12">
                                  <p>Avoid close contact and maintain social distancing [2 meter or 3 feet] from unwell</p>
                              </div>
                          </div>
                          
                      </div>
                         <div class="col-md-4 col-12 mt-5">
                          <div class="row">
                              <div class="col-md-4 col-12">
                                   <figure class="text-center">
                                       <img src="images/stay-at-home.png" class="img-fluid" height="90" width="90">
                              </div>
                              <div class="col-md-8 col-12">
                                  <p>Stay home and isolate yourself from others if you feel unwell</p>
                              </div>
                          </div>
                          
                      </div>
                         <div class="col-md-4 col-12 mt-5">
                          <div class="row">
                              <div class="col-md-4 col-12">
                                   <figure class="text-center">
                                       <img src="images/television.png" class="img-fluid" height="90" width="90">
                              </div>
                              <div class="col-md-8 col-12">
                                  <p>Stay informed by watching the news and follow the recommenced practices</p>
                              </div>
                          </div>
                          
                      </div>
                         <div class="col-md-4 col-12 mt-5">
                          <div class="row">
                              <div class="col-md-4 col-12">
                                   <figure class="text-center">
                                       <img src="images/chills.png" class="img-fluid" height="90" width="90">
                              </div>
                              <div class="col-md-8 col-12">
                                  <p>If you have cold, cough , fever or difficulty in breathing seek medical attention</p>
                              </div>
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>

          <div class="container-fluid sub_section pt-5 pb-5 " id='about'>
            <div class="section_header text-center mb-5 mt-4">
                <h1> COVID-19 Game</h1>
                <h5> Use your mouse buttons to reach the VACCINE by clicking on image </h5>
            </div>
            <div class="">
                <div class="col-lg-5 col-md-6 col-12 ml-5 abt_img">
                <canvas id="mycanvas"></canvas>
            <script src="game.js">
            </script>
                </div>
            </div>
        </div>
        
          <div class="container-fluid  pt-5 pb-5  " id='contact'>
            <div class="section_header text-center mb-5 mt-4 ">
                <h1>Contact us</h1>
            </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 offset-lg-2 col-12">
                          <form>
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" id="name" placeholder="enter your name" name="name" required>
                            </div>
                            <div class="form-group">
                              <label for="phone">Phone</label>
                              <input type="number" class="form-control" name="phone" id="phone" placeholder="enter your phone number" required>
                            </div>
                              <div class="form-group">
                                  <label>Select symptoms</label><br>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="box1" value="cold" name="symp">
                                    <label class="form-check-label" for="box1">Cold</label>
                                  </div>
                                     <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="box2" value="fever" name="symp">
                                    <label class="form-check-label" for="box2">Fever</label>
                                  </div>
                                     <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="box3" value="breathe" name="symp">
                                    <label class="form-check-label" for="box3">Difficulty in breathing</label>
                                  </div>
                                     <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="box4" value="weakness" name="symp">
                                    <label class="form-check-label" for="box4">Feeling weak</label>
                                  </div>
                              </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Describe how you are feeling</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                              <div class="form-group">
                                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
                      </div>
                  </div>
          </div>
          </div>
                 <footer class="container-fluid ftr">
            Copyright © Sanjay. All Rights Reserved | Contact Us: +91 90000 00000
            
           
            </footer>
        
        <script type="text/javascript">
            $('.count').counterUp({
                delay:10,
                time:2000,
                triggerOnce:true
            });
            function fetch(){
                $.get("https://api.covid19api.com/summary",
        function(data){
            var tbval=document.getElementById('tbval');
            for(var i=1;i<(data['Countries'].length);i++){
                var x=tbval.insertRow();
                x.insertCell(0);
                tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
                 tbval.rows[i].cells[0].style.background='#7a4a91';
                  tbval.rows[i].cells[0].style.color='#fff';
                  x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                 tbval.rows[i].cells[1].style.background='#4bb7d8';
                    x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
                 tbval.rows[i].cells[2].style.background='#4bb7d8';
                    x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
                 tbval.rows[i].cells[3].style.background='#f36e23';
                    x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
                 tbval.rows[i].cells[4].style.background='#4bb7d8';
                    x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
                 tbval.rows[i].cells[5].style.background='#9cc850';
                    x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
                 tbval.rows[i].cells[6].style.background='#f36e23';
        }        
    }
        );
            
            }
            </script>
         
    </body>
      
</html>
