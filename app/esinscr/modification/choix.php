<?php

$fp = fopen ("path.php", "r");
$path = fgets ($fp, 255);
fclose ($fp);


if(session_id() == '') {
	session_start();
  }

$_SESSION['path']=$path;



if (isset($_SESSION['id_inscription_etablissement'])){

$p=explode("|",$_GET['id']);
$pp=$p[1];
      
$id=$pp;

$idd=$id;

if ($_SESSION['id_inscription_etablissement'] <> $idd){ 
  header("Location: index.php"); 		 
}
} else {header("Location: index.php");}

$connect=$path.'Config/connect_news.php';
include($connect);

$sqll=' SELECT * FROM inscription_etablissement where id='.$idd;

$reqq = $con->query($sqll);


$rows = $reqq->fetch();



$sqll='Select * from moyenne_etablissement ;';
$reqq = $con->query($sqll);
							
$row_moy = $reqq->fetch();
							
$cnag=$row_moy[1];
$moy_adm=$row_moy[0];
          

$refait=false;

if ($rows["NIVS"]=='1') {

  
$moy=$rows["MOYENNE"];

//$moy_bem=$rows["MOYENNE_BEM"];

$moyg=$moy;


if ($moyg>=$cnag) {

      $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.$rows['NIVS'];

      $reqq = $con->query($sqll);

      $ro = $reqq->fetch();

      }

}



if ($rows["NIVS"]=='2') {

  
  $moyg=$rows["MOYENNE"];
  
  
  
  if ($moyg>=$moy_adm) {
  
        $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.($rows['NIVS']+$rows['NIVS']);
  
        $reqq = $con->query($sqll);
  
        $ro = $reqq->fetch();
  
        } else {
  
          $sqll=' SELECT * FROM equivalent_niveau_etablissement where niveau='.$rows['NIVS'];
    
          $reqq = $con->query($sqll);
    
          $ro = $reqq->fetch();

          $refait=true;
    
          }
  
  
  }
  
  
if ($rows["NIVS"]=='3') {

  
  $moyg=$rows["MOYENNE"];
  
  
  
  if ($moyg>=$moy_adm) {
  
        $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.($rows['NIVS']+$rows['NIVS']);
  
        $reqq = $con->query($sqll);
  
        $ro = $reqq->fetch();
  
        } else {
  
          $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.$rows['NIVS'];
    
          $reqq = $con->query($sqll);
    
          $ro = $reqq->fetch();
          
        
          $sqll=' SELECT * FROM equivalent_niveau_etablissement where niveau='.$ro['niveau'];
    
          $reqq = $con->query($sqll);
    
          $ro = $reqq->fetch();
        
        
          $refait=true;
          }
  
  
  }

  
  
  if ($rows["NIVS"]=='4') {

  
    $moyg=$rows["MOYENNE"];
    
    
    
    if ($moyg>=$moy_adm) {
    
          $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.($rows['NIVS']+4);
    
          $reqq = $con->query($sqll);
    
          $ro = $reqq->fetch();
    
          } else {
    
            $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.$rows['NIVS'];
    
            $reqq = $con->query($sqll);
      
            $ro = $reqq->fetch();
            
          
            $sqll=' SELECT * FROM equivalent_niveau_etablissement where niveau='.$ro['niveau'];
      
            $reqq = $con->query($sqll);
      
            $ro = $reqq->fetch();
          
            $refait=true;
            }
    
    
    }
  
if ($rows["NIVS"]=='5') {

  
      $moyg=$rows["MOYENNE"];
      
      
      
      if ($moyg>=$moy_adm) {
      
            $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.($rows['NIVS']+4);
      
            $reqq = $con->query($sqll);
      
            $ro = $reqq->fetch();
      
            } else {
      
              $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.$rows['NIVS'];
        
              $reqq = $con->query($sqll);
        
              $ro = $reqq->fetch();
        
              $refait=true;
              }
      
      
      }

if ($rows["NIVS"]=='6') {

  
        $moyg=$rows["MOYENNE"];
        
        
        
        if ($moyg>=$moy_adm) {
        
              $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.($rows['NIVS']+4);
        
              $reqq = $con->query($sqll);
        
              $ro = $reqq->fetch();
        
              } else {
        
                $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.$rows['NIVS'];
          
                $reqq = $con->query($sqll);
          
                $ro = $reqq->fetch();
          
                $refait=true;
                }
        
        
        }

if ($rows["NIVS"]=='7') {

  
          $moyg=$rows["MOYENNE"];
          
          
          
          if ($moyg>=$moy_adm) {
          
                $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.($rows['NIVS']+4);
          
                $reqq = $con->query($sqll);
          
                $ro = $reqq->fetch();
          
                } else {
          
                  $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.$rows['NIVS'];
            
                  $reqq = $con->query($sqll);
            
                  $ro = $reqq->fetch();
            
                  $refait=true;
                  }
          
          
          }

if ($rows["NIVS"]>='8') {

  
            $moyg=$rows["MOYENNE"];
            
            
            
            
                  $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.($rows['NIVS']);
            
                  $reqq = $con->query($sqll);
            
                  $ro = $reqq->fetch();
            
            
            
            }
  
          /////////

if ($rows['WILAYA_N']<>'') {
$sqll=' SELECT * FROM wilaya where CODE_W='.$rows['WILAYA_N'];

$reqq = $con->query($sqll);


$row_wilaya = $reqq->fetch();

$WADR=$row_wilaya['WILAYA'];
} else $WADR='';

if ($rows['COMMUNE_N']<>'') {
$sqll=' SELECT * FROM commune where (CODE_C='.$rows['COMMUNE_N'].') and (CODE_W='.$rows['WILAYA_N'].')';

$reqq = $con->query($sqll);


$row_commune = $reqq->fetch();
$CADR=$row_commune['COMMUNE'];
} else $CADR='';


?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Etablissements de formation</title>
  
  <?php
	 $base_css=$path.'page/base_css.php';
	 include($base_css);
	 
	?> 

<script type="text/javascript">

                  function testForm(s,v){

                  var ss="#"+s;
                  var mm="#c"+s;
                  var vv=v;
                  jQuery(mm).html(vv);


if (s=='choix1')  { 
  
   $("#choix2 option[value='"+vv+"']").remove();
   $("#choix3 option[value='"+vv+"']").remove();
   $("#choix4 option[value='"+vv+"']").remove();
   $("#choix5 option[value='"+vv+"']").remove();
   $("#choix6 option[value='"+vv+"']").remove();
   $("#choix7 option[value='"+vv+"']").remove();
   $("#choix8 option[value='"+vv+"']").remove();
   $("#choix9 option[value='"+vv+"']").remove();
}

 if (s=='choix2')  { 
   $("#choix1 option[value='"+vv+"']").remove();
   $("#choix3 option[value='"+vv+"']").remove();
   $("#choix4 option[value='"+vv+"']").remove();
   $("#choix5 option[value='"+vv+"']").remove();
   $("#choix6 option[value='"+vv+"']").remove();
   $("#choix7 option[value='"+vv+"']").remove();
   $("#choix8 option[value='"+vv+"']").remove();
   $("#choix9 option[value='"+vv+"']").remove();
}

 if (s=='choix3')  { 
   $("#choix1 option[value='"+vv+"']").remove();
   $("#choix2 option[value='"+vv+"']").remove();
   $("#choix4 option[value='"+vv+"']").remove();
   $("#choix5 option[value='"+vv+"']").remove();
   $("#choix6 option[value='"+vv+"']").remove();
   $("#choix7 option[value='"+vv+"']").remove();
   $("#choix8 option[value='"+vv+"']").remove();
   $("#choix9 option[value='"+vv+"']").remove();
}

 if (s=='choix4')  { 
   $("#choix1 option[value='"+vv+"']").remove();
   $("#choix2 option[value='"+vv+"']").remove();
   $("#choix3 option[value='"+vv+"']").remove();
   $("#choix5 option[value='"+vv+"']").remove();
   $("#choix6 option[value='"+vv+"']").remove();
   $("#choix7 option[value='"+vv+"']").remove();
   $("#choix8 option[value='"+vv+"']").remove();
   $("#choix9 option[value='"+vv+"']").remove();
}

if (s=='choix5')  { 
   $("#choix1 option[value='"+vv+"']").remove();
   $("#choix2 option[value='"+vv+"']").remove();
   $("#choix3 option[value='"+vv+"']").remove();
   $("#choix4 option[value='"+vv+"']").remove();
   $("#choix6 option[value='"+vv+"']").remove();
   $("#choix7 option[value='"+vv+"']").remove();
   $("#choix8 option[value='"+vv+"']").remove();
   $("#choix9 option[value='"+vv+"']").remove();
}
if (s=='choix6')  { 
   $("#choix1 option[value='"+vv+"']").remove();
   $("#choix2 option[value='"+vv+"']").remove();
   $("#choix3 option[value='"+vv+"']").remove();
   $("#choix4 option[value='"+vv+"']").remove();
   $("#choix5 option[value='"+vv+"']").remove();
   $("#choix7 option[value='"+vv+"']").remove();
   $("#choix8 option[value='"+vv+"']").remove();
   $("#choix9 option[value='"+vv+"']").remove();
}


if (s=='choix7')  { 
   $("#choix1 option[value='"+vv+"']").remove();
   $("#choix2 option[value='"+vv+"']").remove();
   $("#choix3 option[value='"+vv+"']").remove();
   $("#choix4 option[value='"+vv+"']").remove();
   $("#choix5 option[value='"+vv+"']").remove();
   $("#choix6 option[value='"+vv+"']").remove();
   $("#choix8 option[value='"+vv+"']").remove();
   $("#choix9 option[value='"+vv+"']").remove();
}

if (s=='choix8')  { 
   $("#choix1 option[value='"+vv+"']").remove();
   $("#choix2 option[value='"+vv+"']").remove();
   $("#choix3 option[value='"+vv+"']").remove();
   $("#choix4 option[value='"+vv+"']").remove();
   $("#choix5 option[value='"+vv+"']").remove();
   $("#choix6 option[value='"+vv+"']").remove();
   $("#choix7 option[value='"+vv+"']").remove();
   $("#choix9 option[value='"+vv+"']").remove();
}

if (s=='choix9')  { 
   $("#choix1 option[value='"+vv+"']").remove();
   $("#choix2 option[value='"+vv+"']").remove();
   $("#choix3 option[value='"+vv+"']").remove();
   $("#choix4 option[value='"+vv+"']").remove();
   $("#choix5 option[value='"+vv+"']").remove();
   $("#choix6 option[value='"+vv+"']").remove();
   $("#choix7 option[value='"+vv+"']").remove();
   $("#choix8 option[value='"+vv+"']").remove();
}


if (s=='choix10')  { 
   $("#choix1 option[value='"+vv+"']").remove();
   $("#choix2 option[value='"+vv+"']").remove();
   $("#choix3 option[value='"+vv+"']").remove();
   $("#choix4 option[value='"+vv+"']").remove();
   $("#choix5 option[value='"+vv+"']").remove();
   $("#choix6 option[value='"+vv+"']").remove();
   $("#choix7 option[value='"+vv+"']").remove();
   $("#choix8 option[value='"+vv+"']").remove();
}

if (s=='choix11')  { 
   $("#choix1 option[value='"+vv+"']").remove();
   $("#choix2 option[value='"+vv+"']").remove();
   $("#choix3 option[value='"+vv+"']").remove();
   $("#choix4 option[value='"+vv+"']").remove();
   $("#choix5 option[value='"+vv+"']").remove();
   $("#choix6 option[value='"+vv+"']").remove();
   $("#choix7 option[value='"+vv+"']").remove();
   $("#choix8 option[value='"+vv+"']").remove();
}

                 // console.log(s);
      
                }



                           /*     
                function valideForm(){
                    var test='false';
                      
                    for(i=1;i<=11;i++){
                      var ss="#choix"+i;
                          if(jQuery(ss).val()==1){
                            test='true';
                          } 
                          console.log(jQuery(ss).val());
                          console.log(test);
                    }
                    if (test=='false') {alert('Veuillez mentionner Votre 1 choix ?');return false; }else {return true;}

                    console.log(test);
                  }            

*/



           
function valideForm(k){
                    var niv=k;
                    console.log(k);

                    if (k<=4) {

                    var test='false';
                    var test_c1='false';
                    var test_c2='false';
                      
                    for(i=1;i<=11;i++){
                      var ss="#choix"+i;
                          if(jQuery(ss).val()==1){
                            test_c1='true';
                          } 

                          if(jQuery(ss).val()==2){
                            test_c2='true';
                          }

                          
                          //console.log(jQuery(ss).val());
                         
                    }
                    if ((test_c1=='true')&&(test_c2=='true')){test='true';}
                    if (test=='false') {alert('Veuillez mentionner Votre 1 , 2  choix ?');return false; }else {return true;}

                    //console.log(test);
                  } else {

                    var test='false';
                      
                    for(i=1;i<=11;i++){
                      var ss="#choix"+i;
                          if(jQuery(ss).val()==1){
                            test='true';
                          } 
                          console.log(jQuery(ss).val());
                          console.log(test);
                    }
                    if (test=='false') {alert('Veuillez mentionner Votre 1 choix ?');return false; }else {return true;}

                    console.log(test);
                  }   
                    
         
                  }                  
                  
                  

</script>

</head>
<body>
  <div class="container-scroller ">
    <!-- partial:partials/_navbar.html -->
    <?php
	
	$top_bar=$path.'page/top_bar_insc.php';
	include($top_bar);

	?> 

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      <?php
		 $menu=$path.'page/menu.php';
		 include($menu);
		
	?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
         
                    
                <?php
                
                $documents=$path.'page/marque.php';
                include($documents);

                ?> 
                
       



          <div class="row">

          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                  
                  <h2 class="text-center text-warning" > <b>    مؤسسة التعليم الثانوي  </b> </h2 >  <h6 class="text-center" >  حي 350 مسكن الربوة الحمراء حسين داي  -الجزائر      </h6 >

                  <p class="card-title mt-2"><h2 class="text-center" >Etablissement d’Enseignement Secondaire  </h2><h6 class="text-center"> cité 350 Logts côte rouge hussein dey - Alger   </h6 > <br> <br>
                  <hr class="border-warning mt-1" width='90%' >

                  <div class="row mt-4">
                  <div class='col-xl-1 col-lg-1'>  </div>
                  
                  <div class='p-4 col-xl-9 col-lg-9 card shadow border text-left mb-4 '>
                  <p class="card-title mb-0"><h2 class="text-center" >اختيار السنة والفرع </h2 ><h4 class="text-warning text-center">يجب على المرشح ترتيب الاختيارات </h4 >
                  <hr class="border-warning"><br>
                      
                  <form  method="POST" action="ins_choix.php" onsubmit="<?php echo 'return valideForm('.$ro['niveau'].');' ?>"  >
   
              <div class="row">
                     <?php

                    

                      $connect=$path.'Config/connect_news.php';
                      include($connect);


                      if ($refait==false){
                      $sqll=' SELECT * FROM equivalent_formation_etablissement where niveau='.$ro['niveau'];
                       } else { 
                      $sqll=' SELECT * FROM equivalent_formation_etablissement where niveau='.$ro['niveau'];
                      }
                      $reqq = $con->query($sqll);

                      $count = $reqq->rowCount();

                      $c=1;
                      while($row = $reqq->fetch()) {
                        $i=1;  
                        echo '<div class="col-xl-2 col-lg-2">
                        <input type="hidden" name="for'.$row["id"].'" value="'.$row["id"].'" />
                        <input type="hidden" name="des'.$row["id"].'" value="'.$row["designation"].'" />
                        <select id="choix'.$row["id"].'" name="choix'.$row["id"].'"   class="form-control form-control-sm" onchange="testForm(`choix'.$row["id"].'`, this.value)"  ><option value=""></option>';
                          while ($i<=$count) {
                            echo '<option  value="'.$i.'">'.$i.'</option>';
                            $i++;
                          }
                          echo '</select></div><div class="p-1 col-xl-9 col-lg-9  text-right"><h3>'.$row["designation"].'</h3></div>';
                          $c++;
              
                      }
                      echo '<input type="hidden" name="id" value="'.$idd.'" />';
                        
                      ?>

                    
                        
                    </div>   
                    <div class="text-left"><a class="btn btn-primary btn-sm" href="javascript:location.reload();">  مسح الخيارات </a></div>
                    </div>

              </div>
              <div class="row mt-4">
                <div class='col-xl-1 col-lg-1'>  </div>
                  <div class='p-4 col-xl-9 col-lg-9 card shadow border text-left mb-4 '>
                  <hr class="border-warning"><br>

                  
                  <div class="form-group text-center"> 
           

                  
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal">
	Consultation et Validation
	</button>
  <input type="button" name='retour' class="btn btn-primary  " onclick="javascript:history.back()"  value="Retour">
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Validation de l'Inscription</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		
    	<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">


    <div class="form-group ">
       <center>  <?php  print "<img src='".$path."backup/etablissement/inscription/photos/".$rows['PHOTO']."' width='100px' height='120px'>";?>    </center>
                          
     </div>

    <div class="row mt-4">
                  
                  <div class='p-2 col-xl-6 col-lg-6 card  text-left mb-4 '>
                  <p class="card-title mb-0"><h4 class="text-center" >Candidat </h4 > </h6 >
                  <hr class="border-warning"><br>
                      
                    
                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Nom :</label>
                          <?php print $rows['NOME'];?>
                    
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Prénom :</label>
                          <?php print $rows['PRENOME'];?>
      
                    </div>

                    <div class="form-group text-right">
                    <?php  print $rows['PRENOMAR'];?>
                    <label class="font-weight-bold text-gray-100 " for="textarea"><h4> : الإسم </h4></label>
                          
                          
                    </div>

                    <div class="form-group text-right">
                    <?php  print $rows['NOMAR'];?>
                    <label class="font-weight-bold text-gray-100" for="textarea"><h4> : اللقب </h4> </label>
                          
                          
                          
                    </div>

                    
                    <div class="form-group">
                      
                      <label class="font-weight-bold text-gray-100" for="textarea">Sexe :</label>
                      <?php  print $rows['SEXE'];?>
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Date de Naissance :</label>
                      <?php  print $rows['DATN'];?>
                    
                   
                    </div>

                   
                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Lieu de Naissance :</label>
                        <?php  print $rows['LIEU'];?>   
                          
                      
                    </div>


                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Adresse:</label>
                      <?php  print $rows['ADR'];?>   
                          
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">E-Mail :</label>
                      <?php  print $rows['MAIL'];?>    
                          
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">N° Téléphone :</label>
                      <?php  print $rows['NPHE'];?>    
                      
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">N° Téléphone du père ou tuteur:</label>
                      <?php  print $rows['NPHT'];?>    
                          
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Niveau Scolaire:</label>
                    
                      <?php

                          $connect=$path.'Config/connect_news.php';
                          include($connect);

                          $sqll=' SELECT * FROM equivalent_niveau_etablissement where id='.$rows['NIVS'];

                          $reqq = $con->query($sqll);
                          
                          $row = $reqq->fetch();             
                          echo $row["designation"];
                            

                      ?>

                    </div>

                    
       
                    
                  </div>

                  

                  <div class='p-2 col-xl-6 col-lg-6 card  text-left mb-4 '>

                  <p class="card-title mb-0 "><h4 class="text-center" >L'Agent </h4 > </h6 >
                  <hr class="border-warning"><br>
                  
                      
                    <div class="form-group">
                      
                      <label class="font-weight-bold text-gray-100" for="textarea">Lien de parenté :</label>
                      <?php  print $rows['LIP'];?>    
                      
                    
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Nom :</label>
                    <?php  print $rows['NOMA'];?>    
                      
                      
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Prénom :</label>
                      <?php  print $rows['PRENOMA'];?>    
                    
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Fonction :</label>
                      <?php  print $rows['FONC'];?>    
                    </div>

                    
                    
                    <div class="form-group">
                      
                      <label class="font-weight-bold text-gray-100" for="textarea">Entreprise :</label>
                      <?php  print $rows['ENTRA'];?>    
                    </div>


                   
                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Adresse:</label>
                        <?php  print $rows['ADRA'];?>    
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">N° Téléphone :</label>
                    <?php  print $rows['NPHA'];?>    
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Matricule :</label>
                    <?php  print $rows['MATA'];?>    
                    </div>

                    <div class="form-group">
                    <label class="font-weight-bold text-gray-100" for="textarea">Direction :</label>
                    <?php  print $rows['DIRA'];?>    
                    </div>

                  </div>

              </div>






              <div class="form-group text-right">
                            <label class=" font-weight-bold text-gray-100 mb-0" for="textarea"><h2> اختيار السنة والفرع</h2></label>
                            <hr class="border-warning" >                            
                              <?php

                                  $connect=$path.'Config/connect_news.php';
                                  include($connect);

                                  if ($refait==false){
                                    $sqll=' SELECT * FROM equivalent_formation_etablissement where niveau='.$ro['niveau'];
                                     } else { 
                                    $sqll=' SELECT * FROM equivalent_formation_etablissement where niveau='.$ro['niveau'];
                                    }
                                  

                                  $reqq = $con->query($sqll);
                                  
                                  print "<table class='text-right'>";$i=0;
                                  while($row = $reqq->fetch()) {            
                                    $i=1;
                                  echo "<tr>
                                  <td width='40%'>
                                  <p class='h3 text-danger' id='cchoix".$row["id"]."'></p></td>
                                  <td width='50%'><h3>".$row["designation"]."</h3></td>
                                    
                                    </tr>";
                                    $i++;
                                  }
                                  print "</table>";
                              ?>

                            </div>


    <hr>
                      <input type="submit" name='submit' class="btn btn-primary btn-lg "   value="Validation">
                      <input type="button" name='retour' class="btn btn-primary btn-lg " data-dismiss="modal" aria-label="Close"  value="Retour">
                    
		</div>


           
       

                  </div>

                  

                  </form>
                  </div></div>
                  </div>


                  </div>
                  </div>
                  
                
               
                
               




        </div>


        <?php
     	$bas_page=$path.'page/bas_page.php';
     	include($bas_page);

	  ?>
    
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  
  <?php
    $base_js=$path.'page/base_js.php';
    include($base_js);
	
	?>
</body>

</html>

