

<div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0 "><h3>Découvrir Nos Etablissements</h3></p>

                  <hr class="border-warning mt-1">
                              
                              
                <?php
/*                
                $connect_news=$path.'Config/connect_news.php';
                include($connect_news);

                $sql='Select * from news where active=true';

	              $req = $con->query($sql);

                $count = $req->rowCount();

                // initialisation des variables 
                
                if (!isset($_GET['debut']))  {
                    $debut=0;
                   
                    } else
                    {
                      $debut=$_GET['debut'];
                    }
                    
                 
                   if (!isset($_GET['id']))  {
                      $id=1;
                     
                      } else
                      {
                        $id=$_GET['id'];
                      }
                      
                    

                    
                    $fin=$debut+5;

                $sqll='Select * from news where active=true order by id desc LIMIT '.$debut.', 5 ;';

	              $reqq = $con->query($sqll);

               
                $acc=0;      
                echo '<div class="row"> ';
                
                while($row = $reqq->fetch()) {
                
                
                setlocale(LC_TIME, "fr_FR", "French");
                $date1 = $row['dat'];
                
                $dat = strftime(" %d %B ", strtotime($date1));
         
              
               
               $lien=$path."app/news/index.php?id=".$row['id']."&debut=0";

                $acc=$acc+1;
                
                  echo "<div class='col-lg-1 mb-0'>
                  <img src='".$path."images/barre2.png' class='m-0'> </div> 
                  <div class='col-lg-11 mb-0 p-1'>
                  
                  <a href=".$lien." > ".substr($row['titre'], 0, 80)." </a><br>
                  
                  <a href=".$lien." class='text-warning'>".$dat."</a><br>
                  <a href=".$lien." class='text-warning'>".$row['ref']."</a>
                  </div>";
                  
                
                
                }
                
                echo '</div><table>
                
                       <tr>
                            <th colspan="3" >
                            <div class="float-right">

                              <div class="btn-group mt-2">';
 
                $pos2=$debut-5;
                $lien3="index.php?id=".$id."&debut=".$pos2;
               
                if ($pos2>=0) echo ' <a class="btn btn-dark btn-sm" href="'.$lien3.'">&laquo;</a>';
               
                $i = 0;$pg=0;
                while ($i < $count) {
                    
                    $pg=$pg+1;
                    
                    
                    $intervall_debut=$debut-5;
                    $intervall_fin=$debut+20;
                    
                    if ($intervall_fin>=$count) 
                    
                    {
                      $intervall_debut=$count-30;
                      $intervall_fin=$count;

                    }

                    $lien2="index.php?id=".$id."&debut=".$i;
                    
                    if (($i>$intervall_debut) && ($i<= $intervall_fin))

                      if ($i<>$debut) {
                    
                        echo ' <a class="btn btn-dark btn-sm" href="'.$lien2.'">'.$pg.'</a> ';

                      } else

                      {
                        echo ' <a class="btn btn-outline-dark btn-sm disabled"  href="'.$lien2.'">'.$pg.'</a> ';
                      }
                    
                    $i=$i+5;
              }
                
                $pos=$debut+5;
                $lien4="index.php?id=".$id."&debut=".$pos;

                if ($pos<$count) echo ' <a class="btn btn-dark btn-sm" href="'.$lien4.'">&raquo;</a>';
                
                echo '
                              </div> 
                             </div> 
                          </th>
                       </tr>
                
                </table></div>';

  */            
               ?> 

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class='carousel-inner'>
                          
                          <div class='carousel-item active '>

                            <div  class=' col-xl-12 col-lg-12 card shadow border border-primary text-left mb-4 cadre '>
                            <a href="app/etablissements/institut/">
                            <h3 class="text-center text-primary" > <b>  معهد التكوين في التسيير  </b> </h3 > <br> <h6 class="text-center mt-1" > شارع يحي مازوني رقم 17 اﻷبيار الجزائر  </h6 ><br>

                                              <h2 class="mt-3 text-center text-primary"> <b> I.F.G -ALGER</b></h2>
                                           <br><h5 class='text-center' ><b>Institut de Formation en Gestion  <br><br>  17 , rue Yahia el Mazouni Val d’Hydra – Alger</b></h5></a> <br>
                                              
                                </div>
                         </div>
                          


                         <div class='carousel-item '>
                         <div class='col-xl-12 col-lg- card shadow border border-warning text-left mb-4 cadre_ees' >

                          <a href="app/etablissements/etablissement/">
                          <h3 class="text-center text-warning" > <b>  مؤسسة التعليم الثانوي </b> </h3 > <br> <h6 class="text-center mt-1" > حي 350 مسكن الربوة الحمراء حسين داي  -الجزائر </h6 ><br>

                          <h2 class="text-warning text-center mt-3"> <b> E.E.S -ALGER</b></h2>

                              <br><h5 class='text-center' ><b>Etablissement d’Enseignement Secondaire  <br><br> cité 350 Logts côte rouge hussein dey - Alger </b></h5></a><br>
                            </div>

                          </div>


                          <div class='carousel-item '>
                          <div class='col-xl-12 col-lg-12 card shadow border border-success text-left mb-4 cadre_efpg'>

                          <a href="app/etablissements/Ecole01/">
                          <h3 class="text-center text-success" > <b>   مدرسة التكوين المهني في التسيير  - الجزائر  </b> </h3 > <br> <h6 class="text-center mt-1" > إكمالية هارون الرشيد - ساحة 1 ماي -  الجزائر           </h6 ><br>

                            <h2 class="mt-3 text-success text-center"> <b> E.F.P.G -ALGER </b></h2>
                                <br>   <h5 class='text-center' ><b>	Ecole de Formation Professionnelle en Gestion  <br> <br> CEM Haroune Rachid Place du 1er Mai – Alger </b></h5></a><br>
                              </div>

                          </div>


                          <div class='carousel-item '>
                          <div class='col-xl-12 col-lg-12 card shadow border border-info text-left mb-4 cadre_efpg_bejaia'>

                            <a href="app/etablissements/bejaia/index.php">
                            <h3 class="text-center text-info" > <b>   مدرسة التكوين المهني في التسيير  - بجاية  </b> </h3 > <br> <h6 class="text-center mt-1" >       حي 164 مسكن سوناطرك - بجاية    </h6 ><br>

                            <h2 class="mt-3 text-info text-center"> <b> E.F.P.G -BEJAIA </b></h2>
                              <br>   <h5 class='text-center'><b>	Ecole de Formation Professionnelle en Gestion <br><br>  Cité 164 Logts Sonatrach - Bejaia </b></h5></a><br>
                            </div>
                  
                          </div>



                          <div class='carousel-item '>
                          <div class='col-xl-12 col-lg-12 card shadow border border-danger text-left mb-4 cadre_efpg_oran'>

                            <a href="app/etablissements/oran/index.php">

                            <h3 class="text-center text-danger" > <b>   مدرسة التكوين المهني في التسيير  - وهران  </b> </h3 > <br> <h6 class="text-center mt-1" >  نهج العربي بن مهيدي - وهران        </h6 ><br>

                            <h2 class="text-danger text-center"> <b> E.F.P.G -ORAN </b></h2>
                            <br>   <h5 class='text-center' ><b>	Ecole de Formation Professionnelle en Gestion <br> <br> Avenue Larbi Ben Mhidi - Oran  </b></h5></a><br>
                           </div>
  

                          </div>
                         </div>
	                  
                </div>
              </div>
              </div>
